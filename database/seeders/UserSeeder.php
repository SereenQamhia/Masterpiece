<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Sereen Qamhia',
                'email' => 'sereen@gmail.com',
                'image' => 'about.jpg',
                'password' => Hash::make('Sereen_68'),
                'phone_number' => '0777855213',
                'address' => 'Irbid',
                'user_type' => 'customer'
            ]
        ]);
    }
}