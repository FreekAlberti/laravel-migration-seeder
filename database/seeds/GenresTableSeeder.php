<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $genreArray = [
        //     "fantasy",
        //     "horror",
        //     "dramma",
        //     "comedy",
        //     "action",
        //     "sci-fi"
        // ];


        //controlliamo che quando generiamo nuovi generi non ci sono mai 2 parole uguali
        
        // $array = [];
        
        // while (count($array) < 10) {
            
        //     $fakerWord = $faker->word;
            
        //     if (!in_array("$fakerWord", $array)) {
        //         $array[] = $fakerWord;
        //     }
            
        // }
        
        // foreach ($array as $genre) {
        //     $newGenre = new Genre;
        //     $newGenre->name = $genre;
        //     $newGenre->save();
        // }

        $counter = 0;
        
        while ($counter < 10) {

            $word = $faker->word;
            // $word = "horror";
            $data = Genre::where("name", $word)->get();

            // dd($data->count() == 0);

            if ($data->count() === 0) {
                $newGenre = new Genre;
                $newGenre->name = $word;
                $newGenre->save();
                $counter++;
            }

        }
    }
}
