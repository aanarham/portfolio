# Cara Menjalankan Portfolio Website

Website portfolio Anda sudah siap! Untuk menjalankannya di browser, ikuti langkah berikut:

## Opsi 1: Menggunakan Laravel Development Server (Disarankan)

1. **Buka terminal/command prompt** di folder project ini
2. **Jalankan perintah:**
   ```bash
   php artisan serve
   ```
3. **Buka browser** dan akses: `http://localhost:8000` atau `http://127.0.0.1:8000`

## Opsi 2: Menggunakan PHP Built-in Server

Jika `php artisan serve` tidak berfungsi, gunakan:

```bash
php -S localhost:8000 -t public
```

Lalu buka browser di: `http://localhost:8000`

## Troubleshooting

Jika ada error, pastikan:
- PHP sudah terinstall (versi 8.1 atau lebih tinggi)
- Composer dependencies sudah terinstall (`composer install`)
- File `.env` sudah dibuat dan `APP_KEY` sudah di-generate (`php artisan key:generate`)

## Foto

Foto Anda sudah ada di folder `public/images/`:
- `main-image.jpg` - Foto utama untuk halaman beranda
- `profil.jpg` - Foto profil untuk sidebar

Website sudah siap digunakan! 🎉

