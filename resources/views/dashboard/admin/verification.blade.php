@extends('layouts.dashboard_layout')

@section('title', 'Verifikasi Seller')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Admin</p>
    </div>

    <a href="{{ route('dashboard.admin') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-red-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        <span>Overview</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-red-50 text-red-700 rounded-xl font-semibold mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>Verifikasi Seller</span>
    </a>

   <a href="{{ route('admin.reports') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-red-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
        <span>Laporan & Komplain</span>
    </a>
@endsection

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Permintaan Verifikasi 📋</h2>
        <p class="text-slate-500">Cek kelengkapan dokumen calon penjual sebelum menyetujui.</p>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
            <div class="flex gap-4">
                <button class="text-sm font-bold text-red-600 border-b-2 border-red-600 pb-1">Menunggu Review (3)</button>
                <button class="text-sm font-medium text-slate-500 hover:text-red-600 pb-1">Riwayat Disetujui</button>
                <button class="text-sm font-medium text-slate-500 hover:text-red-600 pb-1">Ditolak</button>
            </div>
        </div>

        <table class="w-full text-left">
            <thead class="bg-white text-slate-500 font-semibold text-sm border-b border-slate-100">
                <tr>
                    <th class="p-4">Calon Seller</th>
                    <th class="p-4">Nama Toko</th>
                    <th class="p-4">Dokumen KTP</th>
                    <th class="p-4">Tanggal Daftar</th>
                    <th class="p-4 text-center">Keputusan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center font-bold text-slate-500">
                                BD
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">Budi Darsono</p>
                                <p class="text-xs text-slate-500">budi@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm font-medium text-slate-700">
                        Budi Design Art
                    </td>
                    <td class="p-4">
                        <button class="flex items-center gap-2 px-3 py-1.5 border border-slate-200 rounded-lg text-xs font-bold text-blue-600 hover:bg-blue-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            Lihat KTP
                        </button>
                    </td>
                    <td class="p-4 text-sm text-slate-500">Hari ini, 09:00</td>
                    <td class="p-4 text-center">
                        <div class="flex justify-center gap-2">
                            <button class="bg-green-600 text-white px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-green-700 shadow-sm transition">
                                ✓ Terima
                            </button>
                            <button class="bg-white border border-red-200 text-red-600 px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-red-50 transition">
                                ✕ Tolak
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center font-bold text-purple-600">
                                SN
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">Siti Nurhaliza</p>
                                <p class="text-xs text-slate-500">siti.nur@yahoo.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-sm font-medium text-slate-700">
                        Catering Sehat
                    </td>
                    <td class="p-4">
                        <button class="flex items-center gap-2 px-3 py-1.5 border border-slate-200 rounded-lg text-xs font-bold text-blue-600 hover:bg-blue-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            Lihat KTP
                        </button>
                    </td>
                    <td class="p-4 text-sm text-slate-500">Kemarin</td>
                    <td class="p-4 text-center">
                        <div class="flex justify-center gap-2">
                            <button class="bg-green-600 text-white px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-green-700 shadow-sm transition">
                                ✓ Terima
                            </button>
                            <button class="bg-white border border-red-200 text-red-600 px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-red-50 transition">
                                ✕ Tolak
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection