@extends('layouts.app')

@section('title', 'Profil Kelurahan')

@section('content')
<div class="space-y-20 animate-fade-in">

    <section class="text-center max-w-3xl mx-auto space-y-4">
        <h2 class="text-xs font-black text-earth_dark uppercase tracking-[0.4em]">Identitas Wilayah</h2>
        <h1 class="text-4xl md:text-5xl font-black text-industrial uppercase tracking-tight">Profil Kelurahan Karangjati</h1>
        <div class="h-1.5 w-32 bg-earth_light mx-auto rounded-full"></div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-6">
            <div class="flex items-center gap-4">
                <span class="p-3 bg-industrial rounded-xl text-sand">
                    <i class="fas fa-landmark text-xl"></i>
                </span>
                <h3 class="text-2xl font-bold text-industrial">Asal Usul & Filosofi</h3>
            </div>
            <div class="space-y-4 text-industrial/70 leading-relaxed text-justify border-l-2 border-earth_light/30 pl-8">
                <p>
                    Nama <span class="font-bold text-earth_dark underline decoration-earth_light/50">Karangjati</span> merepresentasikan harmoni antara kekuatan dan ketahanan. Terbentuk dari gabungan kata "Karang" yang melambangkan pondasi masyarakat yang kokoh, dan "Jati" yang merujuk pada kekayaan hayati yang dahulu mendominasi wilayah ini.
                </p>
                <p>
                    Sejak awal berdirinya, wilayah ini telah diproyeksikan sebagai kawasan yang mampu menyeimbangkan kemajuan ekonomi tanpa meninggalkan akar budaya lokal. Transformasi dari wilayah agraris menuju kawasan semi-industri modern dilakukan dengan tetap menjunjung tinggi prinsip kelestarian lingkungan.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="h-64 bg-earth_dark/20 rounded-t-[5rem] rounded-b-2xl border border-earth_dark/10 flex items-center justify-center">
                <i class="fas fa-leaf text-earth_dark/40 text-5xl"></i>
            </div>
            <div class="h-64 bg-industrial rounded-t-2xl rounded-b-[5rem] flex items-center justify-center mt-8">
                <i class="fas fa-industry text-sand/20 text-5xl"></i>
            </div>
        </div>
    </section>

    <section class="bg-industrial rounded-[3rem] p-10 md:p-16 text-sand shadow-2xl relative overflow-hidden">
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-16">
            <div class="space-y-6">
                <div class="inline-block px-3 py-1 bg-earth_light text-industrial text-[10px] font-black uppercase rounded">Visi</div>
                <p class="text-3xl font-light leading-tight">
                    Menjadi pusat pelayanan publik yang <span class="text-earth_light font-bold">transparan</span>, mandiri, dan berwawasan <span class="text-earth_light font-bold">lingkungan</span> di era digital.
                </p>
            </div>
            <div class="space-y-6">
                <div class="inline-block px-3 py-1 bg-earth_light text-industrial text-[10px] font-black uppercase rounded">Misi</div>
                <ul class="space-y-5">
                    <li class="flex items-start gap-4 group">
                        <i class="fas fa-check-circle text-earth_light mt-1 group-hover:scale-125 transition-transform"></i>
                        <p class="text-sand/70 text-sm italic">Optimalisasi infrastruktur digital untuk mempermudah akses informasi warga secara real-time.</p>
                    </li>
                    <li class="flex items-start gap-4 group">
                        <i class="fas fa-check-circle text-earth_light mt-1 group-hover:scale-125 transition-transform"></i>
                        <p class="text-sand/70 text-sm italic">Mendorong partisipasi aktif masyarakat dalam program keberlanjutan wilayah.</p>
                    </li>
                    <li class="flex items-start gap-4 group">
                        <i class="fas fa-check-circle text-earth_light mt-1 group-hover:scale-125 transition-transform"></i>
                        <p class="text-sand/70 text-sm italic">Mewujudkan tata kelola birokrasi yang bersih, cepat, dan profesional.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="space-y-10">
        <div class="flex flex-col md:flex-row justify-between items-end gap-4 border-b border-industrial/10 pb-6">
            <div>
                <h3 class="text-2xl font-black text-industrial uppercase tracking-tight">Karakteristik Wilayah</h3>
                <p class="text-earth_dark text-sm font-medium">Data teknis dan administratif kelurahan (Simulasi)</p>
            </div>
            <div class="text-[10px] font-bold text-industrial/40 uppercase tracking-widest bg-sand px-3 py-1 rounded border border-industrial/10">
                Terakhir Diperbarui: Jan 2026
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 rounded-[2rem] overflow-hidden border border-industrial/10 shadow-lg">
            <div class="bg-white p-10 text-center border-b md:border-b-0 md:border-r border-industrial/10 hover:bg-sand/20 transition-colors">
                <div class="inline-flex w-12 h-12 bg-industrial text-sand items-center justify-center rounded-full mb-4">
                    <i class="fas fa-vector-square"></i>
                </div>
                <h4 class="text-xs font-bold text-industrial/50 uppercase mb-1">Luas Geografis</h4>
                <p class="text-3xl font-black text-industrial">48.25 <span class="text-sm">Ha</span></p>
            </div>
            <div class="bg-white p-10 text-center border-b md:border-b-0 md:border-r border-industrial/10 hover:bg-sand/20 transition-colors">
                <div class="inline-flex w-12 h-12 bg-earth_dark text-sand items-center justify-center rounded-full mb-4">
                    <i class="fas fa-users"></i>
                </div>
                <h4 class="text-xs font-bold text-industrial/50 uppercase mb-1">Estimasi Populasi</h4>
                <p class="text-3xl font-black text-industrial">14.200 <span class="text-sm text-earth_dark">Jiwa</span></p>
            </div>
            <div class="bg-white p-10 text-center hover:bg-sand/20 transition-colors">
                <div class="inline-flex w-12 h-12 bg-earth_light text-industrial items-center justify-center rounded-full mb-4">
                    <i class="fas fa-map-location-dot"></i>
                </div>
                <h4 class="text-xs font-bold text-industrial/50 uppercase mb-1">Pembagian RT/RW</h4>
                <p class="text-3xl font-black text-industrial">10 <span class="text-sm">RW</span> / 54 <span class="text-sm">RT</span></p>
            </div>
        </div>
    </section>

</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }
</style>
@endsection