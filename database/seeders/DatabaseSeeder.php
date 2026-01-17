<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Superadmin
        User::create([
            'name' => 'Big Boss',
            'email' => 'super@jasaweb.test',
            'role' => 'superadmin',
            'password' => Hash::make('password'), // Passwordnya 'password'
            'saldo' => 999999999,
        ]);

        // 2. Akun Admin
        User::create([
            'name' => 'Admin Santoso',
            'email' => 'admin@jasaweb.test',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'saldo' => 0,
        ]);

        // 3. Akun Seller
        User::create([
            'name' => 'Juragan Laptop',
            'email' => 'seller@jasaweb.test',
            'role' => 'seller',
            'status' => 'active',
            'password' => Hash::make('password'),
            'saldo' => 5000000, // Punya saldo 5jt
        ]);

        // 4. Akun User Biasa
        User::create([
            'name' => 'Budi Pembeli',
            'email' => 'user@jasaweb.test',
            'role' => 'user',
            'address' => 'Jl. Mawar No. 10, Semarang',
            'password' => Hash::make('password'),
            'saldo' => 100000, // Punya saldo 100rb
        ]);
    }
}