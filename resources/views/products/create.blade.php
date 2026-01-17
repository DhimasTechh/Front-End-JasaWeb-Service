@extends('layouts.dashboard_layout')

@section('title', 'Upload Produk Baru')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Toko</p>
    </div>
    
    <a href="{{ route('dashboard.seller') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
        <span>Ringkasan Toko</span>
    </a>
    
    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-700 rounded-xl font-semibold mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
        <span>Upload Produk</span>
    </a>
    
    <a href="{{ route('seller.finance') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span>Keuangan & Saldo</span>
    </a>
@endsection
@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Tambah Produk Baru ✨</h2>
        <p class="text-slate-500">Isi detail produkmu dengan lengkap agar pembeli tertarik.</p>
    </div>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @csrf
        
        <div class="lg:col-span-1">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm sticky top-6">
                <label class="block text-sm font-bold text-slate-700 mb-2">Foto Produk</label>
                
                <div class="border-2 border-dashed border-slate-300 rounded-xl h-64 flex flex-col items-center justify-center text-slate-400 bg-slate-50 hover:bg-blue-50 hover:border-blue-400 transition cursor-pointer relative overflow-hidden group">
                    <input type="file" name="image" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full z-10" onchange="previewImage(this)">
                    
                    <div id="placeholder" class="text-center p-4">
                        <svg class="w-12 h-12 mx-auto mb-2 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <p class="text-sm font-medium">Klik untuk upload foto</p>
                        <p class="text-xs text-slate-400 mt-1">Format: JPG, PNG (Max 2MB)</p>
                    </div>

                    <img id="preview" class="hidden absolute inset-0 w-full h-full object-cover rounded-xl" />
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                
                <div class="mb-4">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Produk / Jasa</label>
                    <input type="text" name="name" placeholder="Contoh: Jasa Pembuatan Website Company Profile" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                        <select name="category" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 bg-white" required>
                            <option value="">Pilih Kategori...</option>
                            <option value="website">Web Development</option>
                            <option value="design">Desain Grafis</option>
                            <option value="writing">Penulisan / Tugas</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                        <input type="number" name="price" placeholder="0" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 transition" required>
                    </div>
                </div>
                
                 <div class="mb-4">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Stok Awal</label>
                    <input type="number" name="stock" value="1" class="w-full border border-slate-200 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 transition">
                    <p class="text-xs text-slate-400 mt-1">*Isi 999 jika produk digital (Unlimited)</p>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Lengkap</label>
                    <textarea name="description" rows="5" placeholder="Jelaskan detail apa saja yang didapat pembeli..." class="w-full border border-slate-200 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 transition" required></textarea>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-50">
                    <a href="{{ route('dashboard.seller') }}" class="px-6 py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold hover:bg-slate-50 transition">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2.5 rounded-lg bg-blue-600 text-white font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                        Simpan & Terbitkan 🚀
                    </button>
                </div>

            </div>
        </div>
    </form>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('preview');
            const placeholder = document.getElementById('placeholder');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden'); // Munculkan gambar
                    placeholder.classList.add('hidden'); // Sembunyikan teks placeholder
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection