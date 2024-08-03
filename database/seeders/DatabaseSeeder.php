<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Вызов сидеров для заполнения данных
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class); // Убедитесь, что вы также создаете сидер для таблицы posts
    }
}
