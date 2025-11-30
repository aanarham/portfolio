<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Arham Nugraha - Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                    <img src="{{ asset('images/profil.jpg') }}" alt="Arham Nugraha" onerror="this.src='{{ asset('images/profile.jpg') }}'">
                </div>
                <div class="profile-info">
                    <h1>Arham Nugraha</h1>
                    <p class="profile-title">SPV DI PT VALOR INSPIRATION PESONA</p>
                    <p class="profile-location">Makassar, Sulawesi Selatan</p>
                    <p class="profile-nickname">Biasa dipanggil <strong>Aan</strong></p>
                </div>
            </div>
            
            <nav class="navigation">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">BERANDA</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">TENTANG</a></li>
                    <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">LAYANAN</a></li>
                    <li><a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">KEAHLIAN</a></li>
                    <li><a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">PENDIDIKAN</a></li>
                    <li><a href="{{ route('experience') }}" class="{{ request()->routeIs('experience') ? 'active' : '' }}">PENGALAMAN</a></li>
                    <li><a href="{{ route('work') }}" class="{{ request()->routeIs('work') ? 'active' : '' }}">PORTOFOLIO</a></li>
                    <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">BLOG</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">KONTAK</a></li>
                </ul>
            </nav>
            
            <footer class="sidebar-footer">
                <p>© Hak Cipta ©{{ date('Y') }} Semua hak dilindungi | Template dibuat dengan asal 😂 oleh Arham Nugraha</p>
            </footer>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
    
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

