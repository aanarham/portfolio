# 🚂 Deploy Laravel ke Railway.app

## ✅ File Sudah Disiapkan

Saya sudah membuat file-file yang diperlukan:
- ✓ `Procfile` - Perintah untuk menjalankan aplikasi
- ✓ `nixpacks.toml` - Konfigurasi Railway
- ✓ `composer.json` - Updated PHP version ke 8.1
- ✓ `.env.example` - Template environment variables

## 📋 Langkah Deploy ke Railway

### 1. Push Perubahan ke GitHub

Jalankan perintah ini di terminal:

```bash
git add .
git commit -m "Add Railway deployment configuration"
git push origin main
```

### 2. Buat Akun Railway

1. Buka https://railway.app
2. Klik **"Login"** atau **"Start a New Project"**
3. Pilih **"Login with GitHub"**
4. Authorize Railway untuk akses GitHub Anda

### 3. Deploy dari GitHub

1. Di Railway dashboard, klik **"New Project"**
2. Pilih **"Deploy from GitHub repo"**
3. Cari dan pilih repository **"aanarham/portfolio"**
4. Klik repository tersebut
5. Railway akan otomatis mulai deploy!

### 4. Tunggu Deployment Selesai

Railway akan:
- ✓ Detect Laravel app
- ✓ Install PHP 8.1
- ✓ Run `composer install`
- ✓ Cache config, routes, dan views
- ✓ Start aplikasi

Proses ini memakan waktu 2-5 menit.

### 5. Set Environment Variables

1. Di Railway dashboard, klik project Anda
2. Klik tab **"Variables"**
3. Tambahkan variable berikut:

```
APP_NAME=Portfolio Arham
APP_ENV=production
APP_KEY=base64:Ian958q2RWFNbkW156gOaO/Ppd9P0RJzHB/4e60irj8=
APP_DEBUG=false
LOG_LEVEL=error
SESSION_DRIVER=file
CACHE_DRIVER=file
```

4. Klik **"Add"** atau **"Save"**

### 6. Generate Domain

1. Di project dashboard, klik tab **"Settings"**
2. Scroll ke bagian **"Domains"**
3. Klik **"Generate Domain"**
4. Railway akan memberikan domain seperti: `your-app.up.railway.app`

### 7. Update APP_URL

1. Kembali ke tab **"Variables"**
2. Edit variable `APP_URL`
3. Ganti dengan domain Railway Anda:
   ```
   APP_URL=https://your-app.up.railway.app
   ```
4. Save

### 8. Redeploy (Jika Perlu)

Jika aplikasi belum jalan:
1. Klik tab **"Deployments"**
2. Klik tombol **"Redeploy"** pada deployment terakhir

### 9. Akses Website Anda! 🎉

Buka domain Railway Anda di browser:
```
https://your-app.up.railway.app
```

## 🔧 Troubleshooting

### Error: "Application Error"

**Solusi:**
1. Cek logs di tab "Deployments" → Klik deployment → "View Logs"
2. Pastikan semua environment variables sudah diset
3. Pastikan `APP_KEY` sudah ada

### Error: "500 Internal Server Error"

**Solusi:**
1. Set `APP_DEBUG=true` sementara untuk lihat error
2. Cek logs di Railway
3. Pastikan folder `storage/` dan `bootstrap/cache/` writable

### CSS/JS Tidak Muncul

**Solusi:**
1. Pastikan `APP_URL` di environment variables benar
2. Gunakan HTTPS bukan HTTP
3. Clear browser cache

### Aplikasi Lambat

**Solusi:**
- Railway free tier memiliki batasan resources
- Upgrade ke paid plan jika perlu performa lebih baik

## 💰 Biaya

- **Free Tier**: $5 credit/bulan (cukup untuk portfolio)
- **Hobby Plan**: $5/bulan untuk lebih banyak resources
- **Pro Plan**: $20/bulan untuk production apps

## 🔄 Update Aplikasi

Setiap kali Anda push ke GitHub:
```bash
git add .
git commit -m "Update portfolio"
git push origin main
```

Railway akan **otomatis redeploy** aplikasi Anda! 🚀

## 📊 Monitoring

Di Railway dashboard Anda bisa lihat:
- CPU & Memory usage
- Request logs
- Deployment history
- Metrics

## ✅ Checklist Deployment

- [ ] Push semua perubahan ke GitHub
- [ ] Login ke Railway dengan GitHub
- [ ] Deploy dari GitHub repository
- [ ] Set environment variables
- [ ] Generate domain
- [ ] Update APP_URL
- [ ] Test website
- [ ] Semua halaman berfungsi
- [ ] CSS/JS loading dengan baik

## 🎉 Selesai!

Website Anda sekarang live di Railway dengan:
- ✓ Auto-deploy dari GitHub
- ✓ HTTPS gratis
- ✓ Custom domain (opsional)
- ✓ Monitoring & logs
- ✓ Scalable infrastructure

---
**Dibuat untuk: Arham Nugraha (aanarham)**
**Repository: https://github.com/aanarham/portfolio.git**
