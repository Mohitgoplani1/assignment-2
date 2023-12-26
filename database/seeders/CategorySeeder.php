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
            'name' => 'Indian'
        ]);
        Category::create([
            'name' => 'Chinese'
        ]);
        Category::create([
            'name' => 'Continental'
        ]);
        Category::create([
            'name' => 'French'
        ]);
        Category::create([
            'name' => 'American'
        ]);
    }
}
