<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(SubscribersSeeder::class);

        User::factory(5)->create();
        User::factory()->create(['name' => 'admin', 'email' => 'admin@ya.ru', 'password' => 'pass']);
    }
}
