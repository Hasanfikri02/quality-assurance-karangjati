@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="space-y-16 animate-fade-in">

    <section class="max-w-3xl">
        <h2 class="text-xs font-black text-earth_dark uppercase tracking-[0.4em] mb-4">Hubungi Kami</h2>
        <h1 class="text-4xl md:text-5xl font-black text-industrial uppercase tracking-tight">Akses & Lokasi Pelayanan</h1>
        <p class="text-industrial/60 mt-4 leading-relaxed">
            Temukan lokasi kantor kelurahan atau hubungi nomor layanan kami untuk konsultasi administrasi lebih lanjut.
        </p>
    </section>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="space-y-6">
            <div class="bg-white p-8 rounded-[2.5rem] border border-industrial/5 shadow-sm hover:shadow-md transition-all">
                <div class="w-12 h-12 bg-earth_light/10 text-earth_dark rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-map-location-dot text-xl"></i>
                </div>
                <h3 class="text-xs font-black text-industrial/40 uppercase tracking-widest mb-3">Alamat Kantor</h3>
                <p class="text-industrial font-bold leading-relaxed">
                    RC8H+W59, Ngimunanjaran,<br>
                    Karangjati, Bergas,<br>
                    Kabupaten Semarang,<br>
                    Jawa Tengah 50552
                </p>
            </div>

            <div class="bg-industrial p-8 rounded-[2.5rem] shadow-xl text-sand group transition-all hover:bg-earth_dark">
                <div class="w-12 h-12 bg-sand/10 text-sand rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-phone-volume text-xl"></i>
                </div>
                <h3 class="text-xs font-black text-sand/40 uppercase tracking-widest mb-3">Layanan Telepon</h3>
                <p class="text-2xl font-black tracking-tighter">0298-522182</p>
                <p class="text-[10px] mt-4 opacity-50 italic group-hover:opacity-100 transition-opacity">
                    *Tersedia pada jam kerja operasional (08:00 - 15:00)
                </p>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="relative bg-sand/30 p-3 rounded-[3rem] border border-industrial/5 h-full min-h-[450px]">
                <div class="overflow-hidden rounded-[2.5rem] h-full shadow-inner relative">
                    <div class="absolute inset-0 bg-industrial/5 flex items-center justify-center -z-10">
                        <i class="fas fa-spinner fa-spin text-industrial/20 text-3xl"></i>
                    </div>
                    
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.524419519213!2d110.4282361!3d-7.143501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70868f08f87b8d%3A0xc62135607b719485!2sKarangjati%2C%20Bergas%2C%20Semarang%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0; min-height: 450px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="grayscale hover:grayscale-0 transition-all duration-700">
                    </iframe>
                </div>
                
                <div class="absolute bottom-8 right-8 bg-white px-4 py-2 rounded-full shadow-xl flex items-center gap-3 border border-industrial/5">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-[10px] font-bold text-industrial uppercase tracking-widest">Titik Koordinat Terdeteksi</span>
                </div>
            </div>
        </div>
    </div>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8 border-t border-industrial/5">
        <div class="flex items-center gap-4">
            <i class="fas fa-clock text-earth_light"></i>
            <div>
                <h4 class="text-[10px] font-black uppercase text-industrial/40">Jam Operasional</h4>
                <p class="text-sm font-bold text-industrial">Senin - Jumat | 08:00 - 15:00</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <i class="fas fa-envelope text-earth_light"></i>
            <div>
                <h4 class="text-[10px] font-black uppercase text-industrial/40">Email Resmi</h4>
                <p class="text-sm font-bold text-industrial">kontak@karangjati.desa.id</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <i class="fas fa-globe text-earth_light"></i>
            <div>
                <h4 class="text-[10px] font-black uppercase text-industrial/40">Media Sosial</h4>
                <p class="text-sm font-bold text-industrial">@kelurahankarangjati</p>
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