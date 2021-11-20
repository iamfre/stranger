<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'slug' => $this->faker->unique()->uuid(),
            'category_id' => rand(1,2),
            'title' => $this->faker->country(),
            'description' => $this->faker->realText(180),
            'body' => $this->faker->realText(400),
            'image' => null,
            'published_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
