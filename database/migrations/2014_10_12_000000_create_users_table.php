<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        
        // Siapa penjualnya? (Relasi ke tabel users)
        $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
        
        $table->string('name'); // Nama Produk
        $table->text('description'); // Deskripsi
        $table->decimal('price', 15, 2); // Harga
        $table->integer('stock')->default(1); // Stok
        $table->enum('type', ['barang', 'jasa']); // Jenis
        $table->string('image')->nullable(); // Foto Produk
        
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};