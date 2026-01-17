@extends('layouts.dashboard_layout')

@section('title', 'Super Admin Control')
@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">GOD MODE</p>
    </div>

    <a href="{{ route('dashboard.superadmin') }}" class="flex items-center gap-3 px-4 py-3 bg-purple-50 text-purple-700 rounded-xl font-semibold mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
        <span>Statistik Bisnis</span>
    </a>

    <a href="{{ route('superadmin.admins') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-purple-600 rounded-xl font-medium transition mb-1">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span>Kelola Admin & Staff</span>
    </a>

    <a href="{{ route('superadmin.settings') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-purple-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
        <span>Settings Global</span>
    </a>
@endsection
@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Owner Dashboard 👑</h2>
        <p class="text-slate-500 mt-1">Laporan performa bisnis real-time.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-gradient-to-br from-purple-600 to-indigo-700 p-6 rounded-2xl text-white shadow-lg shadow-purple-200">
            <p class="text-purple-100 text-sm font-medium mb-1">Total Profit Platform</p>
            <h3 class="text-3xl font-bold">Rp 120 Juta</h3>
            <p class="text-xs text-purple-200 mt-2 bg-white/20 inline-block px-2 py-1 rounded">+15% bulan ini</p>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <p class="text-slate-500 text-sm font-medium mb-1">Transaksi Berhasil</p>
            <h3 class="text-3xl font-bold text-slate-800">1.250</h3>
            <p class="text-xs text-green-500 mt-1 font-bold">Order Selesai</p>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <p class="text-slate-500 text-sm font-medium mb-1">Total Pengguna</p>
            <h3 class="text-3xl font-bold text-slate-800">5.400</h3>
            <div class="flex gap-2 mt-2">
                <span class="text-[10px] bg-blue-100 text-blue-600 px-2 py-0.5 rounded font-bold">3k User</span>
                <span class="text-[10px] bg-orange-100 text-orange-600 px-2 py-0.5 rounded font-bold">2.4k Seller</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
            <p class="text-slate-500 text-sm font-medium mb-1">Status Server</p>
            <h3 class="text-3xl font-bold text-green-500">99.9%</h3>
            <p class="text-xs text-slate-400 mt-1">Uptime stabil</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                <h3 class="font-bold text-slate-800">👮‍♂️ Kinerja Admin</h3>
                <button class="text-xs bg-purple-600 text-white px-3 py-1.5 rounded-lg hover:bg-purple-700 transition">
                    + Tambah Admin Baru
                </button>
            </div>
            <table class="w-full text-left">
                <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold">
                    <tr>
                        <th class="p-4">Nama Admin</th>
                        <th class="p-4">Role</th>
                        <th class="p-4">Aktivitas Terakhir</th>
                        <th class="p-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <tr>
                        <td class="p-4 font-bold text-slate-700">Andi Saputra</td>
                        <td class="p-4 text-xs text-slate-500">Moderator</td>
                        <td class="p-4 text-sm text-slate-600">Menyetujui Seller "Toko Abadi"</td>
                        <td class="p-4"><span class="w-2 h-2 bg-green-500 rounded-full inline-block mr-1"></span> Online</td>
                    </tr>
                    <tr>
                        <td class="p-4 font-bold text-slate-700">Siti Nurhaliza</td>
                        <td class="p-4 text-xs text-slate-500">Customer Service</td>
                        <td class="p-4 text-sm text-slate-600">Membalas Tiket #9921</td>
                        <td class="p-4"><span class="w-2 h-2 bg-gray-300 rounded-full inline-block mr-1"></span> Offline</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <h3 class="font-bold text-slate-800 mb-4">📜 System Log</h3>
            <div class="space-y-6 border-l-2 border-slate-100 ml-2 pl-4">
                
                <div class="relative">
                    <div class="absolute -left-[21px] top-1 w-3 h-3 bg-red-500 rounded-full border-2 border-white"></div>
                    <p class="text-xs text-slate-400 mb-0.5">10:42 AM</p>
                    <p class="text-sm font-bold text-slate-700">Seller "CyberStore" di-Banned</p>
                    <p class="text-xs text-slate-500">oleh Admin Andi • Alasan: Penipuan</p>
                </div>

                <div class="relative">
                    <div class="absolute -left-[21px] top-1 w-3 h-3 bg-blue-500 rounded-full border-2 border-white"></div>
                    <p class="text-xs text-slate-400 mb-0.5">09:15 AM</p>
                    <p class="text-sm font-bold text-slate-700">Pencairan Dana Rp 5jt</p>
                    <p class="text-xs text-slate-500">Transfer ke Seller "JasaDesain"</p>
                </div>

                <div class="relative">
                    <div class="absolute -left-[21px] top-1 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
                    <p class="text-xs text-slate-400 mb-0.5">Yesterday</p>
                    <p class="text-sm font-bold text-slate-700">New User Milestone</p>
                    <p class="text-xs text-slate-500">Mencapai 5.000 User Terdaftar! 🎉</p>
                </div>

            </div>
        </div>

    </div>
@endsection