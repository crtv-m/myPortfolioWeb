<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'age' => 30,
                'salary' => 50000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'age' => 25,
                'salary' => 60000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'age' => 35,
                'salary' => 70000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
