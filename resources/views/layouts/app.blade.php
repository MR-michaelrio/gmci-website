<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GMCI - @yield('title', 'Organisasi Terpercaya')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons & Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('galeri/logo.png') }}">
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

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
                    <a href="{{ route('home') }}"
                        class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('home') ? 'text-indigo-600' : '' }}">Beranda</a>
                    <a href="{{ route('tentang') }}"
                        class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('tentang') ? 'text-indigo-600' : '' }}">Tentang
                        Kami</a>
                    <!-- <a href="{{ route('tim') }}" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('tim') ? 'text-indigo-600' : '' }}">Tim</a> -->
                    <a href="{{ route('sibulan') }}"
                        class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('sibulan') ? 'text-indigo-600' : '' }}">SiBulan</a>
                    <a href="{{ route('kontak') }}"
                        class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('kontak') ? 'text-indigo-600' : '' }}">Kontak</a>
                    <a href="{{ route('donasi') }}"
                        class="text-slate-600 hover:text-indigo-600 font-medium transition-colors {{ request()->routeIs('donasi') ? 'text-indigo-600' : '' }}">Donasi
                        Sekarang</a>
                    <a href="https://dispatch.gmci.or.id/request" target="_blank"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-full font-semibold transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Form
                        Permintaan</a>
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
                <a href="{{ route('home') }}"
                    class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('home') ? 'text-indigo-600 bg-slate-50' : '' }}">Beranda</a>
                <a href="{{ route('tentang') }}"
                    class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('tentang') ? 'text-indigo-600 bg-slate-50' : '' }}">Tentang
                    GMCI</a>
                <a href="{{ route('tim') }}"
                    class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('tim') ? 'text-indigo-600 bg-slate-50' : '' }}">GMCI
                    Team</a>
                <a href="{{ route('sibulan') }}"
                    class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('sibulan') ? 'text-indigo-600 bg-slate-50' : '' }}">SiBulan</a>
                <a href="https://dispatch.gmci.or.id/" target="_blank"
                    class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md">Form
                    Permintaan</a>
                <a href="{{ route('kontak') }}"
                    class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50 rounded-md {{ request()->routeIs('kontak') ? 'text-indigo-600 bg-slate-50' : '' }}">Hubungi
                    Kami</a>
                <a href="{{ route('donasi') }}"
                    class="block mt-4 text-center bg-indigo-600 text-white px-3 py-3 rounded-xl font-semibold w-full">Donasi
                    Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 pt-20 pb-10 text-slate-400 border-t border-slate-800 relative overflow-hidden">
        <!-- Decorative bg -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-indigo-600/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-96 h-96 bg-blue-600/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
                <!-- Brand -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center">
                        <img src="{{ asset('galeri/logo full.png') }}" alt="GMCI Logo"
                            class="h-12 w-auto grayscale brightness-200 opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                    </div>
                    <p class="text-slate-400 leading-relaxed text-sm pr-4">
                        Global Medical Care Indonesia (GMCI) adalah lembaga swadaya masyarakat terpercaya yang
                        berdedikasi di bidang kesehatan gratis, layanan ambulans, dan tanggap bencana darurat bagi
                        mereka yang membutuhkan.
                    </p>
                    <div class="flex items-center gap-4 pt-2">
                        <a href="https://www.instagram.com/gmc.in/" target="_blank"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:text-white transition-all transform hover:-translate-y-1 shadow-lg border border-slate-700">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="https://wa.me/6281386858680" target="_blank"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-green-600 hover:text-white transition-all transform hover:-translate-y-1 shadow-lg border border-slate-700">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </a>
                        <a href="mailto:gmc.in@yahoo.com"
                            class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white transition-all transform hover:-translate-y-1 shadow-lg border border-slate-700">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="lg:col-span-2 lg:col-start-6">
                    <h5 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Navigasi</h5>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="{{ route('home') }}"
                                class="flex items-center gap-3 hover:text-white transition-colors group"><span
                                    class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-indigo-400 transition-colors"></span>
                                Beranda</a></li>
                        <li><a href="{{ route('tentang') }}"
                                class="flex items-center gap-3 hover:text-white transition-colors group"><span
                                    class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-indigo-400 transition-colors"></span>
                                Tentang Kami</a></li>
                        <li><a href="{{ route('sibulan') }}"
                                class="flex items-center gap-3 hover:text-white transition-colors group"><span
                                    class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-indigo-400 transition-colors"></span>
                                Program SiBulan</a></li>
                    </ul>
                </div>

                <!-- Action Links -->
                <div class="lg:col-span-2">
                    <h5 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Aksi</h5>
                    <ul class="space-y-4 text-sm font-medium">
                        <li>
                            <a href="{{ route('donasi') }}"
                                class="flex items-center gap-3 hover:text-indigo-300 text-indigo-400 transition-colors font-semibold group">
                                <i data-lucide="heart"
                                    class="w-4 h-4 text-indigo-500 group-hover:text-indigo-400 transition-colors"></i>
                                Donasi Sekarang
                            </a>
                        </li>
                        <li><a href="{{ route('kontak') }}"
                                class="flex items-center gap-3 hover:text-white transition-colors group"><span
                                    class="w-1.5 h-1.5 rounded-full bg-slate-700 group-hover:bg-indigo-400 transition-colors"></span>
                                Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="lg:col-span-3">
                    <h5 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Informasi Kontak</h5>
                    <ul class="space-y-5 text-sm">
                        <li>
                            <div class="flex items-start gap-4 group text-slate-300">
                                <div
                                    class="bg-slate-800 p-2 rounded-lg flex-shrink-0 group-hover:bg-green-500/20 transition-colors mt-1">
                                    <i data-lucide="phone"
                                        class="w-4 h-4 text-indigo-400 group-hover:text-green-500 transition-colors"></i>
                                </div>
                                <div class="flex flex-col space-y-2">
                                    <a href="https://wa.me/6281386858680"
                                        class="tracking-wide hover:text-white transition-colors">0813 8685 8680</a>
                                    <a href="https://wa.me/6281150112112"
                                        class="tracking-wide hover:text-white transition-colors">0811 5011 2112</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="mailto:gmc.in@yahoo.com"
                                class="flex items-center gap-4 hover:text-white transition-colors group">
                                <div
                                    class="bg-slate-800 p-2 rounded-lg flex-shrink-0 group-hover:bg-blue-500/20 transition-colors">
                                    <i data-lucide="mail"
                                        class="w-4 h-4 text-indigo-400 group-hover:text-blue-500 transition-colors"></i>
                                </div>
                                <span>gmc.in@yahoo.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div
                class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center text-sm gap-4">
                <p>&copy; 2026 Global Medical Care Indonesia. All rights reserved.</p>
                <div class="flex gap-2">
                    <span class="text-slate-600">Built with care for humanity.</span>
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

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>