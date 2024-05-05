<?php

namespace Database\Seeders;

use App\Models\project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mahmoud',
            'email' => 'mah@example.com',
            'password' => bcrypt('123.123A'),
            'email_verified_at' => time()
        ]);
        project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
