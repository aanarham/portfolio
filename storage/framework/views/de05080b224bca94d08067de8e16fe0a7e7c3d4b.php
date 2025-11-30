<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Arham Nugraha - Portfolio'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="profile-section">
                <div class="profile-image">
                    <img src="<?php echo e(asset('images/profil.jpg')); ?>" alt="Arham Nugraha" onerror="this.src='<?php echo e(asset('images/profile.jpg')); ?>'">
                </div>
                <div class="profile-info">
                    <h1>Arham Nugraha</h1>
                    <p class="profile-title">SUPERVISOR DI PT VALOR INSPIRATION PESONA</p>
                    <p class="profile-location">Makassar, Sulawesi Selatan</p>
                    <p class="profile-nickname">Biasa dipanggil <strong>Aan</strong></p>
                </div>
            </div>
            
            <nav class="navigation">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">BERANDA</a></li>
                    <li><a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">TENTANG</a></li>
                    <li><a href="<?php echo e(route('services')); ?>" class="<?php echo e(request()->routeIs('services') ? 'active' : ''); ?>">LAYANAN</a></li>
                    <li><a href="<?php echo e(route('skills')); ?>" class="<?php echo e(request()->routeIs('skills') ? 'active' : ''); ?>">KEAHLIAN</a></li>
                    <li><a href="<?php echo e(route('education')); ?>" class="<?php echo e(request()->routeIs('education') ? 'active' : ''); ?>">PENDIDIKAN</a></li>
                    <li><a href="<?php echo e(route('experience')); ?>" class="<?php echo e(request()->routeIs('experience') ? 'active' : ''); ?>">PENGALAMAN</a></li>
                    <li><a href="<?php echo e(route('work')); ?>" class="<?php echo e(request()->routeIs('work') ? 'active' : ''); ?>">PORTOFOLIO</a></li>
                    <li><a href="<?php echo e(route('blog')); ?>" class="<?php echo e(request()->routeIs('blog') ? 'active' : ''); ?>">BLOG</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">KONTAK</a></li>
                </ul>
            </nav>
            
            <footer class="sidebar-footer">
                <p>© Hak Cipta ©<?php echo e(date('Y')); ?> Semua hak dilindungi | Template dibuat dengan ❤️ oleh Arham Nugraha</p>
            </footer>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>

<?php /**PATH D:\project\portfolioq\resources\views\layouts\app.blade.php ENDPATH**/ ?>