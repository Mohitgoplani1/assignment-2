<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('Nagpur2023!'),
        ]);
        User::create([
            'name' => 'Tushar Joshi',
            'email' => 'tushar@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('Nagpur2023!'),
        ]);
    }
}
