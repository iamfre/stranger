<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition()
    {
        return [
            'article_id' => rand(1, 8),
            'body' => $this->faker->realText(100),
            'author' => $this->faker->name(),
        ];
    }
}
