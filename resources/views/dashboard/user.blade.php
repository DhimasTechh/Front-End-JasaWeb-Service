@extends('layouts.dashboard_layout')

@section('title', 'Client Area')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Pembeli</p>
    </div>

    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-700 rounded-xl font-semibold mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        <span>Beranda</span>
    </a>

    <a href="{{ route('user.orders') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium transition mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        <span>Pesanan Saya</span>
    </a>

    <a href="{{ route('user.chat') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        <span>Diskusi / Chat</span>
    </a>
@endsection
@section('content')
    <div class="flex justify-between items-end mb-8">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Halo, {{ Auth::user()->name }}! 👋</h2>
            <p class="text-slate-500 mt-1">Pantau progress pesananmu di sini.</p>
        </div>
        <div class="flex gap-3">
            <a href="#" class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg text-sm font-bold hover:bg-slate-50 transition shadow-sm">
                ❤️ Wishlist
            </a>
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                🛒 Keranjang (1)
            </a>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mb-8 overflow-hidden">
        <div class="p-6 border-b border-slate-50 flex justify-between items-center bg-blue-50/30">
            <div>
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    Jasa Pembuatan Landing Page
                    <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-blue-100 text-blue-700 uppercase tracking-wide">Sedang Dikerjakan</span>
                </h3>
                <p class="text-xs text-slate-500 mt-1">Invoice: #INV-2026-001 • Seller: <span class="font-bold text-slate-700">Toko Abadi</span></p>
            </div>
            <button class="text-sm text-blue-600 font-bold hover:underline">Lihat Detail &rarr;</button>
        </div>
        
        <div class="p-8">
            <div class="relative">
                <div class="absolute top-1/2 left-0 w-full h-1 bg-slate-100 -translate-y-1/2 rounded-full z-0"></div>
                <div class="absolute top-1/2 left-0 w-1/2 h-1 bg-blue-600 -translate-y-1/2 rounded-full z-0 transition-all duration-1000"></div> <div class="relative z-10 flex justify-between w-full">
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs ring-4 ring-white shadow-md">✓</div>
                        <p class="text-xs font-bold text-blue-700">Order Dibuat</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs ring-4 ring-white shadow-md">✓</div>
                        <p class="text-xs font-bold text-blue-700">Pembayaran</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs ring-4 ring-blue-100 shadow-md animate-pulse">3</div>
                        <p class="text-xs font-bold text-slate-800">Pengerjaan</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-400 flex items-center justify-center font-bold text-xs ring-4 ring-white">4</div>
                        <p class="text-xs font-medium text-slate-400">Revisi</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-400 flex items-center justify-center font-bold text-xs ring-4 ring-white">5</div>
                        <p class="text-xs font-medium text-slate-400">Selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6 flex justify-between items-center">
        <h3 class="text-lg font-bold text-slate-800">Rekomendasi Untukmu ✨</h3>
        <a href="#" class="text-sm text-blue-600 hover:underline">Lihat Semua</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 overflow-hidden group">
            <div class="h-40 bg-gray-200 relative">
                <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-2 py-1 rounded-md text-xs font-bold text-slate-700 shadow-sm">
                    ⭐ 4.9
                </div>
            </div>
            <div class="p-4">
                <p class="text-xs text-blue-600 font-bold mb-1 uppercase tracking-wide">Desain Grafis</p>
                <h4 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition">Jasa Desain Logo Premium</h4>
                <p class="text-sm text-slate-500 mb-4 line-clamp-2">Buat brand kamu terlihat profesional dengan logo unik.</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-800">Rp 500.000</span>
                    <button class="p-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 overflow-hidden group">
            <div class="h-40 bg-gray-200 relative">
                 <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">IMG</div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-2 py-1 rounded-md text-xs font-bold text-slate-700 shadow-sm">
                    ⭐ 5.0
                </div>
            </div>
            <div class="p-4">
                <p class="text-xs text-green-600 font-bold mb-1 uppercase tracking-wide">Web Dev</p>
                <h4 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition">Fix Bug Laravel Cepat</h4>
                <p class="text-sm text-slate-500 mb-4 line-clamp-2">Bantu perbaiki error controller, route, dan database.</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-800">Rp 150.000</span>
                    <button class="p-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition duration-300 overflow-hidden group">
            <div class="h-40 bg-gray-200 relative">
                 <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">IMG</div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-2 py-1 rounded-md text-xs font-bold text-slate-700 shadow-sm">
                    ⭐ 4.8
                </div>
            </div>
            <div class="p-4">
                <p class="text-xs text-purple-600 font-bold mb-1 uppercase tracking-wide">Writing</p>
                <h4 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600 transition">Jasa Ketik Skripsi Kilat</h4>
                <p class="text-sm text-slate-500 mb-4 line-clamp-2">Rapi, cepat, dan sesuai format kampus.</p>
                <div class="flex justify-between items-center">
                    <span class="font-bold text-slate-800">Rp 25.000<span class="text-xs font-normal text-slate-400">/hal</span></span>
                    <button class="p-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection