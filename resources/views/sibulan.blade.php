@extends('layouts.app')

@section('title', 'Program SiBulan')

@section('content')
<!-- Hero Image Section -->
<section class="relative w-full h-[60vh] md:h-[80vh] min-h-[500px] bg-slate-900 border-b border-indigo-500/20">
    <img src="{{ asset('galeri/sibulan-indonesia.webp') }}" alt="Komunitas SiBulan Full" class="w-full h-full object-cover opacity-70">
    
    <!-- Gradient Overlay blending into the content section -->
    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/95 via-slate-900/40 to-transparent"></div>
    
    <div class="absolute bottom-0 left-0 w-full p-6 md:p-12 z-10 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/20 text-indigo-300 font-medium text-sm mb-6 border border-indigo-400/30 backdrop-blur-md animate-fade-in-up">
                 <span class="flex w-2 h-2 bg-indigo-400 rounded-full animate-pulse"></span>
                 Program Unggulan GMCI
             </div>
             <h2 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-tight tracking-tight drop-shadow-2xl">
                 Bersama <br class="hidden md:block"/>
                 <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-indigo-400">Komunitas SiBulan</span>
             </h2>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-slate-900 relative overflow-hidden min-h-[50vh]">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-x-0 top-0 h-full overflow-hidden -z-10">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full bg-indigo-500/10 blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full bg-blue-500/10 blur-3xl opacity-50"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <!-- Main Description -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-8 md:p-12 rounded-3xl mb-12 shadow-2xl relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-48 h-48 bg-indigo-500/20 rounded-bl-full -z-10 group-hover:scale-110 transition-transform duration-500"></div>
            
            <div class="flex items-center gap-4 mb-6">
                <div class="w-16 h-16 bg-indigo-500/20 rounded-2xl flex items-center justify-center text-indigo-400 shadow-inner">
                    <i data-lucide="users" class="w-8 h-8"></i>
                </div>
                <h3 class="text-3xl font-bold text-white tracking-wide">KOMUNITAS SIBULAN</h3>
            </div>

            <p class="text-slate-300 text-xl md:text-2xl leading-relaxed relative z-10 max-w-5xl font-light">
                GMCI ikut tergabung dalam <strong class="text-white font-bold">Komunitas SiBulan</strong> (Siaga Ambulans). Kami berkolaborasi dengan tujuan mulia untuk mensolusikan transportasi dan pendampingan bagi pasien-pasien kaum dhuafa yang membutuhkan secara cepat, tanggap, dan manusiawi.
            </p>
        </div>
        
        <!-- KPI / Stats Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-indigo-900/40 border border-indigo-500/30 p-8 md:p-10 rounded-3xl backdrop-blur-sm shadow-inner hover:bg-indigo-800/40 transition-colors group flex flex-col md:flex-row items-center text-center md:text-left gap-8">
                <div class="w-24 h-24 bg-indigo-500/20 rounded-[2rem] flex items-center justify-center text-indigo-300 group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white group-hover:shadow-lg group-hover:shadow-indigo-500/30 transition-all duration-300 flex-shrink-0">
                    <i data-lucide="ambulance" class="w-12 h-12"></i>
                </div>
                <div>
                    <h4 class="text-6xl font-black text-white mb-2 tracking-tighter">140<span class="text-indigo-400">+</span></h4>
                    <p class="text-slate-300 text-lg font-medium">Ambulans Terdaftar di berbagai daerah</p>
                </div>
            </div>

            <div class="bg-blue-900/40 border border-blue-500/30 p-8 md:p-10 rounded-3xl backdrop-blur-sm shadow-inner hover:bg-blue-800/40 transition-colors group flex flex-col md:flex-row items-center text-center md:text-left gap-8">
                <div class="w-24 h-24 bg-blue-500/20 rounded-[2rem] flex items-center justify-center text-blue-300 group-hover:scale-110 group-hover:bg-blue-500 group-hover:text-white group-hover:shadow-lg group-hover:shadow-blue-500/30 transition-all duration-300 flex-shrink-0">
                    <i data-lucide="building-2" class="w-12 h-12"></i>
                </div>
                <div>
                    <h4 class="text-6xl font-black text-white mb-2 tracking-tighter">200<span class="text-blue-400">+</span></h4>
                    <p class="text-slate-300 text-lg font-medium">Lembaga Kesehatan & Pendampingan</p>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection
