<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'General Carpentry',
                'description' => 'Wooden Furniture Manufacturing And Remodeling',
                'image' => 'portfolio-1.jpg',
                'location' => 'Irbid',
                'time' => '4pm',
                'day' => 'Satarday',
                'price' => '20' ,
                'duration'=> '3hrs'
            ],
            [
                'title' => 'Paintaing',
                'description' => 'Master the Art of Painting and Revitalize Your Space',
                'image' => 'portfolio-2.jpg',
                'location' => 'Irbid',
                'time' => '4pm',
                'day' => 'Satarday',
                'price' => '20' ,
                'duration'=> '3hrs'
            ]
            ,
            [
                'title' => 'General Electrical',
                'description' => 'Master Wiring, Fixtures, and Safety for a Brighter Home',
                'image' => 'portfolio-3.jpg',
                'location' => 'Irbid',
                'time' => '4pm',
                'day' => 'Satarday',
                'price' => '20' ,
                'duration'=> '3hrs'
            ]
            ,
            [
                'title' => 'Plumping',
                'description' => 'Enroll Now for Fixture, Repair, and Water System Expertise',
                'image' => 'portfolio-4.jpg',
                'location' => 'Irbid',
                'time' => '4pm',
                'day' => 'Satarday',
                'price' => '20' ,
                'duration'=> '3hrs'
            ]
            ,
            [
                'title' => 'General Home Fixing',
                'description' => 'Master Essential Home Fixes, Enhance Your Skills, and Elevate Your Space',
                'image' => 'portfolio-5.jpg',
                'location' => 'Irbid',
                'time' => '4pm',
                'day' => 'Satarday',
                'price' => '20' ,
                'duration'=> '3hrs'
            ]
        ]);
    }
}
