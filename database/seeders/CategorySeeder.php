<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Documentary Book'
        ]);
        Category::create([
            'name' => 'Comedy Book'
        ]);
        Category::create([
            'name' => 'Horror Book'
        ]);
        Category::create([
            'name' => 'Inspirational Book'
        ]);
    }
}
