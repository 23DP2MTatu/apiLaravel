<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 50; $i++) { 
            $pass = $faker->password;
            User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make($pass),
            ]);
        }
    }
}
