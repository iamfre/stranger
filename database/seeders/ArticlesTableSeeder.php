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
        Article::factory()->create(['is_published' => false, 'image' => 'assets/images/image_5.jpg', 'published_at' => null, 'updated_at' => null]);
        Article::factory()->create(['is_published' => false, 'image' => 'assets/images/image_6.jpg', 'published_at' => null, 'updated_at' => null]);

        for ($i = 1; $i < 10; $i++) {
            Article::factory()->create(['image' => 'assets/images/image_' . $i . '.jpg', 'is_published' => true]);
        }
    }
}
