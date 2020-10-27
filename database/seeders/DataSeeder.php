<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use \Faker\Factory as Faker;

use App\Models\ {
    User,
    Artist,
    Album,
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
        $statuses = [
            'Pending',
            'For Sale',
            'Paid',
            'Waiting on Payment',
            'On Check',
            'Completed'
        ];

        $admin_user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@localhost',
            'password' => Hash::make('admin'),
            'admin' => true
        ]);

        $user = User::create([
            'name' => 'Some User',
            'email' => 'user@localhost',
            'password' => Hash::make('user'),
            'admin' => false
        ]);
        $artist = Artist::create([
            'name' => Faker::create()->name,
            'photo' => Faker::create()->image('/tmp'),
            'url' => Faker::create()->url,
            'bio' => Faker::create()->text,
            'user_id' => $user->id
        ]);
        shuffle($genres);
        shuffle($statuses);
        $album = Album::create([
            'name' => Faker::create()->company,
            'genre' => $genres[0],
            'cover' => Faker::create()->image('/tmp'),
            'status' => $statuses[0],
            'best' => !! rand(0, 1),
            'artist_id' => $artist->id
        ]);
        for ($i = 0; $i < rand(5, 15); $i++) {
            Song::create([
                'name' => Faker::create()->company,
                'file' => Faker::create()->image('/tmp'),
                'best' => !! rand(0, 1),
                'album_id' => $album->id
            ]);
        }

        // Create 10 random users
        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => Faker::create()->name,
                'email' => Faker::create()->email,
                'password' => Hash::make('user'),
                'admin' => false
            ]);
            $artist = Artist::create([
                'name' => Faker::create()->name,
                'photo' => Faker::create()->image('/tmp'),
                'url' => Faker::create()->url,
                'bio' => Faker::create()->text,
                'user_id' => $user->id
            ]);
            // Create 1-5 Albums
            for ($a = 0; $a < rand(1, 5); $a++) {
                shuffle($genres);
                shuffle($statuses);
                $album = Album::create([
                    'name' => Faker::create()->company,
                    'genre' => $genres[0],
                    'cover' => Faker::create()->image('/tmp'),
                    'status' => $statuses[0],
                    'best' => !! rand(0, 1),
                    'artist_id' => $artist->id
                ]);
                // Create 5-15 random songs
                Song::create([
                    'name' => Faker::create()->company,
                    'file' => Faker::create()->image('/tmp'),
                    'best' => !! rand(0, 1),
                    'album_id' => $album->id
                ]);
            }
        }
    }
}
