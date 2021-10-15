<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Bemmi',
            'email' =>'pramitha5@gmail.com',
            'gender' =>'f',
            'address' =>'Matale',
            'mobile' => '12345',
            'password' =>Hash::make('test123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
