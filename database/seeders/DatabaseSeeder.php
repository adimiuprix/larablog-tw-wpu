<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* Seeder menggunakan factory
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        // Membuat seeder manual
        /*
        User::create([
            'name' => 'Adi Miuprix',
            'username' => 'Miuprix',
            'email' => 'adimiuprix@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        */

        /*
        Category::create([
            'name' => 'Web design',
            'slug' => 'web-design'
        ]);

        Post::create([
            'title' => 'Judul artikel 1',
            'author_id' => '1',
            'category_id' => '1',
            'slug' => 'judul-artikel-1',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis a nisi eius reiciendis ipsum ipsam corrupti sapiente, quaerat sunt ex!'
        ]);
        */

        // Menggunakan factory disatukan
        // Untuk menjalankan migrate:fresh dan seed: php artisan migrate:fresh --seed
        /*
        Post::factory(100)->recycle([
            Category::factory(3)->create(),
            User::factory(5)->create()
        ])->create();
        */

        // Menggunakan factory dan panggil Class CategorySeeder dan UserSeeder, jadi ini di pisahkan
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}
