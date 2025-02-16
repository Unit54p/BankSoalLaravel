<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user biasa
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'), // Password default user biasa
            'role' => 'user'
        ]);

        // Buat admin dengan password 'asdasdasd'
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('asdasdasd'), // Password admin
            'role' => 'admin'
        ]);

        $this->call(BankSoalSeeder::class);

    }
}
