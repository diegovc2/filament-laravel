# Filament Laravel Project

This is a Laravel application with Filament admin panel.

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or another database supported by Laravel

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/filament-laravel.git
   cd filament-laravel
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install Node.js dependencies:
   ```
   npm install
   ```

4. Copy the environment file and configure it:
   ```
   cp .env.example .env
   ```
   Edit `.env` with your database credentials and other settings.

5. Generate application key:
   ```
   php artisan key:generate
   ```

6. Run database migrations (if applicable):
   ```
   php artisan migrate
   ```

7. Build assets:
   ```
   npm run build
   ```

8. Start the development server:
   ```
   php artisan serve
   ```

9. Access the application at `http://localhost:8000`

## Filament Admin

Filament admin panel is available at `http://localhost:8000/admin` (or your configured path).

## Testing

Run tests with:
```
php artisan test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).