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
    }
}
