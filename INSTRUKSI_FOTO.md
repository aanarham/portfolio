# Instruksi Menambahkan Foto ke Portfolio

## 📸 Cara Menambahkan Foto Anda

Untuk menggunakan foto yang Anda berikan di portfolio website, ikuti langkah berikut:

### 1. Siapkan Foto Anda

Anda memiliki foto artistik dengan efek retakan yang sangat menarik! Foto ini bisa digunakan sebagai:
- **Foto utama** di halaman beranda (home page)
- **Foto profil** di sidebar (jika Anda punya versi crop-nya)

### 2. Simpan Foto ke Folder

Silakan simpan foto Anda dengan nama berikut di folder `public/images/`:

- **Untuk foto utama**: simpan sebagai `main-image.jpg`
- **Untuk foto profil** (opsional): simpan sebagai `profile.jpg` (bisa crop dari foto utama atau gunakan foto lain)

### 3. Format dan Ukuran Foto

**Foto Utama (main-image.jpg)**:
- Format: JPG, PNG, atau WebP
- Ukuran disarankan: 600x800px atau lebih besar (rasio portrait)
- Ukuran file: maksimal 2MB

**Foto Profil (profile.jpg)** - Opsional:
- Format: JPG, PNG, atau WebP
- Ukuran disarankan: 300x300px atau lebih besar (bentuk persegi)
- Ukuran file: maksimal 1MB

### 4. Lokasi File

```
portfolioq/
└── public/
    └── images/
        ├── main-image.jpg    ← Foto utama Anda di sini
        └── profile.jpg       ← Foto profil (opsional)
```

### 5. Setelah Foto Ditambahkan

Website akan otomatis menampilkan foto Anda di:
- **Halaman Beranda**: foto utama akan muncul di sebelah kanan
- **Sidebar**: foto profil akan muncul di bagian atas sidebar (jika ada)

### Tips

- Pastikan foto berkualitas baik untuk hasil yang optimal
- Jika foto belum tersedia, website akan menampilkan placeholder
- Anda bisa mengubah nama file di file `resources/views/pages/home.blade.php` jika ingin menggunakan nama file berbeda

---

**Catatan**: Foto yang Anda berikan sangat artistik dan unik, cocok sekali untuk portfolio! Pastikan file foto disimpan dengan nama yang tepat di folder `public/images/`.

