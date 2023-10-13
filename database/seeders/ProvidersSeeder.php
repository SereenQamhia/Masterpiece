<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    public function run()
    {
        // DB::table('providers')->truncate();

        $providers = [
            [
                'name' => 'Carpintery Companies',
                'description' => 'Comprehensive solutions with seasoned teams.',
                'image' => 'carpentery comp.jpg',
                'service_name' => 'Carpenter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carpintery professionals',
                'description' => 'Personalized skills for your home aspirations.',
                'image' => 'carpenter pro.jpg',
                'service_name' => 'Carpenter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Painting Companies',
                'description' => 'Comprehensive solutions with seasoned teams.',
                'image' => 'paint companies.png',
                'service_name' => 'Painting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Painting professionals',
                'description' => 'Personalized touch for your home\'s new colors.',
                'image' => 'paint pro.png',
                'service_name' => 'Painting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            [
                'name' => 'Plumbing Companies',
                'description' => 'Comprehensive solutions with seasoned teams.',
                'image' => 'plumbing companies.jpg',
                'service_name' => 'Plumbing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plumbing professionals',
                'description' => 'Comprehensive solutions with seasoned teams.',
                'image' => 'Plumbinng pro.jpg',
                'service_name' => 'Plumbing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electrical Companies',
                'description' => 'Comprehensive solutions with seasoned teams.',
                'image' => 'Electrical comp.jpg',
                'service_name' => 'Electrical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electrical professionals',
                'description' => 'Comprehensive solutions with seasoned teams.',
                'image' => 'Electrical pro.jpg',
                'service_name' => 'Electrical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
      
         
      
        ];
        foreach ($providers as $provider) {
            DB::table('providers')->insert([
                'name' => $provider['name'],
                'description' => $provider['description'],
                'image' => $provider['image'],
                'service_name' => $provider['service_name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
