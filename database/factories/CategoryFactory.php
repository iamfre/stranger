<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Category::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
//            'name' => $this->faker->unique()->randomElement(['Путешествия', 'Образ жизни']),
            'description' => $this->faker->realText(80),
        ];
    }
}
