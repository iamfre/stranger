<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->unique()->uuid(),
            'title' => $this->faker->country(),
            'description' => $this->faker->realText(180),
            'body' => $this->faker->realText(400),
            'image' => null,
            'published_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
