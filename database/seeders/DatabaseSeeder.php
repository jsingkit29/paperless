<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            "user_group_id" => "1",
            "username" => "chedro3admin",
            "password" => bcrypt("ched2022admin"),
            "activated" => true
            
        ]);
    }
}