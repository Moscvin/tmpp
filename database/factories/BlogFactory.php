<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'seo_title' => $this->faker->title,
            'seo_description' => $this->faker->title,
            'seo_keywords' => $this->faker->title,
            'text' => $this->faker->text,
            'is_active' => $this->faker->boolean,
        ];
    }
}
