<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfessionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professionals')->insert([
            [
                'name' => 'John Doe',
                'description' => 'Experienced professional',
                'email' => 'john@example.com',
                'image' => 'john.jpg',
                'cv' => 'john_cv.pdf',
                'location' => 'New York',
                'experience' => 5,
                'age' => 30,
                'gender' => 'Male',
                'price' => 50.00,
                'profission' => 'Carpenter',
                'completed_jobs' => 20,
                'provider_id' => 29, // Assuming this references a provider
                'image1' => 'john_image1.jpg',
                'image2' => 'john_image2.jpg',
                'image3' => 'john_image3.jpg',
                'image4' => 'john_image4.jpg',
                'image5' => 'john_image5.jpg',
                'image6' => 'john_image6.jpg',
                'daysofwork' => 'Monday,Tuesday,Wednesday',
                'hoursofwork' => '8am-5pm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more professional records as needed
        ]);
    }
}
