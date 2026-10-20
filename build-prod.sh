#!/usr/bin/env bash
#
# Build a production-ready zip for uploading to a server without shell access.
#
# Usage:
#   ./build-prod.sh             # build the app zip
#   ./build-prod.sh --with-db   # also export the MySQL database to a .sql file
#
# Output goes to dist/. Your local vendor/ and node_modules/ are left untouched.

set -euo pipefail

# Name of the folder inside the zip. Extract the zip inside ~/event_rental on the
# server so it lands at ~/event_rental/main.
APP_DIR_NAME="main"

PROJECT_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
DIST_DIR="$PROJECT_ROOT/dist"
TIMESTAMP="$(date +%Y%m%d-%H%M)"
ZIP_PATH="$DIST_DIR/rich_events-$TIMESTAMP.zip"
STAGING_ROOT="$(mktemp -d)"
STAGING_DIR="$STAGING_ROOT/$APP_DIR_NAME"

WITH_DB=false
for arg in "$@"; do
    case "$arg" in
        --with-db) WITH_DB=true ;;
        -h|--help) sed -n '3,9p' "$0" | sed 's/^# \{0,1\}//'; exit 0 ;;
        *) echo "Unknown option: $arg" >&2; exit 1 ;;
    esac
done

cleanup() { rm -rf "$STAGING_ROOT"; }
trap cleanup EXIT

step() { printf '\n\033[1;34m==> %s\033[0m\n' "$1"; }

for cmd in composer npm rsync zip; do
    command -v "$cmd" >/dev/null || { echo "Missing required command: $cmd" >&2; exit 1; }
done

cd "$PROJECT_ROOT"
mkdir -p "$DIST_DIR"

step "Building frontend assets"
[ -d node_modules ] || npm ci
npm run build

step "Copying project to staging folder"
rsync -a \
    --exclude='/.git/' \
    --exclude='/node_modules/' \
    --exclude='/vendor/' \
    --exclude='/dist/' \
    --exclude='/tests/' \
    --exclude='/.env' \
    --exclude='/.env.*' \
    --include='/.env.example' \
    --exclude='/*.md' \
    --exclude='/setup.bat' \
    --exclude='/build-prod.sh' \
    --exclude='/phpunit.xml' \
    --exclude='/.phpunit.result.cache' \
    --exclude='/.idea/' \
    --exclude='/.vscode/' \
    --exclude='/public/hot' \
    --exclude='/public/storage' \
    --exclude='/database/*.sqlite' \
    --include='.gitignore' \
    --exclude='/storage/logs/*' \
    --exclude='/storage/framework/cache/data/*' \
    --exclude='/storage/framework/sessions/*' \
    --exclude='/storage/framework/views/*' \
    --exclude='/storage/framework/testing/*' \
    --exclude='/bootstrap/cache/*' \
    --exclude='.DS_Store' \
    ./ "$STAGING_DIR/"

step "Installing production PHP dependencies"
(cd "$STAGING_DIR" && composer install --no-dev --optimize-autoloader --no-interaction --no-progress)

step "Creating zip"
(cd "$STAGING_ROOT" && zip -rq "$ZIP_PATH" "$APP_DIR_NAME")
echo "Created: $ZIP_PATH ($(du -h "$ZIP_PATH" | cut -f1))"

if $WITH_DB; then
    step "Exporting database"
    env_value() { grep -E "^$1=" .env | tail -1 | cut -d= -f2- | sed -E 's/^["'\'']|["'\'']$//g'; }
    DB_NAME="$(env_value DB_DATABASE)"
    DB_USER="$(env_value DB_USERNAME)"
    SQL_PATH="$DIST_DIR/${DB_NAME}-$TIMESTAMP.sql"
    echo "Enter the MySQL password for '$DB_USER':"
    mysqldump -u "$DB_USER" -p --single-transaction --no-tablespaces "$DB_NAME" > "$SQL_PATH"
    echo "Created: $SQL_PATH ($(du -h "$SQL_PATH" | cut -f1))"
fi

step "Done"
echo "Upload the zip to your server's home folder and extract it."
echo "Remember: the server needs its own .env (it is not included in the zip)."
