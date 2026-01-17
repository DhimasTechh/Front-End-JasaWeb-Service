<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyAgency - Digital Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .animate-bounce-slow { animation: bounce 3s infinite; }
        @keyframes bounce {
            0%, 100% { transform: translateY(-5%); animation-timing-function: cubic-bezier(0.8, 0, 1, 1); }
            50% { transform: translateY(0); animation-timing-function: cubic-bezier(0, 0, 0.2, 1); }
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50 text-slate-800">

    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">
                MyAgency<span class="text-gray-800">.</span>
            </div>
            <ul class="hidden md:flex gap-8 font-medium text-gray-600">
                <li class="hover:text-blue-600 cursor-pointer transition"><a href="#home">Dashboard</a></li>
                <li class="hover:text-blue-600 cursor-pointer transition"><a href="#layanan">Layanan</a></li>
                <li class="hover:text-blue-600 cursor-pointer transition"><a href="#portfolio">Portfolio</a></li>
            </ul>
            <button class="md:hidden text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>

    <section id="home" class="relative bg-gradient-to-br from-blue-700 via-blue-600 to-indigo-800 text-white py-32 text-center overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-10 blur-3xl rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-400 opacity-20 blur-3xl rounded-full translate-x-1/3 translate-y-1/3"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-500/30 border border-blue-400/30 text-sm font-medium mb-6 backdrop-blur-sm">
                🚀 Partner Digital Terbaik untuk Bisnismu
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
                Bangun Bisnis Digital <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-cyan-200">Impianmu Bersama Kami</span>
            </h1>
            <p class="text-lg md:text-xl mb-10 text-blue-100 max-w-2xl mx-auto leading-relaxed">
                Kami mengubah ide menjadi website berkelas, aplikasi canggih, dan strategi marketing yang menghasilkan profit nyata.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                <a href="https://wa.me/6281234567890" class="bg-white text-blue-700 font-bold py-4 px-8 rounded-full hover:bg-gray-100 hover:scale-105 transition shadow-lg w-full md:w-auto">
                    Mulai Konsultasi Gratis
                </a>
                <a href="#portfolio" class="border-2 border-white/30 text-white font-semibold py-4 px-8 rounded-full hover:bg-white/10 transition w-full md:w-auto backdrop-blur-sm">
                    Lihat Portfolio
                </a>
            </div>
        </div>
    </section>

    <section class="bg-slate-900 py-16 text-white">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-blue-400 mb-2">10+</div>
                <div class="text-slate-400 text-sm">Project Selesai</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-400 mb-2">100%</div>
                <div class="text-slate-400 text-sm">Klien Puas</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-400 mb-2">24/7</div>
                <div class="text-slate-400 text-sm">Support Online</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-400 mb-2">5+</div>
                <div class="text-slate-400 text-sm">Tahun Pengalaman</div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami bukan sekadar vendor, tapi partner pertumbuhan bisnis Anda.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 text-center mb-3">Pengerjaan Cepat</h3>
                    <p class="text-gray-500 text-center leading-relaxed">Website on-live dalam waktu kurang dari 7 hari kerja.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 text-center mb-3">Harga Transparan</h3>
                    <p class="text-gray-500 text-center leading-relaxed">Tidak ada biaya tersembunyi. Apa yang disepakati, itu yang dibayar.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 text-center mb-3">Support 24/7</h3>
                    <p class="text-gray-500 text-center leading-relaxed">Tim teknis kami siap membantu kapanpun Anda butuh.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="max-w-6xl mx-auto p-10">
        <h1 class="text-3xl font-bold text-center mb-10 text-slate-800">Layanan Agensi Kami</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <h3 class="text-xl font-bold text-blue-600 mb-2">Pembuatan Website</h3>
                <p class="text-gray-600 mb-4">Landing page modern dengan performa cepat.</p>
                <div class="text-sm font-semibold text-green-600 bg-green-50 inline-block px-3 py-1 rounded-full">Mulai Rp 1.000.000</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <h3 class="text-xl font-bold text-blue-600 mb-2">Optimasi SEO</h3>
                <p class="text-gray-600 mb-4">Agar website tampil di halaman 1 Google.</p>
                <div class="text-sm font-semibold text-green-600 bg-green-50 inline-block px-3 py-1 rounded-full">Mulai Rp 500.000</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-xl transition">
                <h3 class="text-xl font-bold text-blue-600 mb-2">Social Media Mgt</h3>
                <p class="text-gray-600 mb-4">Konten kreatif untuk Instagram & TikTok.</p>
                <div class="text-sm font-semibold text-green-600 bg-green-50 inline-block px-3 py-1 rounded-full">Mulai Rp 750.000</div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10 text-slate-800">Portfolio Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group cursor-pointer">
                    <div class="bg-blue-200 h-48 rounded-xl mb-4 flex items-center justify-center group-hover:opacity-80 transition overflow-hidden">
                        <span class="text-gray-500 font-semibold opacity-50">Image Preview</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800">Toko Online Baju</h3>
                    <p class="text-sm text-gray-500">Web Dev</p>
                </div>
                <div class="group cursor-pointer">
                    <div class="bg-green-200 h-48 rounded-xl mb-4 flex items-center justify-center group-hover:opacity-80 transition overflow-hidden">
                        <span class="text-gray-500 font-semibold opacity-50">Image Preview</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800">Aplikasi Kasir</h3>
                    <p class="text-sm text-gray-500">App Dev</p>
                </div>
                <div class="group cursor-pointer">
                    <div class="bg-purple-200 h-48 rounded-xl mb-4 flex items-center justify-center group-hover:opacity-80 transition overflow-hidden">
                        <span class="text-gray-500 font-semibold opacity-50">Image Preview</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800">Company Profile BUMN</h3>
                    <p class="text-sm text-gray-500">Web Dev</p>
                </div>
                <div class="group cursor-pointer">
                    <div class="bg-orange-200 h-48 rounded-xl mb-4 flex items-center justify-center group-hover:opacity-80 transition overflow-hidden">
                        <span class="text-gray-500 font-semibold opacity-50">Image Preview</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-800">Branding Kopi Kenangan</h3>
                    <p class="text-sm text-gray-500">Design</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-slate-800">Kata Mereka Tentang Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 italic relative">
                    <div class="text-6xl text-blue-100 absolute top-4 left-4 font-serif">"</div>
                    <p class="text-gray-600 mb-6 relative z-10 pt-4">Awalnya ragu bikin web, tapi setelah dibantu tim MyAgency, omzet naik 2x lipat karena orderan via online makin gampang!</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">B</div>
                        <div>
                            <h4 class="font-bold text-slate-900">Budi Santoso</h4>
                            <p class="text-sm text-gray-500">Owner Kopi Senja</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 italic relative">
                    <div class="text-6xl text-blue-100 absolute top-4 left-4 font-serif">"</div>
                    <p class="text-gray-600 mb-6 relative z-10 pt-4">Desainnya elegan banget, sesuai sama branding butik saya. Pelayanannya juga ramah & fast response.</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">S</div>
                        <div>
                            <h4 class="font-bold text-slate-900">Siti Aminah</h4>
                            <p class="text-sm text-gray-500">Founder Hijab Style</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 italic relative">
                    <div class="text-6xl text-blue-100 absolute top-4 left-4 font-serif">"</div>
                    <p class="text-gray-600 mb-6 relative z-10 pt-4">Sangat profesional. Website company profile kami jadi terlihat bonafide di mata investor luar negeri.</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">R</div>
                        <div>
                            <h4 class="font-bold text-slate-900">Rahmat Wijaya</h4>
                            <p class="text-sm text-gray-500">Direktur PT Maju Jaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4 text-slate-800">Meet The Team</h2>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">Orang-orang kreatif di balik suksesnya transformasi digital bisnis Anda.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="group">
                    <div class="w-32 h-32 mx-auto bg-blue-500 rounded-full mb-4 flex items-center justify-center text-white text-3xl font-bold shadow-lg group-hover:scale-110 transition duration-300">N</div>
                    <h3 class="text-xl font-bold text-slate-800">Nama Kamu</h3>
                    <p class="text-blue-600 font-medium text-sm">Founder & CEO</p>
                </div>
                <div class="group">
                    <div class="w-32 h-32 mx-auto bg-indigo-500 rounded-full mb-4 flex items-center justify-center text-white text-3xl font-bold shadow-lg group-hover:scale-110 transition duration-300">A</div>
                    <h3 class="text-xl font-bold text-slate-800">Anggota 1</h3>
                    <p class="text-blue-600 font-medium text-sm">Lead Developer</p>
                </div>
                <div class="group">
                    <div class="w-32 h-32 mx-auto bg-purple-500 rounded-full mb-4 flex items-center justify-center text-white text-3xl font-bold shadow-lg group-hover:scale-110 transition duration-300">A</div>
                    <h3 class="text-xl font-bold text-slate-800">Anggota 2</h3>
                    <p class="text-blue-600 font-medium text-sm">UI/UX Designer</p>
                </div>
                <div class="group">
                    <div class="w-32 h-32 mx-auto bg-pink-500 rounded-full mb-4 flex items-center justify-center text-white text-3xl font-bold shadow-lg group-hover:scale-110 transition duration-300">A</div>
                    <h3 class="text-xl font-bold text-slate-800">Anggota 3</h3>
                    <p class="text-blue-600 font-medium text-sm">Marketing Specialist</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-600 text-center text-white">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Siap Mengembangkan Bisnis Anda?</h2>
            <button onclick="window.location.href='https://wa.me/6281234567890'" class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition">
                Hubungi Kami via WhatsApp
            </button>
        </div>
    </section>

    <footer class="bg-slate-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <h2 class="text-2xl font-bold mb-2">MyAgency.</h2>
                <p class="text-slate-400 text-sm">© 2024 MyAgency. All rights reserved.</p>
            </div>
            <div class="flex gap-6">
                <a href="#" class="text-slate-400 hover:text-white transition">Instagram</a>
                <a href="#" class="text-slate-400 hover:text-white transition">LinkedIn</a>
                <a href="#" class="text-slate-400 hover:text-white transition">WhatsApp</a>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-green-500 text-white px-5 py-3 rounded-full shadow-2xl hover:bg-green-600 hover:scale-105 transition-all duration-300 animate-bounce-slow">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z"></path>
        </svg>
        <span class="font-bold">Chat Kami</span>
    </a>

</body>
</html>