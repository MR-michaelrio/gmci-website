@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Slider Section -->
    <section class="relative h-[calc(100vh-80px)] xl:h-[800px] w-full overflow-hidden bg-slate-900 group" id="hero-slider">
        <!-- Slides Container -->
        <div class="relative h-full w-full flex transition-transform duration-700 ease-in-out" id="slides-container">
            
            <!-- Slide 1 -->
            <div class="h-full w-full flex-shrink-0 relative">
                <img src="{{ asset('galeri/hero 1.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="Medical Team">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl animate-fade-in-up">
                            <span class="inline-block py-1 px-3 rounded-full bg-indigo-500/20 text-indigo-300 font-semibold text-sm mb-4 border border-indigo-400/30 tracking-wider uppercase backdrop-blur-sm">Aksi Nyata</span>
                            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                                Dedikasi Untuk <br/> <span class="bg-gradient-to-r from-indigo-400 to-blue-400 gradient-text text-transparent bg-clip-text">Kesehatan</span> Anda.
                            </h1>
                            <p class="text-xl text-slate-300 mb-8 leading-relaxed">
                                Melayani dengan sepenuh hati, menghadirkan akses kesehatan berkualitas bagi mereka yang paling membutuhkan di seluruh pelosok negeri.
                            </p>
                            <div class="flex gap-4">
                                <a href="#tentang-kami-home" class="bg-indigo-600 hover:bg-indigo-500 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg hover:shadow-indigo-500/25">
                                    Kenali Kami Lebih Dekat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="h-full w-full flex-shrink-0 relative">
                <img src="{{ asset('galeri/hero 2.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="Ambulance Service">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl relative">
                            <span class="inline-block py-1 px-3 rounded-full bg-indigo-500/20 text-indigo-300 font-semibold text-sm mb-4 border border-indigo-400/30 tracking-wider uppercase backdrop-blur-sm">Layanan Reaksi Cepat</span>
                            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                                Armada <br/> <span class="bg-gradient-to-r from-indigo-400 to-blue-400 gradient-text text-transparent bg-clip-text">Siaga 24 Jam</span>.
                            </h1>
                            <p class="text-xl text-slate-300 mb-8 leading-relaxed">
                                Armada ambulans berstandar medis siap diturunkan kapan saja untuk menjemput harapan dan menyelamatkan nyawa di saat kritis.
                            </p>
                            <div class="flex gap-4">
                                <a href="{{ route('donasi') }}" class="bg-white hover:bg-slate-50 text-indigo-600 px-8 py-4 rounded-full font-semibold transition-all shadow-lg">
                                    Dukung Armada Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="h-full w-full flex-shrink-0 relative">
                <img src="{{ asset('galeri/hero 3.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="Charity Health">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl relative">
                            <span class="inline-block py-1 px-3 rounded-full bg-indigo-500/20 text-indigo-300 font-semibold text-sm mb-4 border border-indigo-400/30 tracking-wider uppercase backdrop-blur-sm">Pemeriksaan Gratis</span>
                            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                                Kesehatan Untuk <br/> <span class="bg-gradient-to-r from-indigo-400 to-blue-400 gradient-text text-transparent bg-clip-text">Semua Kalangan</span>.
                            </h1>
                            <p class="text-xl text-slate-300 mb-8 leading-relaxed">
                                Membawa layanan pemeriksaan gratis langsung ke jantung masyarakat karena kesehatan adalah hak, bukan keistimewaan.
                            </p>
                            <div class="flex gap-4">
                                <a href="#galeri" class="border border-white/30 hover:bg-white/10 text-white px-8 py-4 rounded-full font-semibold transition-all backdrop-blur-sm">
                                    Lihat Galeri Kegiatan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="h-full w-full flex-shrink-0 relative">
                <img src="{{ asset('galeri/hero 4.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="Emergency Response">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-2xl relative">
                            <span class="inline-block py-1 px-3 rounded-full bg-indigo-500/20 text-indigo-300 font-semibold text-sm mb-4 border border-indigo-400/30 tracking-wider uppercase backdrop-blur-sm">Tanggap Bencana</span>
                            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                                Sigap Di Garis <br/> <span class="bg-gradient-to-r from-indigo-400 to-blue-400 gradient-text text-transparent bg-clip-text">Kemanusiaan</span>.
                            </h1>
                            <p class="text-xl text-slate-300 mb-8 leading-relaxed">
                                Hadir di titik-titik bencana, memberikan evakuasi dan pertolongan medis pertama yang cepat, tepat, dan ikhlas.
                            </p>
                            <div class="flex gap-4">
                                <a href="{{ route('donasi') }}" class="bg-indigo-600 hover:bg-indigo-500 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg hover:shadow-indigo-500/25">
                                    Berikan Bantuan Darurat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <button id="prev-btn" class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 rounded-full bg-black/30 hover:bg-black/50 text-white flex items-center justify-center backdrop-blur-md opacity-0 group-hover:opacity-100 transition-all z-10">
            <i data-lucide="chevron-left" class="w-6 h-6"></i>
        </button>
        <button id="next-btn" class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 rounded-full bg-black/30 hover:bg-black/50 text-white flex items-center justify-center backdrop-blur-md opacity-0 group-hover:opacity-100 transition-all z-10">
            <i data-lucide="chevron-right" class="w-6 h-6"></i>
        </button>

        <!-- Slider Indicators -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10" id="slider-indicators">
            <button class="w-3 h-3 rounded-full bg-white transition-all shadow-md indicator-dot" data-index="0"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all shadow-md indicator-dot" data-index="1"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all shadow-md indicator-dot" data-index="2"></button>
            <button class="w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all shadow-md indicator-dot" data-index="3"></button>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang-kami-home" class="py-24 bg-white relative">
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-slate-50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 opacity-70"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 font-semibold text-sm mb-6 border border-blue-100 uppercase tracking-wide">
                        Tentang Kami
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6 leading-tight">
                        Global Medical Care <span class="text-indigo-600">Indonesia</span>
                    </h2>
                    
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        Kami adalah lembaga swadaya masyarakat yang bergerak di bidang kesehatan dan kerelawanan. Berdiri dengan satu tekad bulat: memastikan tidak ada satu pun masyarakat yang terabaikan hak kesehatannya. Ruang lingkup yang kami kerjakan meliputi:
                    </p>
                    
                    <div class="space-y-6 mb-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 flex items-center justify-center flex-shrink-0 shadow-sm border border-indigo-100 text-indigo-600">
                                <i data-lucide="stethoscope" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 text-xl mb-1">Pemeriksaan Gratis</h3>
                                <p class="text-slate-600 leading-relaxed">Layanan pemeriksaan kesehatan gratis secara berkala ke berbagai titik rawan medis dan pelosok daerah.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center flex-shrink-0 shadow-sm border border-blue-100 text-blue-600">
                                <i data-lucide="ambulance" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 text-xl mb-1">Ambulans & Tanggap Bencana</h3>
                                <p class="text-slate-600 leading-relaxed">Layanan antar pasien menggunakan ambulans kategori lengkap untuk kaum dhuafa, serta penurunan relawan khusus medis di area bencana.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200">
                        <div class="flex items-start gap-3">
                            <i data-lucide="badge-check" class="w-6 h-6 text-green-500 flex-shrink-0 mt-1"></i>
                            <p class="text-slate-700 font-medium italic">
                                "Anggota yang kami miliki berbekal dengan kompetensi pelayanan kesehatan publik yang tersertifikasi, terdiri dari barisan perawat sigap dan dokter yang berdedikasi tinggi."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Image / Visual Content -->
                <div class="relative hidden lg:block">
                    <div class="absolute inset-0 bg-indigo-600 rounded-3xl transform rotate-3 scale-105 opacity-10"></div>
                    <img src="{{ asset('galeri/hero 2.webp') }}" alt="Tim Medis GMCI" class="relative z-10 rounded-3xl shadow-2xl object-cover h-[600px] w-full border-4 border-white">
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Kegiatan Section -->
    <section id="galeri" class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-indigo-600 font-bold tracking-wide uppercase text-sm mb-3">Dokumentasi Aksi</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-slate-900">Galeri Kegiatan GMCI</h3>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-slate-600">
                    Potret nyata dari lapangan. Kami percaya bahwa setiap aksi kepedulian sekecil apapun layak untuk disebarluaskan sebagai inspirasi.
                </p>
            </div>

            <!-- Masonry Grid -->
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                <!-- Image 1 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 1.jpg') }}" alt="Kegiatan GMCI 1" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 2.jpg') }}" alt="Kegiatan GMCI 2" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 3.jpg') }}" alt="Kegiatan GMCI 3" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 4.jpg') }}" alt="Kegiatan GMCI 4" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 5.jpg') }}" alt="Kegiatan GMCI 5" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 6.jpg') }}" alt="Kegiatan GMCI 6" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Image 7 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 7.jpg') }}" alt="Kegiatan GMCI 7" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Image 8 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 8.jpg') }}" alt="Kegiatan GMCI 8" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Image 9 -->
                <div class="break-inside-avoid relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all">
                    <img src="{{ asset('galeri/galeri 9.jpg') }}" alt="Kegiatan GMCI 9" class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h4 class="font-bold text-lg">Dokumentasi Kegiatan</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="https://www.instagram.com/gmc.in/" target="_blank" class="inline-flex items-center gap-2 bg-white border border-slate-200 hover:border-indigo-300 hover:bg-slate-50 text-slate-700 font-semibold px-8 py-4 rounded-full transition-all shadow-sm">
                    <i data-lucide="instagram" class="w-5 h-5 text-indigo-600"></i>
                    Lihat Lebih Banyak di Instagram
                </a>
            </div>
        </div>
    </section>

    <!-- Slider Javascript Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('slides-container');
            const totalSlides = container.children.length;
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const indicators = document.querySelectorAll('.indicator-dot');
            let currentSlide = 0;
            let slideInterval;

            const updateSlider = () => {
                container.style.transform = `translateX(-${currentSlide * 100}%)`;
                indicators.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.remove('bg-white/40');
                        dot.classList.add('bg-white');
                    } else {
                        dot.classList.add('bg-white/40');
                        dot.classList.remove('bg-white');
                    }
                });
            };

            const nextSlide = () => {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            };

            const prevSlide = () => {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlider();
            };

            const resetInterval = () => {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 5000);
            };

            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });

            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });

            indicators.forEach(dot => {
                dot.addEventListener('click', (e) => {
                    currentSlide = parseInt(e.target.dataset.index);
                    updateSlider();
                    resetInterval();
                });
            });

            // Start Autoplay
            slideInterval = setInterval(nextSlide, 5000);
        });
    </script>
@endsection
