@extends('layouts.app')

@section('title', 'Layanan Administrasi')

@section('content')
<div class="space-y-16 animate-fade-in">

    <section class="border-b border-industrial/10 pb-10">
        <h1 class="text-4xl font-black text-industrial uppercase tracking-tight mb-4">Layanan Administrasi Digital</h1>
        <p class="text-earth_dark font-medium flex items-center gap-2">
            <i class="fas fa-info-circle"></i> 
            Silakan pilih jenis layanan dan lengkapi formulir di bawah ini untuk pengajuan surat.
        </p>
    </section>

    @if (session('success') || $errors->any())
    <div class="fixed top-24 right-6 z-[60] max-w-md animate-bounce-in">
        @if (session('success'))
            <div class="bg-earth_dark text-sand p-4 rounded-2xl shadow-2xl flex items-center gap-4 border border-white/20">
                <i class="fas fa-check-circle text-2xl"></i>
                <div>
                    <p class="font-bold text-sm">Berhasil!</p>
                    <p class="text-xs opacity-80">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-600 text-white p-4 rounded-2xl shadow-2xl border border-white/20">
                <div class="flex items-center gap-4 mb-2">
                    <i class="fas fa-exclamation-triangle text-xl"></i>
                    <p class="font-bold text-sm">Terjadi Kesalahan</p>
                </div>
                <ul class="text-[11px] list-disc list-inside opacity-90">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        
        <div class="space-y-6">
            <h3 class="text-xl font-bold text-industrial flex items-center gap-3">
                <i class="fas fa-list-ul text-earth_light text-sm"></i> Jenis Layanan
            </h3>
            
            <div class="space-y-4">
                <div class="p-5 bg-white border border-industrial/5 rounded-2xl shadow-sm hover:border-earth_light transition-colors group">
                    <h4 class="font-bold text-industrial group-hover:text-earth_dark transition-colors">Surat Keterangan Domisili</h4>
                    <p class="text-xs text-industrial/50 mt-1">Untuk keperluan administrasi pindah atau tinggal sementara.</p>
                </div>
                <div class="p-5 bg-white border border-industrial/5 rounded-2xl shadow-sm hover:border-earth_light transition-colors group">
                    <h4 class="font-bold text-industrial group-hover:text-earth_dark transition-colors">Surat Pengantar</h4>
                    <p class="text-xs text-industrial/50 mt-1">Surat pengantar untuk kepengurusan dokumen di tingkat Kecamatan/Dukcapil.</p>
                </div>
                <div class="p-5 bg-white border border-industrial/5 rounded-2xl shadow-sm hover:border-earth_light transition-colors group">
                    <h4 class="font-bold text-industrial group-hover:text-earth_dark transition-colors">Surat Keterangan Usaha</h4>
                    <p class="text-xs text-industrial/50 mt-1">Persyaratan pengajuan kredit atau legalitas UMKM warga.</p>
                </div>
            </div>

            <div class="p-6 bg-sand/30 rounded-2xl border border-earth_dark/10">
                <p class="text-[10px] text-earth_dark font-bold uppercase tracking-widest mb-2 italic">Catatan Sistem:</p>
                <p class="text-xs text-industrial/70 leading-relaxed">Sistem ini bersifat simulasi. Data yang dikirimkan akan diproses secara real-time namun tidak disimpan secara permanen di database publik.</p>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="bg-industrial rounded-[2.5rem] p-8 md:p-12 shadow-2xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-earth_dark/10 rounded-full blur-3xl"></div>
                
                <form method="POST" action="/layanan" class="relative z-10 space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-earth_light uppercase tracking-widest ml-1">Nama Lengkap</label>
                            <input type="text" name="nama" required placeholder="Masukkan nama sesuai KTP"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-sand placeholder:text-sand/20 focus:outline-none focus:ring-2 focus:ring-earth_light/50 transition-all">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-earth_light uppercase tracking-widest ml-1">NIK (16 Digit)</label>
                            <input type="text" name="nik" required placeholder="330xxxxxxxxxxxxx"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-sand placeholder:text-sand/20 focus:outline-none focus:ring-2 focus:ring-earth_light/50 transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-earth_light uppercase tracking-widest ml-1">Jenis Layanan Surat</label>
                        <div class="relative">
                            <select name="jenis_surat" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-sand appearance-none focus:outline-none focus:ring-2 focus:ring-earth_light/50 transition-all cursor-pointer">
                                <option value="" class="bg-industrial">-- Pilih Jenis Surat --</option>
                                <option value="domisili" class="bg-industrial text-sand">Surat Keterangan Domisili</option>
                                <option value="pengantar" class="bg-industrial text-sand">Surat Pengantar</option>
                                <option value="usaha" class="bg-industrial text-sand">Surat Keterangan Usaha</option>
                            </select>
                            <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-earth_light pointer-events-none text-xs"></i>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-earth_light uppercase tracking-widest ml-1">Alamat Lengkap</label>
                        <textarea name="alamat" rows="3" required placeholder="Tuliskan alamat domisili saat ini"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-sand placeholder:text-sand/20 focus:outline-none focus:ring-2 focus:ring-earth_light/50 transition-all"></textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-earth_light uppercase tracking-widest ml-1">Keterangan Tambahan (Opsional)</label>
                        <textarea name="keterangan" rows="2" placeholder="Tuliskan tujuan pembuatan surat..."
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3.5 text-sand placeholder:text-sand/20 focus:outline-none focus:ring-2 focus:ring-earth_light/50 transition-all"></textarea>
                    </div>

                    <button type="submit" 
                        class="w-full bg-earth_light hover:bg-earth_dark text-industrial hover:text-sand font-black uppercase tracking-[0.2em] py-5 rounded-2xl shadow-xl transition-all active:scale-[0.98] flex items-center justify-center gap-3">
                        <i class="fas fa-paper-plane"></i>
                        Kirim Pengajuan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes bounceIn {
        0% { opacity: 0; transform: translateX(100px); }
        60% { opacity: 1; transform: translateX(-10px); }
        100% { transform: translateX(0); }
    }
    .animate-bounce-in {
        animation: bounceIn 0.6s ease-out forwards;
    }
    select option {
        padding: 10px;
    }
</style>
@endsection