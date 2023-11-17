<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ServicesSeeder::class);
         $this->call(ProvidersSeeder::class);
         $this->call(AdminSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(ProfessionalsSeeder::class);
       
      
    }
}
