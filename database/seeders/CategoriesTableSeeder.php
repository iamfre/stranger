<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create(['name' => 'Путешествия', 'route' => 'travel']);
        Category::factory()->create(['name' => 'Образ жизни', 'route' => 'lifestyle']);
        Category::factory()->create(['name' => 'Горы', 'route' => 'mountains']);
    }
}
