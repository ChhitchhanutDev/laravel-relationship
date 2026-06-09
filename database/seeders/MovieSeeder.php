<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
public function run(): void
{
    Movie::insert([
        [
            'name' => 'Avengers',
            'desc' => 'Marvel superhero movie',
            'date' => '2019-04-26',
        ],
        [
            'name' => 'Interstellar',
            'desc' => 'Space exploration movie',
            'date' => '2014-11-07',
        ],
        [
            'name' => 'The Hangover',
            'desc' => 'Comedy movie',
            'date' => '2009-06-05',
        ],
    ]);
}
}