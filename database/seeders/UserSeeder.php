<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'Syafira',
            'email' => 'adminsyafira@mail.com',
            'password' => Hash::make('adminsyafira'),
            'no_telp' => '1234567890',
            'role' => 'admin', 
        ]);
    }
}