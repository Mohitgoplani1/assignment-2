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
            'name' => 'Technology'
        ]);
        Category::create([
            'name' => 'Politics'
        ]);
        Category::create([
            'name' => 'Spiritual'
        ]);
        Category::create([
            'name' => 'Work'
        ]);
    }
}
