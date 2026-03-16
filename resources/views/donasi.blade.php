@extends('layouts.app')

@section('title', 'Donasi')

@section('content')
<section class="py-24 bg-white min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center border-t border-slate-200 pt-16 mt-[-64px]">
        <h2 class="text-indigo-600 font-bold tracking-wide uppercase text-sm mb-3">Salurkan Kepedulian Anda</h2>
        <h3 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6 uppercase">Donasi Global Medical Care Indonesia</h3>
        <p class="text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">
            Untuk teman-teman baik GMCI yang juga berkeinginan untuk membantu pasien-pasien kurang mampu di sekitar kita yang membutuhkan ambulans dengan cara berdonasi di:
        </p>

        <div class="bg-gradient-to-br from-slate-50 to-indigo-50/30 border border-slate-200 p-8 md:p-12 rounded-3xl shadow-sm text-center relative overflow-hidden mb-12">
            <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-blue-100/50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
            
            <div class="relative z-10 max-w-md mx-auto">
                <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-md border border-slate-100">
                    <i data-lucide="landmark" class="w-10 h-10 text-indigo-600"></i>
                </div>
                
                <h4 class="text-2xl font-bold text-slate-600 mb-2">Bank Negara Indonesia (BNI)</h4>
                <div class="bg-white px-6 py-4 rounded-xl border border-indigo-100 shadow-inner mb-4">
                    <p class="text-4xl font-extrabold text-indigo-700 tracking-wider">19888-28885</p>
                </div>
                <p class="text-lg font-semibold text-slate-800">a/n Global Medical Care Indonesia</p>
            </div>
        </div>
        
        <div class="bg-orange-50/80 border border-orange-100 rounded-2xl p-6 text-orange-800 max-w-2xl mx-auto flex items-start gap-4">
            <i data-lucide="info" class="w-6 h-6 flex-shrink-0 mt-0.5 text-orange-500"></i>
            <div class="text-left font-medium leading-relaxed">
                <p>
                    *Untuk konfirmasi donasi, Anda bisa menghubungi call center GMCI di nomor 
                    <a href="https://wa.me/6281286858680" target="_blank" class="font-bold underline hover:text-orange-900 transition-colors">0812-8685-8680</a>, 
                    atau melalui Direct Message (DM) Instagram resmi kami.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
