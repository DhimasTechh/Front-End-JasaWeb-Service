<?php

use App\Http\Controllers\ProfileController;
// Baris ProductController di sini kita abaikan saja, kita tulis langsung di bawah biar pasti.
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// --- POS SATPAM: CEK ROLE USER ---
Route::get('/dashboard', function () {
    $role = auth()->user()->role; 

    if ($role === 'superadmin') {
        return redirect('/dashboard/superadmin');
    } elseif ($role === 'admin') {
        return redirect('/dashboard/admin');
    } elseif ($role === 'seller') {
        return redirect('/dashboard/seller');
    } else {
        return redirect('/dashboard/user');
    }
})->middleware(['auth', 'verified'])->name('dashboard');


// --- GRUP KHUSUS MEMBER (WAJIB LOGIN) ---
// 👇 Semua route di dalam kurung kurawal ini AMAN terlindungi password
Route::middleware(['auth'])->group(function () {
    
    // 1. Dashboard Masing-masing Role
    Route::get('/dashboard/user', function () {
        return view('dashboard.user');
    })->name('dashboard.user');

    Route::get('/dashboard/seller', function () {
        return view('dashboard.seller');
    })->name('dashboard.seller');

    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::get('/dashboard/superadmin', function () {
        return view('dashboard.superadmin');
    })->name('dashboard.superadmin');

    // 2. RUTE MENU USER (PINDAHAN DARI BAWAH TADI) ✅
    // Taruh di sini biar aman!
    Route::get('/dashboard/user/orders', function () {
        return view('dashboard.user.orders');
    })->name('user.orders');

    // 👇 TAMBAHKAN INI UNTUK CHAT
    Route::get('/dashboard/user/chat', function () {
        return view('dashboard.user.chat');
    })->name('user.chat');

    // RUTE MENU SELLER
    Route::get('/dashboard/seller/finance', function () {
        return view('dashboard.seller.finance');
    })->name('seller.finance');

    // RUTE MENU ADMIN
    Route::get('/dashboard/admin/verification', function () {
        return view('dashboard.admin.verification');
    })->name('admin.verification');

    // RUTE MENU ADMIN
    Route::get('/dashboard/admin/reports', function () {
        return view('dashboard.admin.reports');
    })->name('admin.reports');

    // 3. RUTE PRODUK (VERSI ALAMAT LENGKAP)
    Route::get('/products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');

}); // 👈 Ini kurung tutup pagar keamanan. Jangan taruh route di bawah garis ini kalau mau aman.

// --- PROFILE ROUTES ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';