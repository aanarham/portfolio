# Instalasi Laravel 8

Project sudah diubah ke Laravel 8. Ikuti langkah berikut untuk setup:

## 1. Update Dependencies

Jalankan perintah berikut untuk menginstall Laravel 8 dependencies:

```bash
composer update
```

Atau jika ingin fresh install:

```bash
composer install
```

## 2. Generate Application Key

Setelah dependencies terinstall, generate application key:

```bash
php artisan key:generate
```

## 3. Setup Environment File

Pastikan file `.env` sudah ada dan dikonfigurasi dengan benar. Jika belum ada, copy dari `.env.example`:

```bash
copy .env.example .env
```

## 4. Clear Cache

Clear config cache:

```bash
php artisan config:clear
php artisan cache:clear
```

## 5. Jalankan Server

Jalankan development server:

```bash
php artisan serve
```

Website akan tersedia di: `http://localhost:8000`

## Catatan

- Laravel 8 membutuhkan PHP 7.3 atau lebih tinggi (hingga PHP 8.0)
- Pastikan semua dependencies terinstall dengan benar
- Jika ada error, jalankan `composer dump-autoload`

## Perubahan dari Laravel 10

- PHP version: 7.3+ (bukan 8.1+)
- Struktur bootstrap lebih sederhana
- Middleware menggunakan `$routeMiddleware` (bukan `$middlewareAliases`)
- Maintenance mode menggunakan `CheckForMaintenanceMode` (bukan `PreventRequestsDuringMaintenance`)

