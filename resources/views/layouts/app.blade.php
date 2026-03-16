<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GMCI - @yield('title', 'Organisasi Terpercaya')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons & Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('galeri/logo.png') }}">
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased bg-slate-50 text-slate-800 selection:bg-indigo-500 selection:text-white overflow-x-hidden">

    <!-- Navigation -->
    <nav class="glass-nav fixed w-full z-50 top-0 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center cursor-pointer">
                    <img src="{{ asset('galeri/logo full.png') }}" alt="GMCI Logo" class="h-10 w-auto">
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('home') ? 'text-indigo-600' : '' }}">Beranda</a>
                    <a href="{{ route('tentang') }}" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('tentang') ? 'text-indigo-600' : '' }}">Tentang Kami</a>
                    <!-- <a href="{{ route('tim') }}" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('tim') ? 'text-indigo-600' : '' }}">Tim</a> -->
                    <a href="{{ route('sibulan') }}" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('sibulan') ? 'text-indigo-600' : '' }}">SiBulan</a>
                    <a href="{{ route('kontak') }}" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('kontak') ? 'text-indigo-600' : '' }}">Kontak</a>
                    <a href="{{ route('donasi') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-full font-semibold transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Donasi Sekarang</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-slate-900 focus:outline-none p-2">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-slate-100 absolute w-full shadow-lg">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('home') ? 'text-indigo-600 bg-slate-50' : '' }}">Beranda</a>
                <a href="{{ route('tentang') }}" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('tentang') ? 'text-indigo-600 bg-slate-50' : '' }}">Tentang GMCI</a>
                <a href="{{ route('tim') }}" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('tim') ? 'text-indigo-600 bg-slate-50' : '' }}">GMCI Team</a>
                <a href="{{ route('sibulan') }}" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('sibulan') ? 'text-indigo-600 bg-slate-50' : '' }}">SiBulan</a>
                <a href="{{ route('kontak') }}" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('kontak') ? 'text-indigo-600 bg-slate-50' : '' }}">Hubungi Kami</a>
                <a href="{{ route('donasi') }}" class="block mt-4 text-center bg-indigo-600 text-white px-3 py-3 rounded-xl font-semibold w-full">Donasi Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 py-16 text-slate-400 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-12 border-b border-slate-800 pb-12">
                <div class="md:col-span-2 space-y-6">
                    <div class="flex items-center">
                        <img src="{{ asset('galeri/logo full.png') }}" alt="GMCI Logo" class="h-10 w-auto grayscale brightness-200 opacity-90">
                    </div>
                    <p class="max-w-md leading-relaxed text-sm">
                        Global Medical Care Indonesia (GMCI) adalah adalah lembaga swadaya masyarakat yang bergerak di bidang kesehatan dan kerelawanan.
                    </p>
                </div>
                
                <div>
                    <h5 class="text-white font-bold mb-6">Navigasi</h5>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('tentang') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('tim') }}" class="hover:text-white transition-colors">GMCI Team</a></li>
                        <li><a href="{{ route('sibulan') }}" class="hover:text-white transition-colors">Program SiBulan</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="text-white font-bold mb-6">Aksi</h5>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ route('donasi') }}" class="hover:text-indigo-400 font-medium transition-colors">Donasi Sekarang</a></li>
                        <li><a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Menjadi Relawan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row justify-between items-center text-sm gap-4">
                <p>&copy; 2026 GMCI Organization. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize lucide icons
        lucide.createIcons();

        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if(btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
