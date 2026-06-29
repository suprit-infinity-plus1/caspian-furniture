# Caspian Furniture - Project Setup Guide

## Prerequisites
- PHP ^8.2
- Composer
- Node.js & NPM
- MySQL or any compatible database

## Installation Steps

1. **Clone the repository** (if not already done)
   ```bash
   git clone <repository-url>
   cd caspian-furniture
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install NPM Dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   Copy the example `.env` file and set up your database credentials:
   ```bash
   cp .env.example .env
   ```
   Generate application key:
   ```bash
   php artisan key:generate
   ```
   *Make sure to update your `.env` file with your database connection details (`DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).*

5. **Run Migrations and Seeders**
   This will create the necessary database tables and populate them with initial data (users, roles, banners, categories, etc.):
   ```bash
   php artisan migrate --seed
   ```

6. **Create Filament Admin User (Optional)**
   If you need a specific admin user to log into the dashboard:
   ```bash
   php artisan make:filament-user
   ```

7. **Compile Assets**
   For development (hot-reloading):
   ```bash
   npm run dev
   ```
   For production:
   ```bash
   npm run build
   ```

8. **Start the Application**
   ```bash
   php artisan serve
   ```
   - Main Site: `http://localhost:8000`
   - Admin Dashboard: `http://localhost:8000/admin`
