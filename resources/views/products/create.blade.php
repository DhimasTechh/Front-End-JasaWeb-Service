@extends('layouts.dashboard_layout')

@section('title', 'Upload Produk Baru')

@section('sidebar-menu')
    <a href="{{ route('dashboard.seller') }}" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-blue-600 rounded-lg transition mb-4">
        <span>⬅️</span> Kembali ke Dashboard
    </a>
@endsection

@section('content')
<div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold text-slate-800 mb-6">Jual Produk Baru</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk / Jasa</label>
            <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Contoh: Jasa Desain Logo Murah">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis</label>
                <select name="type" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    <option value="barang">Barang Fisik</option>
                    <option value="jasa">Jasa Digital</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga (Rp)</label>
                <input type="number" name="price" required class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="100000">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Lengkap</label>
            <textarea name="description" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Jelaskan spesifikasi produkmu..."></textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Stok Awal</label>
                <input type="number" name="stock" value="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Foto Produk</label>
                <input type="file" name="image" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition shadow-lg mt-4">
            🚀 Tayangkan Produk Sekarang
        </button>
    </form>
</div>
@endsection