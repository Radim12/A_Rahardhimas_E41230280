<?php

namespace Database\Seeders;

use Illuminate\Database\MySqlConnection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetailedProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert data register
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(), // Menggunakan timestamp saat ini
            'password' => bcrypt('admin'), // Ganti dengan password asli
            'role' => 'admin', // Menyertakan nilai untuk role
            'active' => 1, // Menyertakan nilai untuk active jika diperlukan
            'remember_token' => null, // Jika tidak ada token, gunakan null
            'created_at' => Carbon::now(), // Menggunakan timestamp saat ini
            'updated_at' => Carbon::now()  // Menggunakan timestamp saat ini
        ]);
    }
}
