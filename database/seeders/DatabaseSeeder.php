<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'User1',
            'email' => 'tes2t@example.com1',
            'password' => '1234',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User2',
            'email' => 'tes2t@example.com2',
            'password' => '12345',
        ]);
        
    }
}
