<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;

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

            User::factory()->create([
                 'name' => 'Ruddat',
                 'email' => 'ingo.ruddat@gmail.com',
                 'password' => bcrypt('Ruddat66'),
           ]);


          User::factory()->create([
            'name' => 'Adolf',
            'email' => 'adolf.ruddat@gmail.com',
            'password' => bcrypt('Ruddat66'),
            ]);
                     // this can be done as separate statements
         $role = Role::create(['name' => 'writer']);
         User->assignRole('writer');

            \App\Models\User::factory(10)->create();
    }
}
