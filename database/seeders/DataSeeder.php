<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use \Faker\Factory as Faker;

use App\Models\ {
    User,
    Release,
    Song
};

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $genres = [
            'Rock',
            'Pop',
            'Hip-Hop',
            'R&B',
            'Metal',
            'Country',
            'Salsa'
        ];
        $statuses = config('enums.release_status');

        $admin_user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@localhost',
            'password' => Hash::make('admin'),
            'company' => 'Admin Services, LLC',
            'phone' => '555-555-5555',
            'admin' => true
        ]);

        $user = User::create([
            'name' => 'Some User',
            'email' => 'user@localhost',
            'password' => Hash::make('user'),
            'company' => 'User Services, LLC',
            'phone' => '111-222-3333',
            'admin' => false
        ]);
        shuffle($statuses);
        $release = Release::create([
            'title' => Faker::create()->company,
            'artist' => Faker::create()->name,
            'artwork' => Faker::create()->image('/tmp'),
            'status' => $statuses[0],
            'user_id' => $user->id
        ]);
        for ($i = 0; $i < rand(5, 15); $i++) {
            shuffle($genres);
            $instrumental = !! rand(0, 1);
            Song::create([
                'title' => Faker::create()->company,
                'artist' => Faker::create()->name,
                'composer' => Faker::create()->name,
                'lyrics' => $instrumental ? '' : Faker::create()->name,
                'genre' => $genres[0],
                'language' => 'English',
                'instrumental' => $instrumental,
                'explicit' => !! rand(0, 1),
                'file' => Faker::create()->image('/tmp'),
                'release_id' => $release->id
            ]);
        }

        // Create 10 random users
        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => Faker::create()->name,
                'email' => Faker::create()->email,
                'password' => Hash::make('user'),
                'company' => Faker::create()->company,
                'phone' => Faker::create()->phonenumber,
                'admin' => false
            ]);
            // Create 1-5 Releases
            for ($a = 0; $a < rand(1, 5); $a++) {
                shuffle($statuses);
                $release = Release::create([
                    'title' => Faker::create()->company,
                    'artist' => Faker::create()->name,
                    'artwork' => Faker::create()->image('/tmp'),
                    'status' => $statuses[0],
                    'user_id' => $user->id
                ]);
                for ($i = 0; $i < rand(5, 15); $i++) {
                    // Create 5-15 random songs
                    shuffle($genres);
                    $instrumental = !! rand(0, 1);
                    Song::create([
                        'title' => Faker::create()->company,
                        'artist' => Faker::create()->name,
                        'composer' => Faker::create()->name,
                        'lyrics' => $instrumental ? '' : Faker::create()->name,
                        'genre' => $genres[0],
                        'language' => 'English',
                        'instrumental' => $instrumental,
                        'explicit' => !! rand(0, 1),
                        'file' => Faker::create()->image('/tmp'),
                        'release_id' => $release->id
                    ]);
                }
            }
        }
    }
}
