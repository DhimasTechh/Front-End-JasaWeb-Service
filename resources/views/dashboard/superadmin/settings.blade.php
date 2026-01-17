@extends('layouts.dashboard_layout')

@section('title', 'Global Settings')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">GOD MODE</p>
    </div>

    <a href="{{ route('dashboard.superadmin') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-purple-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
        <span>Statistik Bisnis</span>
    </a>

    <a href="{{ route('superadmin.admins') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-purple-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span>Kelola Admin & Staff</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-purple-50 text-purple-700 rounded-xl font-semibold transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
        <span>Settings Global</span>
    </a>
@endsection

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Pengaturan Aplikasi ⚙️</h2>
        <p class="text-slate-500">Kontrol konfigurasi utama sistem secara real-time.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <h3 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center">🏢</span>
                Identitas Aplikasi
            </h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Aplikasi</label>
                    <input type="text" value="JasaKuy" class="w-full border border-slate-200 rounded-lg px-4 py-2 text-slate-600 focus:outline-none focus:border-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email Support</label>
                    <input type="email" value="help@jasakuy.com" class="w-full border border-slate-200 rounded-lg px-4 py-2 text-slate-600 focus:outline-none focus:border-purple-500">
                </div>
                 <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nomor WhatsApp Admin</label>
                    <input type="text" value="+62 812 3456 7890" class="w-full border border-slate-200 rounded-lg px-4 py-2 text-slate-600 focus:outline-none focus:border-purple-500">
                </div>
            </div>
            <button class="mt-6 w-full bg-slate-800 text-white py-2 rounded-lg font-bold hover:bg-slate-900 transition">
                Simpan Perubahan
            </button>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <h3 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
                <span class="w-8 h-8 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">💰</span>
                Keuangan & Potongan
            </h3>
            
            <div class="bg-green-50 p-4 rounded-xl mb-4 border border-green-100">
                <p class="text-sm text-green-800 font-medium">Fee Platform saat ini: <span class="font-bold text-lg">5%</span> per transaksi.</p>
            </div>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Persentase Potongan Admin (%)</label>
                    <div class="flex items-center gap-2">
                        <input type="number" value="5" class="w-24 border border-slate-200 rounded-lg px-4 py-2 text-slate-600 focus:outline-none focus:border-purple-500 font-bold text-center">
                        <span class="text-slate-500">%</span>
                    </div>
                    <p class="text-xs text-slate-400 mt-1">Potongan ini akan otomatis diambil dari saldo Seller setiap transaksi selesai.</p>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Minimal Penarikan (Withdraw)</label>
                    <div class="flex items-center gap-2">
                        <span class="text-slate-500 font-bold">Rp</span>
                        <input type="number" value="50000" class="w-full border border-slate-200 rounded-lg px-4 py-2 text-slate-600 focus:outline-none focus:border-purple-500 font-bold">
                    </div>
                </div>
            </div>
            <button class="mt-6 w-full bg-purple-600 text-white py-2 rounded-lg font-bold hover:bg-purple-700 transition shadow-lg shadow-purple-200">
                Update Kebijakan Keuangan
            </button>
        </div>

        <div class="lg:col-span-2 bg-red-50 rounded-2xl border border-red-100 p-6">
            <h3 class="font-bold text-red-800 mb-4 flex items-center gap-2">
                ⚠️ Zona Bahaya (System Control)
            </h3>
            <div class="flex justify-between items-center">
                <div>
                    <h4 class="font-bold text-slate-800">Maintenance Mode</h4>
                    <p class="text-sm text-slate-500">Aktifkan ini jika website sedang diperbaiki. User tidak akan bisa login.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-600"></div>
                </label>
            </div>
        </div>

    </div>
@endsection