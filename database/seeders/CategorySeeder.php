<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Web desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'UI UX desain',
            'slug' => 'ui-ux-desain'
        ]);

        Category::create([
            'name' => 'Machine learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'name' => 'Data structure',
            'slug' => 'data-structure'
        ]);

        Category::create([
            'name' => 'Code sampling',
            'slug' => 'code-sampling'
        ]);

    }
}
