@extends('layouts.dashboard_layout')

@section('title', 'Pesanan Saya')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Pembeli</p>
    </div>
    
    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        <span>Beranda</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-700 rounded-xl font-semibold mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        <span>Pesanan Saya</span>
    </a>

    <a href="{{ route('user.chat') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        <span>Diskusi / Chat</span>
    </a>
@endsection
@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Riwayat Pesanan 📦</h2>
        <p class="text-slate-500">Daftar semua jasa dan produk yang pernah kamu beli.</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="flex border-b border-slate-100">
            <button class="px-6 py-3 text-sm font-bold text-blue-600 border-b-2 border-blue-600">Semua</button>
            <button class="px-6 py-3 text-sm font-medium text-slate-500 hover:text-blue-600">Menunggu Bayar</button>
            <button class="px-6 py-3 text-sm font-medium text-slate-500 hover:text-blue-600">Sedang Diproses</button>
            <button class="px-6 py-3 text-sm font-medium text-slate-500 hover:text-blue-600">Selesai</button>
        </div>

        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 font-semibold text-sm">
                <tr>
                    <th class="p-4">Produk / Jasa</th>
                    <th class="p-4">Tanggal</th>
                    <th class="p-4">Total Harga</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600">
                                🌐
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Jasa Pembuatan Landing Page</p>
                                <p class="text-xs text-slate-500">Seller: Toko Abadi</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-slate-600">17 Jan 2026</td>
                    <td class="p-4 font-bold text-slate-700 text-sm">Rp 1.500.000</td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-600 rounded text-xs font-bold border border-blue-100">Sedang Dikerjakan</span>
                    </td>
                    <td class="p-4 text-center">
                        <button class="text-sm font-bold text-blue-600 hover:underline">Lihat Detail</button>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600">
                                📄
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Template CV Lamaran Kerja</p>
                                <p class="text-xs text-slate-500">Seller: DesainKuy</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-slate-600">16 Jan 2026</td>
                    <td class="p-4 font-bold text-slate-700 text-sm">Rp 25.000</td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-orange-50 text-orange-600 rounded text-xs font-bold border border-orange-100">Belum Bayar</span>
                    </td>
                    <td class="p-4 text-center">
                        <button class="px-3 py-1 bg-blue-600 text-white rounded text-xs font-bold hover:bg-blue-700 shadow-sm">Bayar Sekarang</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection