@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="space-y-16 animate-fade-in">
    
    <section class="flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-2/3 space-y-6">
            <div class="inline-block px-4 py-1.5 bg-earth_light/20 border border-earth_light/30 rounded-full">
                <span class="text-earth_dark text-xs font-bold tracking-widest uppercase">Selamat Datang</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-industrial leading-tight">
                Digitalisasi Pelayanan <br>
                <span class="text-earth_dark text-3xl md:text-5xl">Kelurahan Karangjati</span>
            </h1>
            <p class="text-industrial/70 text-lg leading-relaxed max-w-xl">
                Akses berbagai layanan kependudukan, informasi publik, dan administrasi kelurahan secara cepat, transparan, dan modern dalam satu pintu.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/layanan" class="bg-earth_dark hover:bg-industrial text-sand px-8 py-4 rounded-xl font-bold transition-all shadow-lg flex items-center gap-3 group">
                    Mulai Layanan Sekarang
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
                <a href="/profil" class="border-2 border-industrial/10 hover:border-industrial text-industrial px-8 py-4 rounded-xl font-bold transition-all">
                    Pelajari Profil
                </a>
            </div>
        </div>
        <div class="md:w-1/3 hidden md:block">
            <div class="relative">
                <div class="absolute -inset-4 bg-earth_light/20 rounded-full blur-3xl"></div>
                <i class="fas fa-seedling text-[12rem] text-earth_dark opacity-20 relative"></i>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-sand/30 border border-industrial/5 p-6 rounded-2xl text-center">
            <div class="text-2xl font-black text-industrial">24/7</div>
            <div class="text-[10px] uppercase font-bold text-earth_dark tracking-widest">Akses Digital</div>
        </div>
        <div class="bg-sand/30 border border-industrial/5 p-6 rounded-2xl text-center">
            <div class="text-2xl font-black text-industrial">15+</div>
            <div class="text-[10px] uppercase font-bold text-earth_dark tracking-widest">Jenis Layanan</div>
        </div>
        <div class="bg-sand/30 border border-industrial/5 p-6 rounded-2xl text-center">
            <div class="text-2xl font-black text-industrial">Real-time</div>
            <div class="text-[10px] uppercase font-bold text-earth_dark tracking-widest">Update Data</div>
        </div>
        <div class="bg-sand/30 border border-industrial/5 p-6 rounded-2xl text-center">
            <div class="text-2xl font-black text-industrial">Aman</div>
            <div class="text-[10px] uppercase font-bold text-earth_dark tracking-widest">Data Terproteksi</div>
        </div>
    </div>

    <hr class="border-industrial/5">

    <section class="space-y-8">
        <div class="flex justify-between items-end">
            <div>
                <h2 class="text-2xl font-black text-industrial uppercase tracking-tight">Layanan Unggulan</h2>
                <p class="text-earth_dark text-sm font-medium">Pilih kategori layanan yang Anda butuhkan</p>
            </div>
            <a href="/layanan" class="text-industrial font-bold text-sm hover:text-earth_dark transition-colors flex items-center gap-2">
                Lihat Semua <i class="fas fa-plus-circle text-xs"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white p-8 rounded-3xl border border-industrial/5 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-earth_light/10 text-earth_dark rounded-2xl flex items-center justify-center mb-6 group-hover:bg-industrial group-hover:text-sand transition-colors">
                    <i class="fas fa-file-invoice text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-industrial mb-3">Persuratan Mandiri</h3>
                <p class="text-industrial/60 text-sm leading-relaxed mb-6">Ajukan pembuatan surat pengantar, keterangan tidak mampu, dan surat domisili secara online.</p>
                <div class="h-1 w-12 bg-earth_light rounded-full group-hover:w-full transition-all duration-500"></div>
            </div>

            <div class="group bg-white p-8 rounded-3xl border border-industrial/5 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-earth_light/10 text-earth_dark rounded-2xl flex items-center justify-center mb-6 group-hover:bg-industrial group-hover:text-sand transition-colors">
                    <i class="fas fa-users-viewfinder text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-industrial mb-3">Kependudukan</h3>
                <p class="text-industrial/60 text-sm leading-relaxed mb-6">Informasi mengenai Kartu Keluarga, KTP, dan perubahan data penduduk lainnya dengan mudah.</p>
                <div class="h-1 w-12 bg-earth_light rounded-full group-hover:w-full transition-all duration-500"></div>
            </div>

            <div class="group bg-white p-8 rounded-3xl border border-industrial/5 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-earth_light/10 text-earth_dark rounded-2xl flex items-center justify-center mb-6 group-hover:bg-industrial group-hover:text-sand transition-colors">
                    <i class="fas fa-bullhorn text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-industrial mb-3">Pusat Informasi</h3>
                <p class="text-industrial/60 text-sm leading-relaxed mb-6">Dapatkan berita terbaru mengenai agenda kelurahan, bantuan sosial, dan pengumuman warga.</p>
                <div class="h-1 w-12 bg-earth_light rounded-full group-hover:w-full transition-all duration-500"></div>
            </div>
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