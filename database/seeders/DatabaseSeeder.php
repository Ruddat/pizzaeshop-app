<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            \App\Models\User::factory()->create([
                 'name' => 'Ruddat',
                 'email' => 'ingo.ruddat@gmail.com',
                 'password' => bcrypt('Ruddat66'),
           ]);

            \App\Models\User::factory(10)->create();
    }
}
