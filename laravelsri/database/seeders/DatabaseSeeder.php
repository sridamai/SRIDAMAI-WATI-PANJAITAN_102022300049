<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tambahkan 5 user manual dengan factory override
        User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User 4',
            'email' => 'test4@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User 5',
            'email' => 'test5@example.com',
        ]);

        // Seeder lain tetap jalan
        $this->call([
            BarangSeeder::class,
        ]);
    }
}
