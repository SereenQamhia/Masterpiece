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
                'description' => 'Description for Provider 1Comprehensive solutions with seasoned teams.',
                'image' => 'carpentery comp.jpg',
                'service_name' => 'carpenter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Our professionals',
                'description' => 'Personalized skills for your home aspirations.',
                'image' => 'carpenter pro.jpg',
                'service_name' => 'carpinter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carpintery Companies',
                'description' => 'Description for Provider 1',
                'image' => 'provider1.jpg',
                'service_name' => 'electrical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Our professionals',
                'description' => 'Description for Provider 2',
                'image' => 'provider2.jpg',
                'service_name' => 'electrical',
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            [
                'name' => ' Companies',
                'description' => 'Description for Provider 1',
                'image' => 'provider1.jpg',
                'service_name' => 'painting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'professionals',
                'description' => 'Description for Provider 2',
                'image' => 'provider2.jpg',
                'service_name' => 'painting',
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
