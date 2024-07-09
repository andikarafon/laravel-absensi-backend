<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create 10 user secara dinamis
         User::factory(10)->create();

        //create user static
        User::factory()->create([
            'name' => 'Ravon Admin',
            'email' => 'andika@wonokoyo.co.id',
            'password' =>Hash::make('edppdew'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name'      => 'PT. POWERMETAL',
            'email'     => 'powermetal@gmail.com',
            'address'   => 'Jalan Taman Bungkul 1-7, Surabaya',
            'latitude'  => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in'   => '08:00',
            'time_out'  => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
        ]);
    }
}
