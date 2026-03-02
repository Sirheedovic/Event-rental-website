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