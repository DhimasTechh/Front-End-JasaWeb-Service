@extends('layouts.dashboard_layout')

@section('title', 'Laporan & Komplain')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Admin</p>
    </div>

    <a href="{{ route('dashboard.admin') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-red-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        <span>Overview</span>
    </a>

    <a href="{{ route('admin.verification') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-red-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>Verifikasi Seller</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-red-50 text-red-700 rounded-xl font-semibold transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
        <span>Laporan & Komplain</span>
    </a>
@endsection

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Laporan Masuk 🚨</h2>
        <p class="text-slate-500">Daftar aduan pengguna yang perlu ditindaklanjuti.</p>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
            <div class="flex gap-4">
                <button class="text-sm font-bold text-red-600 border-b-2 border-red-600 pb-1">Belum Diselesaikan (2)</button>
                <button class="text-sm font-medium text-slate-500 hover:text-red-600 pb-1">Sedang Investigasi</button>
                <button class="text-sm font-medium text-slate-500 hover:text-red-600 pb-1">Selesai</button>
            </div>
        </div>

        <table class="w-full text-left">
            <thead class="bg-white text-slate-500 font-semibold text-sm border-b border-slate-100">
                <tr>
                    <th class="p-4">Pelapor</th>
                    <th class="p-4">Terlapor (Tersangka)</th>
                    <th class="p-4">Jenis Masalah</th>
                    <th class="p-4">Bukti</th>
                    <th class="p-4 text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                
                <tr class="hover:bg-red-50/10 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">
                                AD
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Ahmad Dhani</p>
                                <span class="px-2 py-0.5 bg-blue-50 text-blue-600 rounded text-[10px] font-bold">Buyer</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <p class="font-bold text-slate-800 text-sm">Toko Abadi</p>
                        <span class="px-2 py-0.5 bg-purple-50 text-purple-600 rounded text-[10px] font-bold">Seller</span>
                    </td>
                    <td class="p-4">
                        <span class="text-red-600 font-bold text-sm block">Barang Tidak Dikirim</span>
                        <p class="text-xs text-slate-500 mt-1">Order #ORD-9921</p>
                    </td>
                    <td class="p-4">
                        <a href="#" class="text-blue-600 text-xs font-bold hover:underline flex items-center gap-1">
                            📷 screenshot_chat.jpg
                        </a>
                    </td>
                    <td class="p-4 text-center">
                        <button class="px-3 py-1.5 bg-slate-800 text-white rounded-lg text-xs font-bold hover:bg-slate-900 transition shadow-sm">
                            🔍 Investigasi
                        </button>
                    </td>
                </tr>

                <tr class="hover:bg-red-50/10 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center font-bold text-xs">
                                JS
                            </div>
                            <div>
                                <p class="font-bold text-slate-800 text-sm">Joko Susilo</p>
                                <span class="px-2 py-0.5 bg-purple-50 text-purple-600 rounded text-[10px] font-bold">Seller</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <p class="font-bold text-slate-800 text-sm">Budi Darsono</p>
                        <span class="px-2 py-0.5 bg-blue-50 text-blue-600 rounded text-[10px] font-bold">Buyer</span>
                    </td>
                    <td class="p-4">
                        <span class="text-orange-600 font-bold text-sm block">Spam Chat / Kasar</span>
                        <p class="text-xs text-slate-500 mt-1">Melanggar Etika</p>
                    </td>
                    <td class="p-4">
                        <a href="#" class="text-blue-600 text-xs font-bold hover:underline flex items-center gap-1">
                            📷 bukti_chat.png
                        </a>
                    </td>
                    <td class="p-4 text-center">
                        <button class="px-3 py-1.5 bg-red-100 text-red-600 rounded-lg text-xs font-bold hover:bg-red-200 transition">
                            ⚠️ Beri Peringatan
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection