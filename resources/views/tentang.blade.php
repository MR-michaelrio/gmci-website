@extends('layouts.app')

@section('title', 'Tentang GMCI')

@section('content')
<section class="py-24 bg-white relative min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-indigo-600 font-bold tracking-wide uppercase text-sm mb-3">Tentang GMCI</h2>
            <h3 class="text-3xl md:text-5xl font-bold text-slate-900">Fondasi Pergerakan Kami</h3>
        </div>

        <!-- Latar Belakang -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-slate-900 mb-6 text-center">Latar Belakang</h3>
            <div class="bg-slate-50 p-8 md:p-10 rounded-3xl border border-slate-100 text-slate-700 leading-relaxed space-y-6 shadow-sm">
                <p>
                    Masalah kesehatan selalu mendapat perhatian khusus dari pemerintah karena kesehatan sangat mencakup segala aspek rutinitas dalam segala bidang. Itulah yang terkadang masih menjadi satu masalah bagi masyarakat terutama mengenal sarana dan prasarana meski pemerintah telah mencanangkan program BPJS bagi masyarakat yang khususnya kurang mampu.
                </p>
                <p>
                    Namun demikian segalanya memang berada dalam garis keterbatasan mengingat banyaknya hal yang harus diurus oleh pemerintah diluar bidang kesehatan. Sebagai contoh adalah masalah Emergency/Transportasi pasien Gawat Darurat yang sampai saat ini terasa masih kurang seimbang dengan jumlah masyarakat dalam satu Kota tertentu terutama di daerah Kecamatan dan Kelurahan.
                </p>
                <p>
                    Dapat dibayangkan dalam suatu Kelurahan terdapat ratusan ribu orang dengan hanya satu atau dua unit ambulans saja sebagai sarana yang dipersiapkan untuk mengurusi masalah medis di daerah tersebut itupun dilihat dari standar fasilitasnya pun belum memadai. Di samping itu prosedur penggunaannya pun terkadang tidak dapat maksimal untuk sepenuhnya dapat digunakan oleh masyarakat mengingat biaya yang dikeluarkan juga cukup tinggi dan hal itu terasa berat dirasakan terutama bagi mereka yang kurang mampu secara ekonomi.
                </p>
            </div>
        </div>

        <!-- Visi Misi -->
        <div class="grid md:grid-cols-2 gap-12 lg:gap-20 mb-20 items-stretch">
            <div class="space-y-8 h-full">
                <div class="p-8 rounded-3xl bg-indigo-50 border border-indigo-100 hover:shadow-lg transition-all h-full">
                    <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-md shadow-indigo-200">
                        <i data-lucide="eye" class="w-7 h-7 text-white"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-4">Visi Kami</h4>
                    <p class="text-slate-700 font-medium text-lg leading-relaxed">
                        Menjadi pusat no 1 penanganan medis pertolongan pertama pada pasien Dhuafa di Indonesia.
                    </p>
                </div>
            </div>
            
            <div class="space-y-8 h-full">
                <div class="p-8 rounded-3xl bg-blue-50 border border-blue-100 hover:shadow-lg transition-all h-full">
                    <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-md shadow-blue-200">
                        <i data-lucide="target" class="w-7 h-7 text-white"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-4">Misi Kami</h4>
                    <ul class="space-y-4 text-slate-700 font-medium">
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5"></i>
                            <span>Melayani dengan tanggap dan profesional dalam penanganan antar pasien.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5"></i>
                            <span>Hadir dan terlibat dalam penanganan penanggulangan bencana pada Area Medis.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5"></i>
                            <span>Memuliakan umat Khususnya kaum Dhuafa secara Ikhlas dan Santun.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Budaya Kerja -->
        <div class="pt-16 border-t border-slate-100">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-slate-900 mb-4">Budaya Kerja GMCI</h3>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg">Budaya Kerja <span class="font-bold text-indigo-600">"PINTAR"</span></p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- P -->
                <div class="p-8 bg-white border border-slate-200 rounded-2xl hover:border-indigo-500 hover:shadow-md transition-all group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-slate-50 group-hover:bg-indigo-50 rounded-full flex items-center justify-center mb-6 transition-colors shadow-sm">
                        <span class="text-3xl font-black text-indigo-600">P</span>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900">Profesional</h4>
                </div>
                
                <!-- IN -->
                <div class="p-8 bg-white border border-slate-200 rounded-2xl hover:border-indigo-500 hover:shadow-md transition-all group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-slate-50 group-hover:bg-indigo-50 rounded-full flex items-center justify-center mb-6 transition-colors shadow-sm">
                        <span class="text-3xl font-black text-indigo-600">IN</span>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900">INtergrity</h4>
                </div>
                
                <!-- TA -->
                <div class="p-8 bg-white border border-slate-200 rounded-2xl hover:border-indigo-500 hover:shadow-md transition-all group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-slate-50 group-hover:bg-indigo-50 rounded-full flex items-center justify-center mb-6 transition-colors shadow-sm">
                        <span class="text-3xl font-black text-indigo-600">TA</span>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900">TAnggap</h4>
                </div>
                
                <!-- R -->
                <div class="p-8 bg-white border border-slate-200 rounded-2xl hover:border-indigo-500 hover:shadow-md transition-all group flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-slate-50 group-hover:bg-indigo-50 rounded-full flex items-center justify-center mb-6 transition-colors shadow-sm">
                        <span class="text-3xl font-black text-indigo-600">R</span>
                    </div>
                    <h4 class="text-2xl font-bold text-slate-900">Ramah</h4>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
