<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i ++) {
            User::factory()->create([
                'name' => "Test User {$i}",
                'email' => "test{$i}@example.com",
                'password' => bcrypt('password')
            ]);
        }
    }
}
