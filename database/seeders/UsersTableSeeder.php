<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => Hash::make('admin'),
            'admin' => true
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@localhost',
            'password' => Hash::make('user'),
            'admin' => false
        ]);
        DB::table('artists')->insert([
            'name' => 'Hiphop Band',
            'photo' => 'default.jpg',
            'url' => 'http://www.example.com',
            'bio' => 'Wu-tang',
            'user_id' => 1
        ]);
        DB::table('artists')->insert([
            'name' => 'Rock Band',
            'photo' => 'default.jpg',
            'url' => 'http://www.example.com',
            'bio' => 'The GOAT Band',
            'user_id' => 2
        ]);
    }
}
