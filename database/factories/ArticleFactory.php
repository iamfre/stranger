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
            'title' => $this->faker->realText(35),
            'description' => $this->faker->realText(35),
            'body' => $this->faker->realText(400),
            'published_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
