@echo off
echo Setting up Event Rental Pro...

echo.
echo Installing Composer dependencies...
composer install

echo.
echo Generating application key...
php artisan key:generate

echo.
echo Creating database tables and seeding data...
echo Make sure you have created the 'event_rental' database in MySQL
pause
php artisan migrate:fresh --seed

echo.
echo Starting development server...
echo Visit http://localhost:8000 to view the website
php artisan serve