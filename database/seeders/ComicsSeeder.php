<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $key => $comic){

            $newComic = new Comic();
            
            $newComic->title = $comic['title'];
            $newComic->series = $comic['series'];
            $newComic->price = $comic['price'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->sale_date = $comic['sale_date'];

            $newComic->save();
        }
    }
}
