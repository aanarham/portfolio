# 🚀 Panduan Deploy Laravel ke InfinityFree

## Informasi Akun Anda
- **Account ID**: if0_40555982
- **Username**: if0_40555982

## 📋 Langkah-Langkah Deployment

### 1. Persiapan File

Anda perlu mengupload file-file berikut ke InfinityFree:

**File yang HARUS diupload:**
- Semua folder: `app/`, `bootstrap/`, `config/`, `database/`, `public/`, `resources/`, `routes/`, `storage/`, `vendor/`
- File: `.htaccess`, `artisan`, `composer.json`, `composer.lock`, `server.php`
- File `.env` (akan dibuat di server)

**File yang TIDAK perlu diupload:**
- `.git/` folder
- `node_modules/` folder
- `.env.example`
- `README.md`
- `tests/` folder

### 2. Login ke Control Panel InfinityFree

1. Buka: https://app.infinityfree.com/
2. Login dengan akun Anda
3. Pilih website Anda (if0_40555982)
4. Klik "Control Panel" atau "cPanel"

### 3. Upload File via File Manager

**Opsi A: Menggunakan File Manager (Recommended)**

1. Di cPanel, buka **File Manager**
2. Navigasi ke folder `htdocs/` (ini adalah root website Anda)
3. **PENTING**: Upload semua file Laravel ke folder `htdocs/`
4. Struktur folder harus seperti ini:
   ```
   htdocs/
   ├── .htaccess
   ├── app/
   ├── bootstrap/
   ├── config/
   ├── public/
   ├── resources/
   ├── routes/
   ├── storage/
   ├── vendor/
   ├── artisan
   ├── composer.json
   └── server.php
   ```

**Opsi B: Menggunakan FTP (Alternatif)**

1. Di cPanel, cari **FTP Accounts**
2. Buat FTP account baru atau gunakan yang sudah ada
3. Gunakan FileZilla atau FTP client lainnya
4. Upload semua file ke folder `htdocs/`

**FTP Details:**
- Host: `ftpupload.net` atau `ftp.if0_40555982.infinityfreeapp.com`
- Username: `if0_40555982` (atau sesuai FTP account Anda)
- Password: (password FTP Anda)
- Port: 21

### 4. Set Permissions untuk Storage

Di File Manager, set permission untuk folder berikut:

1. Klik kanan pada folder `storage/` → Change Permissions → Set ke **755**
2. Klik kanan pada folder `bootstrap/cache/` → Change Permissions → Set ke **755**

### 5. Buat File .env

1. Di File Manager, navigasi ke `htdocs/`
2. Klik "New File" dan buat file bernama `.env`
3. Edit file `.env` dan copy isi dari `.env.production` yang sudah saya buat
4. **Update informasi berikut:**

```env
APP_NAME="Portfolio Arham"
APP_ENV=production
APP_KEY=base64:Ian958q2RWFNbkW156gOaO/Ppd9P0RJzHB/4e60irj8=
APP_DEBUG=false
APP_URL=http://your-domain.infinityfreeapp.com

LOG_CHANNEL=stack
LOG_LEVEL=error

SESSION_DRIVER=file
SESSION_LIFETIME=120

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

**Catatan:** Jika tidak menggunakan database, hapus bagian DB_* atau biarkan kosong.

### 6. Verifikasi Upload

Pastikan file-file ini ada di `htdocs/`:
- ✓ `.htaccess` (di root htdocs)
- ✓ `public/.htaccess`
- ✓ `public/index.php`
- ✓ `.env`
- ✓ Folder `vendor/` (sangat penting!)

### 7. Test Website

1. Buka browser
2. Akses domain Anda: `http://your-domain.infinityfreeapp.com`
3. Website Anda seharusnya sudah berjalan!

## 🔧 Troubleshooting

### Error: "500 Internal Server Error"

**Solusi:**
1. Cek file `.htaccess` ada di root dan di folder `public/`
2. Cek permission folder `storage/` dan `bootstrap/cache/` (harus 755)
3. Pastikan file `.env` sudah dibuat dengan benar
4. Cek error log di cPanel → Error Logs

### Error: "Composer dependencies not installed"

**Solusi:**
- Pastikan folder `vendor/` sudah diupload lengkap
- Jika belum, jalankan `composer install` di komputer lokal dulu, baru upload folder `vendor/`

### Error: "The stream or file could not be opened"

**Solusi:**
1. Set permission folder `storage/` ke 755
2. Set permission folder `bootstrap/cache/` ke 755
3. Buat folder `storage/logs/` jika belum ada

### Website menampilkan listing folder

**Solusi:**
- Pastikan file `.htaccess` ada di root `htdocs/`
- Pastikan isi `.htaccess` benar (sudah saya buat)

### CSS/JS tidak muncul

**Solusi:**
1. Cek folder `public/css/` dan `public/js/` sudah diupload
2. Update `APP_URL` di `.env` dengan domain Anda yang benar
3. Clear cache browser (Ctrl + F5)

## 📝 Catatan Penting

1. **InfinityFree Limitations:**
   - Tidak bisa menjalankan `php artisan` commands
   - Tidak bisa install composer di server
   - Harus upload folder `vendor/` lengkap dari lokal

2. **Performance:**
   - Disable debug mode (`APP_DEBUG=false`)
   - Set `APP_ENV=production`
   - Cache sudah diaktifkan otomatis

3. **Security:**
   - Jangan upload file `.git/`
   - Jangan upload file `.env.example`
   - Pastikan `APP_DEBUG=false` di production

## 🎉 Selesai!

Jika semua langkah diikuti dengan benar, portfolio Anda seharusnya sudah online!

**Domain Anda akan seperti:**
- `http://if0-40555982.infinityfreeapp.com` atau
- Custom domain jika Anda sudah setting

## 📞 Butuh Bantuan?

Jika ada masalah:
1. Cek Error Logs di cPanel
2. Pastikan semua file sudah diupload
3. Verifikasi file `.env` sudah benar
4. Cek permission folder storage

---
**Dibuat untuk: Arham Nugraha (aanarham)**
**Account ID: if0_40555982**
