@extends('layouts.app')

@section('title', 'Tentang Sistem')

@section('content')
<div class="space-y-20 animate-fade-in">

    <section class="max-w-4xl">
        <h2 class="text-xs font-black text-earth_dark uppercase tracking-[0.4em] mb-4">Edukasi Kualitas Digital</h2>
        <h1 class="text-4xl md:text-5xl font-black text-industrial uppercase leading-tight">
            Transparansi & Standar <br>
            <span class="text-earth_dark underline decoration-industrial/10">Kualitas Sistem</span>
        </h1>
        <p class="mt-8 text-industrial/70 text-lg leading-relaxed border-l-4 border-earth_light pl-6">
            Website Portal Kelurahan Karangjati ini dikembangkan bukan hanya sebagai sarana informasi, namun sebagai <strong>objek penerapan Quality Assurance (QA)</strong> untuk menjamin bahwa layanan publik digital memenuhi standar teknis yang telah ditetapkan.
        </p>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-[2rem] border border-industrial/5 shadow-sm">
            <div class="w-12 h-12 bg-industrial text-sand rounded-xl flex items-center justify-center mb-6">
                <i class="fas fa-microscope text-xl"></i>
            </div>
            <h3 class="text-xl font-bold text-industrial mb-4 tracking-tight">Quality Control (QC)</h3>
            <p class="text-sm text-industrial/60 leading-relaxed">
                Berfokus pada <strong>produk akhir</strong>. Proses untuk memastikan bahwa hasil pengembangan sistem sudah sesuai dengan spesifikasi sebelum dipublikasikan kepada warga.
            </p>
        </div>

        <div class="bg-earth_dark text-sand p-8 rounded-[2rem] shadow-xl shadow-earth_dark/20">
            <div class="w-12 h-12 bg-sand text-earth_dark rounded-xl flex items-center justify-center mb-6">
                <i class="fas fa-shield-check text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4 tracking-tight">Quality Assurance (QA)</h3>
            <p class="text-sm text-sand/80 leading-relaxed">
                Berfokus pada <strong>proses pengembangan</strong>. Menjamin bahwa setiap langkah pembuatan sistem mengikuti standar prosedur untuk mencegah terjadinya kesalahan sejak awal.
            </p>
        </div>
    </section>

    <section class="space-y-10">
        <h3 class="text-2xl font-black text-industrial uppercase text-center">Siklus Penjaminan Kualitas</h3>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 rounded-full border-2 border-dashed border-earth_light flex items-center justify-center text-earth_dark font-bold group-hover:bg-earth_light group-hover:text-sand transition-all">01</div>
                <span class="text-[10px] font-bold mt-2 uppercase tracking-tighter">Perencanaan</span>
            </div>
            <div class="h-16 flex items-center text-earth_light opacity-30 hidden md:block">••••</div>
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 rounded-full border-2 border-dashed border-earth_light flex items-center justify-center text-earth_dark font-bold group-hover:bg-earth_light group-hover:text-sand transition-all">02</div>
                <span class="text-[10px] font-bold mt-2 uppercase tracking-tighter">Pengembangan</span>
            </div>
            <div class="h-16 flex items-center text-earth_light opacity-30 hidden md:block">••••</div>
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 rounded-full border-2 border-dashed border-earth_light flex items-center justify-center text-earth_dark font-bold group-hover:bg-earth_light group-hover:text-sand transition-all">03</div>
                <span class="text-[10px] font-bold mt-2 uppercase tracking-tighter">Pengujian</span>
            </div>
            <div class="h-16 flex items-center text-earth_light opacity-30 hidden md:block">••••</div>
            <div class="flex flex-col items-center group">
                <div class="w-16 h-16 rounded-full border-2 border-dashed border-earth_light flex items-center justify-center text-earth_dark font-bold group-hover:bg-earth_light group-hover:text-sand transition-all">04</div>
                <span class="text-[10px] font-bold mt-2 uppercase tracking-tighter">Evaluasi</span>
            </div>
        </div>
    </section>

    <section class="bg-sand p-10 rounded-[2.5rem] border border-industrial/10">
        <div class="flex items-center gap-4 mb-8">
            <i class="fas fa-certificate text-3xl text-earth_dark"></i>
            <h3 class="text-2xl font-black text-industrial uppercase tracking-tight">Standar Kualitas ISO 25010</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="space-y-2">
                <span class="text-xs font-bold text-earth_dark">Functionality</span>
                <p class="text-[11px] text-industrial/60">Sistem berfungsi sesuai kebutuhan warga.</p>
            </div>
            <div class="space-y-2">
                <span class="text-xs font-bold text-earth_dark">Usability</span>
                <p class="text-[11px] text-industrial/60">Mudah dioperasikan oleh berbagai kalangan usia.</p>
            </div>
            <div class="space-y-2">
                <span class="text-xs font-bold text-earth_dark">Performance</span>
                <p class="text-[11px] text-industrial/60">Kecepatan akses data yang optimal dan stabil.</p>
            </div>
            <div class="space-y-2">
                <span class="text-xs font-bold text-earth_dark">Maintainability</span>
                <p class="text-[11px] text-industrial/60">Kemudahan sistem untuk dikembangkan kedepan.</p>
            </div>
        </div>
    </section>

    <section class="text-center space-y-6">
        <div class="inline-flex items-center gap-3 bg-industrial text-sand px-6 py-2 rounded-full text-xs font-bold tracking-widest">
            <i class="fas fa-info-circle text-earth_light"></i> RUANG LINGKUP SISTEM
        </div>
        <div class="max-w-2xl mx-auto text-sm text-industrial/70 leading-relaxed italic">
            "Sistem ini dirancang sebagai <strong>Portal Publik Terbuka</strong>. Untuk menjaga kecepatan akses dan keamanan data simulasi, sistem beroperasi secara penuh tanpa fitur Login Administrator. Seluruh interaksi bersifat searah dari warga ke sistem."
        </div>
    </section>

</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }
</style>
@endsection