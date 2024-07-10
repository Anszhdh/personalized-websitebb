<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Insert admin user
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Replace 'password' with your desired password
            'role' => 1, // Assuming '1' represents the admin role
            'is_Admin'=>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}