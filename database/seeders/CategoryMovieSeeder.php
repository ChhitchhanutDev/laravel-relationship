<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMovieSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category_movie')->insert([
            [
                'category_id' => 1,
                'movie_id' => 1,
            ],
            [
                'category_id' => 3,
                'movie_id' => 1,
            ],
            [
                'category_id' => 3,
                'movie_id' => 2,
            ],
            [
                'category_id' => 2,
                'movie_id' => 3,
            ],
        ]);
    }
}
