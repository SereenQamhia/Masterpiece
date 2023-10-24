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
                'name' => 'Ali Mohammad',
                'description' => 'I\'m a specialist in attention to detail in every aspect of my business, and believe in great customer service, and because I understand the adage "home is where the heart is" I strive to be careful, and I endeavor to afford my clients with a truly professional, competitive service.',
                'email' => 'Ali@gmail.com',
                'image' => 'team-1.jpg',
                'cv' => 'Ali_cv.pdf',
                'location' => 'Irbid',
                'experience' => 9,
                'age' => 30,
                'gender' => 'Male',
                'price' => 5.00,
                'profission' => 'Profession in wall painting and interior designing',
                'completed_jobs' => 50,
                'provider_id' => 4, // Assuming this references a provider
                'image1' => 'image_png (3).png',
                'image2' => 'image_png (4).png',
                'image3' => 'image_png (5).png',
                'image4' => 'image_png (6).png',
                'image5' => 'image_png (7).png',
                'image6' => 'image_png (8).png',
                'daysofwork' => 'Monday,Tuesday,Wednesday',
                'hoursofwork' => '8am,9am,12am,3pm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more professional records as needed
        ]);
    }
}
