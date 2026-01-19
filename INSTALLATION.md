# Installation Guide - S2E Logistics ERP

## Prerequisites

- PHP 8.1 or higher
- MySQL 5.7 or higher
- Composer
- Node.js and npm

## Installation Steps

1. **Clone/Download the project**
   ```bash
   cd Logistic11
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install Node Dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Database**
   Edit `.env` file and set your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=logistics_erp
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

6. **Run Migrations and Seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Build Frontend Assets**
   ```bash
   npm run build
   # Or for development:
   npm run dev
   ```

8. **Start Development Server**
   ```bash
   php artisan serve
   ```

9. **Access the Application**
   - URL: http://localhost:8000
   - Email: admin@s2elogistics.com
   - Password: password

## Default Users

- **Admin**: admin@s2elogistics.com / password
- **Accounts**: accounts@s2elogistics.com / password
- **Operations**: operations@s2elogistics.com / password

## Production Deployment

1. Set `APP_ENV=production` and `APP_DEBUG=false` in `.env`
2. Run `php artisan config:cache`
3. Run `php artisan route:cache`
4. Run `php artisan view:cache`
5. Ensure proper file permissions on `storage` and `bootstrap/cache`

## Database Schema

The system includes comprehensive database schema for:
- CN Management
- Finance & Accounting (Double Entry)
- Payroll
- User Management & Permissions
- Audit Logs

All migrations are in `database/migrations/` directory.

