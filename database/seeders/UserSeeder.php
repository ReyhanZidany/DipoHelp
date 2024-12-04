<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@undip.ac.id',
            'password' => Hash::make('password123'), // Password terenkripsi
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@undip.ac.id',
            'password' => Hash::make('password123'), // Password terenkripsi
        ]);
    }
}
