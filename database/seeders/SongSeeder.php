<?php

namespace Database\Seeders;

use App\Models\Song;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){

            
            $new_song = new Song;
            
            $new_song->title = $faker->word();
            $new_song->album = $faker->word();
            $new_song->author = $faker->firstNameMale()  ;
            $new_song->editor = $faker->firstNameMale()  ;
            $new_song->length = $faker->dateTimeBetween('00:02:00',' 00:10:00');
            $new_song->poster= 'https://picsum.photos/300';
            
            $new_song->save();
        }
    }
}