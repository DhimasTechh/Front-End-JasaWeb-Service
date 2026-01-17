@extends('layouts.dashboard_layout')

@section('title', 'Keuangan & Saldo')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Toko</p>
    </div>
    
    <a href="{{ route('dashboard.seller') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
        <span>Ringkasan Toko</span>
    </a>
    
    <a href="{{ route('products.create') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
        <span>Upload Produk</span>
    </a>
    
    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-emerald-50 text-emerald-700 rounded-xl font-semibold transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span>Keuangan & Saldo</span>
    </a>
@endsection

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Dompet Saya 💸</h2>
        <p class="text-slate-500">Kelola pendapatan dan penarikan dana ke rekening bank.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
        <div class="lg:col-span-2 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl p-8 text-white shadow-lg shadow-emerald-200 relative overflow-hidden">
            <div class="absolute right-0 top-0 opacity-10 transform translate-x-10 -translate-y-10">
                <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.15-1.46-3.27-3.4h1.96c.1 1.05 1.18 1.91 2.53 1.91 1.29 0 2.13-.72 2.13-1.71 0-2.69-4.5-2.97-4.5-5.65 0-1.74 1.41-2.85 3.15-3.29V4h2.67v1.9c1.71.35 3.06 1.34 3.07 3.22h-1.96C15.48 7.65 14.58 7 13.41 7c-1.38 0-2.13.95-2.13 1.76 0 2.59 4.5 2.7 4.5 5.73 0 1.69-1.35 2.82-3.37 3.28z"/></svg>
            </div>

            <p class="text-emerald-100 font-medium mb-1 relative z-10">Saldo Aktif (Siap Ditarik)</p>
            <h3 class="text-4xl font-bold mb-6 relative z-10">Rp 5.250.000</h3>
            
            <div class="flex gap-4 relative z-10">
                <button class="bg-white text-emerald-600 px-6 py-2.5 rounded-lg font-bold shadow-md hover:bg-emerald-50 transition flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    Tarik Dana
                </button>
                <button class="bg-emerald-700 bg-opacity-40 text-white border border-emerald-400 px-6 py-2.5 rounded-lg font-bold hover:bg-opacity-60 transition">
                    Lihat Analitik
                </button>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex flex-col justify-between">
            <div>
                <h4 class="font-bold text-slate-800 mb-4">Rekening Terdaftar</h4>
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-xs italic">
                        BCA
                    </div>
                    <div>
                        <p class="font-bold text-slate-700">Bank Central Asia</p>
                        <p class="text-sm text-slate-500">**** **** 8821</p>
                        <p class="text-xs text-slate-400 mt-0.5">a.n. Toko Abadi Official</p>
                    </div>
                </div>
            </div>
            <button class="w-full border border-slate-200 text-slate-600 py-2 rounded-lg text-sm font-bold hover:bg-slate-50 transition">
                Ganti Rekening
            </button>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-800">Riwayat Mutasi</h3>
            <select class="border border-slate-200 rounded-lg px-3 py-1 text-sm text-slate-600 focus:outline-none">
                <option>Semua Transaksi</option>
                <option>Pemasukan</option>
                <option>Penarikan</option>
            </select>
        </div>

        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 font-semibold text-sm">
                <tr>
                    <th class="p-4">Tanggal</th>
                    <th class="p-4">Keterangan</th>
                    <th class="p-4">Nominal</th>
                    <th class="p-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4 text-sm text-slate-600">17 Jan 2026</td>
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                ⬇️
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Penjualan #ORD-9921</p>
                                <p class="text-xs text-slate-500">Jasa Landing Page</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 font-bold text-green-600">+ Rp 1.500.000</td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-green-50 text-green-600 rounded text-xs font-bold">Sukses</span>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4 text-sm text-slate-600">15 Jan 2026</td>
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                                ⬆️
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Penarikan Dana</p>
                                <p class="text-xs text-slate-500">Ke BCA **** 8821</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 font-bold text-slate-800">- Rp 500.000</td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-green-50 text-green-600 rounded text-xs font-bold">Berhasil</span>
                    </td>
                </tr>
                
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4 text-sm text-slate-600">14 Jan 2026</td>
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                ⬇️
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Penjualan #ORD-9918</p>
                                <p class="text-xs text-slate-500">Template CV</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 font-bold text-green-600">+ Rp 25.000</td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-green-50 text-green-600 rounded text-xs font-bold">Sukses</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection