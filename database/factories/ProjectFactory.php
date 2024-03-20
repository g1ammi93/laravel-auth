<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(20);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph(15, true),
            'image' => fake()->imageUrl(250, 250, true)
        ];
    }
}
