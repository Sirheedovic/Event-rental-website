#!/usr/bin/env bash
#
# Copy the contents of public/ into ~/public_html and point index.php back at the app.
# For cPanel hosts where the main domain's document root can't be changed.
#
# Run it from a one-time cPanel cron job after each upload:
#   bash ~/event_rental/main/publish-to-public-html.sh >> ~/publish.log 2>&1

set -euo pipefail

APP_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
WEB_DIR="$HOME/public_html"

# App path relative to the home folder, e.g. event_rental/main
case "$APP_DIR" in
    "$HOME"/*) APP_REL_PATH="${APP_DIR#"$HOME"/}" ;;
    *) echo "App must be inside $HOME (found at $APP_DIR)" >&2; exit 1 ;;
esac

echo "[$(date '+%Y-%m-%d %H:%M:%S')] Publishing $APP_DIR/public -> $WEB_DIR"

# Kept when public_html is cleared: SSL validation (.well-known), cgi-bin and
# cPanel's PHP settings (.user.ini / php.ini).
KEEP=(.well-known cgi-bin .user.ini php.ini)

if [ -L "$WEB_DIR" ]; then
    echo "$WEB_DIR is a symlink; refusing to clear it." >&2
    exit 1
fi

mkdir -p "$WEB_DIR"

# Clear public_html so files removed from the app don't linger on the site.
find_args=()
for name in "${KEEP[@]}"; do
    find_args+=(! -name "$name")
done
find "$WEB_DIR" -mindepth 1 -maxdepth 1 "${find_args[@]}" -exec rm -rf {} +
echo "Cleared $WEB_DIR (kept: ${KEEP[*]})"

# Trailing /. copies hidden files too (e.g. .htaccess).
cp -R "$APP_DIR/public/." "$WEB_DIR/"

# Only rewrite the original ../storage, ../vendor and ../bootstrap paths, so an
# already-edited index.php never gets the app path added twice.
sed -i.bak -E "s#__DIR__\.'/\.\./(storage|vendor|bootstrap)/#__DIR__.'/../$APP_REL_PATH/\1/#g" "$WEB_DIR/index.php"
rm -f "$WEB_DIR/index.php.bak"

echo "Done. index.php now loads the app from ~/$APP_REL_PATH"
