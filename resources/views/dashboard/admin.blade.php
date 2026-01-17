@extends('layouts.dashboard_layout')

@section('title', 'Admin Panel')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Admin</p>
    </div>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-red-50 text-red-700 rounded-xl font-semibold mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        <span>Overview</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-red-600 rounded-xl font-medium transition mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>Verifikasi Seller</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-red-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
        <span>Laporan & Komplain</span>
    </a>
@endsection

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Admin Control Room 👮‍♂️</h2>
            <p class="text-slate-500 mt-1">Pantau keamanan dan verifikasi data pengguna.</p>
        </div>
        <div class="flex items-center gap-2">
            <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
            <p class="text-sm font-bold text-green-600">Sistem Aman</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Verifikasi Pending</p>
                    <h3 class="text-3xl font-bold text-slate-800">5</h3>
                    <p class="text-xs text-orange-500 mt-1 font-bold">Butuh Tindakan Segera</p>
                </div>
                <div class="p-3 bg-orange-100 text-orange-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Laporan Masuk</p>
                    <h3 class="text-3xl font-bold text-slate-800">2</h3>
                    <p class="text-xs text-red-500 mt-1 font-bold">+1 Laporan Baru hari ini</p>
                </div>
                <div class="p-3 bg-red-100 text-red-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Total Seller Aktif</p>
                    <h3 class="text-3xl font-bold text-slate-800">128</h3>
                    <p class="text-xs text-green-500 mt-1 font-bold">Terus Bertambah</p>
                </div>
                <div class="p-3 bg-blue-100 text-blue-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mb-8 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <div>
                <h3 class="font-bold text-slate-800">📋 Permintaan Verifikasi Seller</h3>
                <p class="text-sm text-slate-500">Cek data diri sebelum menyetujui akun seller.</p>
            </div>
        </div>
        
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 font-semibold text-sm">
                <tr>
                    <th class="p-4">Nama User</th>
                    <th class="p-4">Dokumen</th>
                    <th class="p-4">Tanggal Daftar</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center font-bold text-gray-500">
                                BD
                            </div>
                            <div>
                                <p class="font-bold text-slate-800">Budi Darsono</p>
                                <p class="text-xs text-slate-500">budi@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <span class="flex items-center gap-1 text-blue-600 font-bold text-sm cursor-pointer hover:underline">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                            KTP_Budi.jpg
                        </span>
                    </td>
                    <td class="p-4 text-sm text-slate-600">17 Jan 2026</td>
                    <td class="p-4 text-center flex justify-center gap-2">
                        <button class="px-3 py-1.5 bg-green-600 text-white rounded-lg text-xs font-bold hover:bg-green-700 transition shadow-sm">
                            ✓ Terima
                        </button>
                        <button class="px-3 py-1.5 bg-red-100 text-red-600 rounded-lg text-xs font-bold hover:bg-red-200 transition">
                            ✕ Tolak
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100">
            <h3 class="font-bold text-slate-800 text-red-600 flex items-center gap-2">
                🚨 Laporan Masalah (High Priority)
            </h3>
        </div>
        <table class="w-full text-left">
            <thead class="bg-red-50 text-red-800 font-semibold text-sm">
                <tr>
                    <th class="p-4">Pelapor</th>
                    <th class="p-4">Terlapor (Tersangka)</th>
                    <th class="p-4">Masalah</th>
                    <th class="p-4 text-center">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-red-50/20 transition">
                    <td class="p-4 text-sm font-bold text-slate-700">Siti (Buyer)</td>
                    <td class="p-4 text-sm text-slate-600">Toko Abadi (Seller)</td>
                    <td class="p-4 text-sm text-red-600 font-medium">Barang tidak dikirim sudah 7 hari</td>
                    <td class="p-4 text-center">
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-bold">Investigasi</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection