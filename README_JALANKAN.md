# 🚀 Cara Menjalankan Portfolio Website

Website portfolio Anda sudah siap! Server sudah berjalan di **http://localhost:8000**

## ✅ Status

- ✅ Dependencies sudah terinstall
- ✅ Foto sudah tersedia
- ✅ File Laravel sudah dibuat
- ✅ Server sedang berjalan di port 8000

## 🌐 Akses Website

**Buka browser dan akses:**
```
http://localhost:8000
```
atau
```
http://127.0.0.1:8000
```

## 📸 Foto

Foto Anda sudah tersedia:
- `public/images/main-image.jpg` - Foto utama (halaman beranda)
- `public/images/profil.jpg` - Foto profil (sidebar)

## 🔧 Jika Ada Error

Jika website tidak bisa diakses atau ada error, jalankan perintah berikut:

1. **Stop server yang sedang berjalan** (Ctrl+C di terminal)

2. **Jalankan ulang server:**
   ```bash
   php artisan serve
   ```
   
   Atau jika tidak ada artisan:
   ```bash
   php -S localhost:8000 -t public
   ```

3. **Generate app key** (jika diperlukan):
   ```bash
   php artisan key:generate
   ```

## 📝 Catatan

- Pastikan PHP versi 8.1 atau lebih tinggi
- Pastikan port 8000 tidak digunakan aplikasi lain
- Jika port 8000 digunakan, gunakan port lain: `php artisan serve --port=8080`

---

**Selamat! Website portfolio Anda sudah siap digunakan! 🎉**

