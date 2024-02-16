<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => rand(0, 1),
            'slug' => fake()->name(),
            'name' => fake()->name(),
            'description' => fake()->name(),
            'pictures' => fake()->name(),
            'meta_title' => fake()->name(),
            'meta_description' => fake()->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
