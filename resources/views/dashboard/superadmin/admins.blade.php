@extends('layouts.dashboard_layout')

@section('title', 'Kelola Staff')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">GOD MODE</p>
    </div>

    <a href="{{ route('dashboard.superadmin') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-purple-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
        <span>Statistik Bisnis</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-purple-50 text-purple-700 rounded-xl font-semibold mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span>Kelola Admin & Staff</span>
    </a>

    <a href="{{ route('superadmin.settings') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-purple-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
        <span>Settings Global</span>
    </a>
@endsection
@section('content')
    <div class="flex justify-between items-end mb-8">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Daftar Admin & Staff 👮‍♂️</h2>
            <p class="text-slate-500">Kelola siapa saja yang bisa mengakses panel admin.</p>
        </div>
        <button class="bg-purple-600 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-purple-700 transition shadow-lg shadow-purple-200 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Tambah Admin Baru
        </button>
    </div>

    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-500 font-semibold text-sm">
                <tr>
                    <th class="p-4">Nama & Email</th>
                    <th class="p-4">Role / Jabatan</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                
                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Andi+Saputra&background=random" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="font-bold text-slate-800">Andi Saputra</p>
                                <p class="text-xs text-slate-500">andi@admin.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-600 rounded text-xs font-bold border border-blue-100">Moderator</span>
                    </td>
                    <td class="p-4">
                        <span class="flex items-center gap-1.5 text-xs font-bold text-green-600">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span> Active
                        </span>
                    </td>
                    <td class="p-4 text-center">
                        <button class="text-slate-400 hover:text-purple-600 transition mx-1">✏️ Edit</button>
                        <button class="text-slate-400 hover:text-red-600 transition mx-1">🗑️ Hapus</button>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50 transition">
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Siti+Nur&background=random" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="font-bold text-slate-800">Siti Nurhaliza</p>
                                <p class="text-xs text-slate-500">siti@cs.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-orange-50 text-orange-600 rounded text-xs font-bold border border-orange-100">Customer Service</span>
                    </td>
                    <td class="p-4">
                        <span class="flex items-center gap-1.5 text-xs font-bold text-slate-500">
                            <span class="w-2 h-2 bg-slate-400 rounded-full"></span> Offline
                        </span>
                    </td>
                    <td class="p-4 text-center">
                        <button class="text-slate-400 hover:text-purple-600 transition mx-1">✏️ Edit</button>
                        <button class="text-slate-400 hover:text-red-600 transition mx-1">🗑️ Hapus</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection