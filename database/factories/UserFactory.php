<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            // ternary operator $a = $a ? $a : $b
            // elvish operator $a = $a ?: $b
            // null coalescing operator $a ??= $b
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

/** Penggunaan faker
 * Saat hendak generate data menggunakan faker, kita menggunakan php artisan tinker
 * Masuk ke tinker dengan terminal cli, lalu ketik "App\Models\User::factory()->create();".
 * Pastikan pada model User sudah menggunakan class "factory"
 * Jika mau generate banyak sekaligus "App\Models\User::factory(5)->create();".
 * Jika mau menjalanakan dengan method "unverified()", ketik: "App\Models\User::factory(3)->unverified()->create();"
 */
