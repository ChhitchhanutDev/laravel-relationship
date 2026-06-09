<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Action',
                'desc' => 'Action movies',
            ],
            [
                'name' => 'Comedy',
                'desc' => 'Comedy movies',
            ],
            [
                'name' => 'Sci-Fi',
                'desc' => 'Science fiction movies',
            ],
        ]);
    }
}