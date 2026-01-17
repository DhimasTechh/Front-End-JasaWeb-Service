@extends('layouts.dashboard_layout')

@section('title', 'Seller Center')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Toko</p>
    </div>
    
    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-700 rounded-xl font-semibold mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
        <span>Ringkasan Toko</span>
    </a>
    
    <a href="{{ route('products.create') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium transition mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
        <span>Upload Produk</span>
    </a>
    
    <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span>Keuangan & Saldo</span>
    </a>
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Saldo Ditarik</p>
                    <h3 class="text-2xl font-bold text-slate-800">Rp 5.250.000</h3>
                </div>
                <div class="p-2 bg-green-50 text-green-600 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <a href="#" class="text-sm text-blue-600 font-semibold hover:underline">Tarik Dana &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Perlu Dikirim</p>
                    <h3 class="text-2xl font-bold text-orange-500">3 Pesanan</h3>
                </div>
                <div class="p-2 bg-orange-50 text-orange-500 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </div>
            </div>
            <p class="text-sm text-slate-400">Update 5 menit yang lalu</p>
        </div>

        <div class="bg-gradient-to-br from-blue-600 to-indigo-700 p-6 rounded-2xl shadow-lg text-white flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-lg mb-1">Tambah Produk?</h3>
                <p class="text-blue-100 text-sm opacity-90">Upload barang daganganmu sekarang.</p>
            </div>
            <a href="{{ route('products.create') }}" class="mt-4 w-full bg-white text-blue-600 py-2.5 rounded-lg font-bold text-center hover:bg-blue-50 transition shadow-sm flex justify-center items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Upload Baru
            </a>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mb-8 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <div>
                <h3 class="font-bold text-slate-800 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    Segera Proses
                </h3>
                <p class="text-sm text-slate-500">Pesanan ini menunggu konfirmasimu</p>
            </div>
            <a href="#" class="text-sm text-blue-600 hover:underline font-medium">Lihat Semua Order</a>
        </div>
        
        <table class="w-full text-left">
            <tbody class="divide-y divide-slate-50">
                <tr class="hover:bg-blue-50/30 transition group">
                    <td class="p-5">
                        <p class="font-bold text-slate-700 text-sm">#ORD-9921</p>
                        <p class="text-xs text-slate-400 mt-1">Hari ini, 08:30</p>
                    </td>
                    <td class="p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-xs">
                                AD
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-700">Ahmad Dhani</p>
                                <p class="text-xs text-slate-500">Membeli: Jasa Landing Page</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Sudah Bayar
                        </span>
                    </td>
                    <td class="p-5 text-right">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-bold transition shadow-sm shadow-blue-200">
                            Proses Sekarang
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-bold text-slate-800">Katalog Produk</h3>
        <div class="flex gap-2">
            <input type="text" placeholder="Cari produk..." class="border border-slate-200 rounded-lg px-3 py-1.5 text-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 font-semibold text-sm border-b border-slate-100">
                <tr>
                    <th class="p-4 w-1/3">Info Produk</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4">Harga</th>
                    <th class="p-4">Stok</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-slate-100 rounded-lg border border-slate-200 flex items-center justify-center">
                                <svg class="w-6 h-6 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="font-bold text-slate-700 text-sm">Jasa Landing Page</p>
                                <p class="text-xs text-slate-400 mt-0.5">ID: 29381 • <span class="text-green-600">Aktif</span></p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <span class="px-2.5 py-1 bg-purple-50 text-purple-600 rounded-md text-xs font-bold border border-purple-100">Jasa Digital</span>
                    </td>
                    <td class="p-4 font-bold text-slate-700 text-sm">Rp 1.500.000</td>
                    <td class="p-4 text-sm text-slate-500">∞</td>
                    <td class="p-4 flex justify-center gap-2">
                        <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection