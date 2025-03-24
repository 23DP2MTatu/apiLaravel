<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            Post::create([
                'title' => $faker->sentence,
                'discription' => $faker->paragraph,
                'userID' => $i+1,
            ]);
        }
    }
}
