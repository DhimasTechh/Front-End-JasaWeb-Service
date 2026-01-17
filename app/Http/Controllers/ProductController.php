<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan ini ada

class ProductController extends Controller
{
    // Halaman Form
    public function create()
    {
        return view('products.create');
    }

    // Proses Simpan
    public function store(Request $request)
    {
        // Validasi simpel dulu biar gak error
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        dd("BERHASIL TERSAMBUNG! Data: ", $request->all());
    }
}