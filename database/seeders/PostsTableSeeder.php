<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            ['title' => 'First Post', 'slug' => 'first-post', 'likes' => 10],
            ['title' => 'Second Post', 'slug' => 'second-post', 'likes' => 20],
            ['title' => 'Third Post', 'slug' => 'third-post', 'likes' => 30],
        ]);
    }
}
