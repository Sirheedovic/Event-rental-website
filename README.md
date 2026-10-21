# Event Rental Pro

A Laravel-based landing page website for event equipment rentals, allowing users to rent chairs, tables, canopies, and other event equipment.

## Features

- **Equipment Catalog**: Browse available equipment by category
- **Rental Booking**: Easy-to-use booking form with date selection
- **Responsive Design**: Mobile-friendly interface using Tailwind CSS
- **Equipment Management**: Database-driven equipment inventory
- **Rental Tracking**: Track rental requests and status

## Equipment Categories

- **Chairs**: Chiavari chairs, folding chairs
- **Tables**: Round tables, rectangular tables
- **Canopies**: Wedding canopies, party tents
- **Flooring**: Dance floors
- **Audio**: Sound system packages

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd event-rental-website
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database configuration**
   - Create a MySQL database named `event_rental`
   - Update `.env` file with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=event_rental
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations and seed data**
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```

7. **Visit the website**
   Open your browser and go to `http://localhost:8000`

## Usage

### For Customers
1. Browse equipment on the home page
2. Click "Rent Now" on any equipment
3. Fill out the rental form with your details
4. Submit the rental request

### Equipment Available
- Chiavari Chairs ($8.50/day)
- Folding Chairs ($3.50/day)
- Round Tables 60" ($12.00/day)
- Rectangular Tables 8ft ($10.00/day)
- Wedding Canopy 20x30 ($150.00/day)
- Party Tent 10x20 ($85.00/day)
- Dance Floor 20x20 ($200.00/day)
- Sound System Package ($125.00/day)

## Deployment

