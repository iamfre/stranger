<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Article::factory(10)->create(['is_published' => 1,]);
        for ($i = 1; $i < 10; $i++) {
            Article::factory()->create(['image' => '/assets/images/image_' . $i . '.jpg',]);
        }
    }
}
