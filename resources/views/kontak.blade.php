@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<section class="py-24 bg-slate-50 min-h-screen flex items-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center">
        <h2 class="text-indigo-600 font-bold tracking-wide uppercase text-sm mb-3">Hubungi Kami</h2>
        <h3 class="text-4xl md:text-5xl font-bold text-slate-900 mb-12">Mari Terhubung dengan GMCI</h3>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Call Center -->
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-indigo-50 rounded-2xl flex items-center justify-center mx-auto mb-6 text-indigo-600">
                    <i data-lucide="phone-call" class="w-8 h-8"></i>
                </div>
                <h4 class="font-bold text-slate-900 mb-3 text-xl">CALL CENTER GMCI</h4>
                <div class="flex flex-col space-y-2">
                    <a href="https://wa.me/6281386858680" target="_blank" class="text-indigo-600 font-bold text-xl hover:text-indigo-800 transition-colors">0813 8685 8680</a>
                    <a href="https://wa.me/6281150112112" target="_blank" class="text-indigo-600 font-bold text-xl hover:text-indigo-800 transition-colors">0811 5011 2112</a>
                </div>
            </div>

            <!-- Instagram -->
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-pink-50 rounded-2xl flex items-center justify-center mx-auto mb-6 text-pink-600">
                    <i data-lucide="instagram" class="w-8 h-8"></i>
                </div>
                <h4 class="font-bold text-slate-900 mb-3 text-xl">INSTAGRAM GMCI</h4>
                <a href="https://www.instagram.com/gmc.in/" target="_blank" class="text-pink-600 font-bold text-lg hover:text-pink-800 transition-colors underline-offset-4 hover:underline">@gmc.in</a>
            </div>

            <!-- Email -->
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 text-blue-600">
                    <i data-lucide="mail" class="w-8 h-8"></i>
                </div>
                <h4 class="font-bold text-slate-900 mb-3 text-xl">EMAIL</h4>
                <a href="mailto:gmc.in@yahoo.com" class="text-blue-600 font-bold text-lg border-b border-transparent hover:border-blue-600 transition-colors">gmc.in@yahoo.com</a>
            </div>
        </div>
    </div>
</section>
@endsection
