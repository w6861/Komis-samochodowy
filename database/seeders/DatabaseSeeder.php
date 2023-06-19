<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role' => 'Administrator',
        ]);

        Profile::create([
            'user_id' => 1
        ]);


        for( $i=0; $i<50; $i++) {
            Car::create([
                'name' => 'car',
                'type' => 'SUV',
                'price' => '1999',
                'color' => 'black',
                'description' => 'Example',
                'picture' => '/car.png',
            ]);
        }
    }
}