The live site (https://richyevents.com) runs on cPanel shared hosting **without SSH access**. Everything is built on your machine, uploaded as a zip, and server-side commands run through one-time cPanel cron jobs.

### Server layout

| Path | What it is |
|------|------------|
| `/home/richyeve/event_rental/main/` | The Laravel app (code, `vendor/`, `storage/`, server `.env`) |
| `/home/richyeve/public_html/` | Web root. A copy of `public/` whose `index.php` points back to the app |
| `/opt/cpanel/ea-php84/root/usr/bin/php` | PHP 8.4 CLI to use in cron jobs (plain `php` may be an older version) |

The main domain's document root can't be changed in cPanel, so `public/` is copied into `public_html/` rather than served directly.

### Helper scripts

| Script | Where it runs | What it does |
|--------|---------------|--------------|
| `./build-prod.sh` | Your machine | Builds CSS/JS, installs production-only Composer packages in a temp copy, and zips the app to `dist/rich_events-YYYYMMDD-HHMM.zip`. Your local `vendor/` and `node_modules/` are untouched. Leaves out `.env`, `.git`, `node_modules`, tests, logs and caches. |
| `./build-prod.sh --with-db` | Your machine | Same, plus exports the local MySQL database to `dist/<db>-YYYYMMDD-HHMM.sql` (asks for the MySQL password). |
| `publish-to-public-html.sh` | Server (via cron) | Clears `public_html/` (keeping `.well-known`, `cgi-bin`, `.user.ini`, `php.ini`), copies `public/` into it, and rewrites `index.php` paths to load the app from `event_rental/main`. Safe to run repeatedly. |
| `npm run optimize-images` | Your machine | Resizes/compresses photos in `public/images` in place (max 1600px wide, JPEG quality 80), keeping file names. Add `-- --dry-run` to preview. Already-optimized photos are skipped. |

### First-time setup

1. **Database.** In cPanel → *MySQL Databases*, create a database and a user, and grant the user *All Privileges*. Note the prefixed names (e.g. `richyeve_event_rental`). To start with your local data, run `./build-prod.sh --with-db` and import the `.sql` file in *phpMyAdmin* → *Import*.
2. **Upload the app.** Run `./build-prod.sh`, upload the zip to `/home/richyeve/event_rental/` in *File Manager*, and extract it. It extracts to `event_rental/main/`. Delete the zip afterwards.
3. **Create the server `.env`** at `/home/richyeve/event_rental/main/.env` (it is never included in the zip):
   ```
   APP_NAME="Richy Events Lagos"
   APP_ENV=production
   APP_KEY=base64:...            # copy from local .env, or generate with: php artisan key:generate --show
   APP_DEBUG=false               # must be false in production — true exposes secrets on error pages
   APP_URL=https://richyevents.com

   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_PORT=3306
   DB_DATABASE=richyeve_event_rental
   DB_USERNAME=richyeve_dbuser
   DB_PASSWORD=...

   WHATSAPP_NUMBER="+234 808 600 8207"
   ```
4. **PHP settings.** In *MultiPHP Manager*, set PHP 8.2+ (8.4 recommended). Make sure the `pdo_mysql`, `mbstring`, `openssl`, `fileinfo`, `tokenizer`, `xml`, `ctype` and `curl` extensions are enabled. `storage/` and `bootstrap/cache/` must be writable (755, or 775 if you get permission errors).
5. **Publish to `public_html` and run migrations.** See [Deploying updates](#deploying-updates), steps 3 and 4.
6. **HTTPS.** In cPanel → *Domains*, turn on **Force HTTPS Redirect** for the domain.

### Deploying updates

1. **Commit your changes**, then build:
   ```bash
   ./build-prod.sh
   ```
2. **Upload** the zip from `dist/` to `/home/richyeve/event_rental/` and extract it, overwriting existing files. The server `.env` is not affected.
3. **Publish to `public_html`.** Add a cron job (cPanel → *Cron Jobs*, *Once Per Minute*):
   ```bash
   bash /home/richyeve/event_rental/main/publish-to-public-html.sh >> /home/richyeve/publish.log 2>&1
   ```
   Wait 1–2 minutes, check `publish.log` ends with `Done`, then **delete the cron job**.
4. **Database changes (only when migrations or the seeder changed).** Add another one-time cron job:
   ```bash
   cd /home/richyeve/event_rental/main && ( /opt/cpanel/ea-php84/root/usr/bin/php artisan migrate --force && /opt/cpanel/ea-php84/root/usr/bin/php artisan db:seed --class=EquipmentSeeder --force ) >> /home/richyeve/seed.log 2>&1
   ```
   Check `seed.log`, then **delete the cron job**.
   > ⚠️ `EquipmentSeeder` **replaces the entire equipment list** with what's in `database/seeders/EquipmentSeeder.php`. If prices were edited directly on the server (e.g. in phpMyAdmin), update the seeder first or leave out the `db:seed` part.
5. **Check the site** with a hard refresh (Cmd+Shift+R) on desktop and on a phone.

### Changing the WhatsApp number

Every WhatsApp button and quote request uses one value: `WHATSAPP_NUMBER` in `.env`, read by `config/business.php`. To change it on the live site, edit `WHATSAPP_NUMBER` in `/home/richyeve/event_rental/main/.env` in File Manager. It takes effect immediately, with no rebuild or redeploy. Any format works (`+234 808 600 8207` or `2348086008207`), but include the country code. If `WHATSAPP_NUMBER` is missing, blank or contains no digits, the default in `config/business.php` is used.

### Running other artisan commands without SSH

Use the same one-time cron pattern, then delete the job once it has run:
```bash
cd /home/richyeve/event_rental/main && /opt/cpanel/ea-php84/root/usr/bin/php artisan <command> >> /home/richyeve/artisan.log 2>&1
```
For example, `optimize:clear` clears cached config, routes and views. Don't run `config:cache`, `route:cache` or `view:cache` on your machine before building: they save local file paths that break on the server.

### Images

- **Keep every image in the project's `public/images/`** and deploy it through the zip. Files uploaded straight into `public_html/` are deleted the next time `publish-to-public-html.sh` runs.
- **File names are case-sensitive on the server.** `O-white.jpeg` and `o-white.jpeg` are the same file on macOS but different on Linux, so the name must exactly match what the code or database references. Spaces are fine.
- Run `npm run optimize-images` after adding new photos. Phone photos are typically 3–5 MB and become about 0.3 MB.
- HEIC files don't display in most browsers. Convert them to JPEG first.

### Troubleshooting

| Symptom | Likely cause / fix |
|---------|--------------------|
| 500 error | Read `/home/richyeve/event_rental/main/storage/logs/laravel.log`. Usual causes are wrong DB credentials in `.env`, unwritable `storage/` or `bootstrap/cache/`, or a missing PHP extension. |
| `Failed opening required .../vendor/autoload.php` | The paths in `public_html/index.php` are wrong. Re-run the publish cron, or check the three `__DIR__.'/../event_rental/main/...'` lines. |
| Image shows locally but 404s live | The file name's capitalization doesn't match, or the image isn't in `public/images/` in the project. |
| `Vite manifest not found` | Assets weren't built. `build-prod.sh` runs `npm run build`, so rebuild and redeploy. |
| `SQLSTATE[HY000] [1045] Access denied` | DB user or password in the server `.env` is wrong, or the user hasn't been granted privileges on the database. |
| `Out of range value for column 'price_per_day'` | The migration that widens the price column hasn't run. Run step 4 of *Deploying updates*. |
| Old styles after deploying | Browser cache. Hard refresh. Built CSS/JS file names change on every build, so this clears up on its own. |

## Technology Stack

- **Backend**: Laravel 12.x
- **Frontend**: Blade templates with Tailwind CSS
- **Database**: MySQL
- **PHP**: 8.1+

## File Structure

```
app/
├── Http/Controllers/
│   ├── HomeController.php      # Equipment catalog display
│   └── RentalController.php    # Rental booking logic
├── Models/
│   ├── Equipment.php           # Equipment model
│   └── Rental.php              # Rental model
database/
├── migrations/
│   ├── create_equipment_table.php
│   └── create_rentals_table.php
├── seeders/
│   └── EquipmentSeeder.php     # Sample equipment data
resources/views/
├── layouts/
│   └── app.blade.php           # Main layout
├── rental/
│   └── show.blade.php          # Rental booking form
└── home.blade.php              # Landing page
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is open-sourced software licensed under the MIT license.