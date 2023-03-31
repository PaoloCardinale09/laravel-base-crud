<?php

namespace Database\Seeders;

use App\Models\Song;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_song = new Song;

        $new_song->title = 'No limts of stars';
        $new_song->album = 'th eVeils';
        $new_song->author = 'the veils';
        $new_song->editor = 'Columbia';
        $new_song->length = '00:03:23';
        $new_song->poster= 'https';

        $new_song->save();
    }
}