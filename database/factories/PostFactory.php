<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author_id' => User::factory(), // Generate "id" sambil membuat user factory
            'category_id' => Category::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'body' =>fake()->text()
        ];
    }
}

/** Recycle adalah cara laravel membuat foreign key secara acak dan tidak urut.
 *  Perintah ini akan menggerate "author_id" secara acak.
 *  "App\Models\Post::factory(100)->recycle(User::factory(50)->create())->create();".
 */
