<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Portal Kelurahan Karangjati</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        industrial: '#1B211A', // Hitam Industri (Aksen/Teks)
                        earth_dark: '#628141',  // Hijau Bumi Tua
                        earth_light: '#8BAE66', // Hijau Bumi Muda
                        sand: '#EBD5AB',        // Krem Pasir (Latar Belakang)
                    }
                }
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #EBD5AB; /* Background utama terang */
        }

        .nav-link {
            transition: all 0.2s ease-in-out;
            color: #1B211A;
            font-weight: 600;
        }

        .nav-link:hover {
            color: #628141;
        }

        /* Elemen dekoratif industri */
        .industrial-border {
            border-left: 4px solid #1B211A;
        }
    </style>
</head>
<body class="text-industrial flex flex-col min-h-screen">

    <div class="h-2 bg-earth_dark w-full"></div>

    <nav class="bg-white/60 backdrop-blur-md sticky top-0 z-50 border-b border-earth_dark/10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col lg:flex-row justify-between items-center">
            <div class="flex items-center gap-4 mb-4 lg:mb-0">
                <div class="bg-industrial p-3 rounded-lg shadow-xl">
                    <i class="fas fa-city text-earth_light text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-extrabold tracking-tight text-industrial uppercase leading-none">Karangjati</h1>
                    <p class="text-[11px] font-bold text-earth_dark tracking-[0.3em] uppercase">Maju • Mandiri • Modern</p>
                </div>
            </div>

            <div class="flex flex-wrap justify-center items-center gap-1 text-sm">
                <a href="/" class="nav-link px-4 py-2 rounded-lg hover:bg-earth_light/20 flex items-center gap-2">
                    <i class="fas fa-home"></i> Beranda
                </a>
                <a href="/profil" class="nav-link px-4 py-2 rounded-lg hover:bg-earth_light/20 flex items-center gap-2">
                    <i class="fas fa-users"></i> Profil
                </a>
                <a href="/layanan" class="nav-link px-4 py-2 rounded-lg hover:bg-earth_light/20 flex items-center gap-2">
                    <i class="fas fa-gears"></i> Layanan
                </a>
                <a href="/tentang" class="nav-link px-4 py-2 rounded-lg hover:bg-earth_light/20 flex items-center gap-2">
                    <i class="fas fa-shield-heart"></i> Tentang
                </a>
                <div class="h-6 w-[1px] bg-industrial/20 mx-2 hidden lg:block"></div>
                <a href="/kontak" class="ml-2 bg-industrial hover:bg-earth_dark text-sand px-6 py-2.5 rounded-lg font-bold shadow-lg transition-all flex items-center gap-2">
                    <i class="fas fa-phone-volume"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <div class="mb-8 flex items-center gap-2 text-xs font-bold text-earth_dark/60 uppercase tracking-widest">
                <span>Kelurahan</span>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <span class="text-industrial">@yield('title')</span>
            </div>

            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-earth_dark/5 min-h-[500px] relative overflow-hidden">
                <i class="fas fa-leaf absolute -bottom-10 -right-10 text-sand/20 text-[20rem] -rotate-12 pointer-events-none"></i>
                
                <div class="relative z-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-industrial text-sand">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-black mb-4 flex items-center gap-3">
                        <span class="w-8 h-1 bg-earth_light"></span>
                        KARANGJATI
                    </h2>
                    <p class="text-sand/70 text-sm leading-relaxed max-w-md">
                        Menggabungkan kearifan lokal pedesaan dengan efisiensi tata kelola industri modern. 
                        Kami berkomitmen memberikan pelayanan yang transparan, cepat, dan terpercaya bagi seluruh warga.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-earth_light mb-4 uppercase tracking-widest text-xs">Akses Cepat</h4>
                    <ul class="text-sm space-y-2 text-sand/60">
                        <li><a href="/tentang" class="hover:text-earth_light transition-colors">Tentang</a></li>
                        <li><a href="/layanan" class="hover:text-earth_light transition-colors">Pengajuan Surat</a></li>
                        <li><a href="/profil" class="hover:text-earth_light transition-colors">Profile</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-earth_light mb-4 uppercase tracking-widest text-xs">Kontak Resmi</h4>
                    <p class="text-sm text-sand/60">Jl. Raya Karangjati No. 123</p>
                    <p class="text-sm text-sand/60">admin@karangjati.go.id</p>
                </div>
            </div>
        </div>
        <div class="bg-black/20 py-4 text-center">
            <p class="text-[10px] font-medium tracking-[0.2em] text-sand/40 uppercase">
                &copy; 2026 Pemerintah Kelurahan Karangjati - Sistem Informasi Terpadu
            </p>
        </div>
    </footer>

</body>
</html>