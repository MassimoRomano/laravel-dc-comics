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
        $products = config('comics.comic');

        foreach ($products as $product) {
            $comics = new Comic();
            $comics->thumb = $product['thumb'];
            $comics->title = $product['title'];
            $comics->type = $product['type'];
            $comics->series = $product['series'];
            $comics->sale_data = $product['sale_data'];
            $comics->description = $product['description'];
            $comics->price = $product['price'];
            $comics->save();
        }
    }
}
