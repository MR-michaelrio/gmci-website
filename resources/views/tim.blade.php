@extends('layouts.app')

@section('title', 'Tim Kami')

@section('content')
<section class="py-24 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-indigo-600 font-bold tracking-wide uppercase text-sm mb-3">Tim Kami</h2>
            <h3 class="text-3xl md:text-5xl font-bold text-slate-900">Orang-Orang Hebat di Balik GMCI</h3>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="aspect-w-4 aspect-h-3 bg-slate-200 w-full h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ketua Umum" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8 text-center">
                    <h4 class="text-2xl font-bold text-slate-900 mb-1">Budi Santoso</h4>
                    <p class="text-indigo-600 font-medium mb-4">Ketua Umum GMCI</p>
                    <p class="text-slate-500 text-sm leading-relaxed">Berpengalaman lebih dari 15 tahun dalam memimpin organisasi dan pergerakan sosial dengan dampak nasional.</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="aspect-w-4 aspect-h-3 bg-slate-200 w-full h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sekretaris Jenderal" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8 text-center">
                    <h4 class="text-2xl font-bold text-slate-900 mb-1">Rina Amelia</h4>
                    <p class="text-indigo-600 font-medium mb-4">Sekretaris Jenderal</p>
                    <p class="text-slate-500 text-sm leading-relaxed">Pengelola operasional organisasi yang memastikan setiap program berjalan efisien dan sesuai target presisi.</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-100 group">
                <div class="aspect-w-4 aspect-h-3 bg-slate-200 w-full h-64 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Direktur Program" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-8 text-center">
                    <h4 class="text-2xl font-bold text-slate-900 mb-1">Ahmad Dhani</h4>
                    <p class="text-indigo-600 font-medium mb-4">Direktur Program</p>
                    <p class="text-slate-500 text-sm leading-relaxed">Inovator di balik program-program pemberdayaan andalan GMCI. Spesialis dalam penggalangan dana kreatif.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
