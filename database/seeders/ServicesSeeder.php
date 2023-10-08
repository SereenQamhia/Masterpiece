<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        //  DB::table('services')->truncate();

        DB::table('services')->insert([
            [
                'name' => 'carpenter',
                'description' => 'Vision to reality – custom, intricate, repairs.',
                'image' => 'service-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'electrical',
                'description' => 'Safety, precision – installations and troubleshooting.',
                'image' => 'service-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'painting',
                'description' => 'Vibrant colors, flawless finishes, inside and out.',
                'image' => 'service-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'plumping',
                'description' => 'Swift solutions for leaks, clogs, new installations.',
                'image' => 'service-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
