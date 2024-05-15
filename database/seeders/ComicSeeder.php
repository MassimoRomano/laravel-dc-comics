<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics.comics');

        foreach ($comics as $comic) {
            $comics = new Comic();
            $comics->thumb = $comic['thumb'];
            $comics->title = $comic['title'];
            $comics->type = $comic['type'];
            $comics->series = $comic['series'];
            $comics->sale_date = $comic['sale_date'];
            $comics->description = $comic['description'];
            $comics->price = $comic['price'];
            $comics->save();
        }
    }
}
