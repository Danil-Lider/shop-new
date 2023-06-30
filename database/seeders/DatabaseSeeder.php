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

        // BookSeeder::run();

        

        $this->call(BookSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'marfol@inbox.ru',
            'password' => bcrypt('erlkjfdfds533w!'),
            'role_id' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Редактор',
            'email' => 'incar_redactor@mail.ru',
            'password' => bcrypt('Prdgkvs!333'),
            'role_id' => 3,
        ]);

        // $this->call(VoyagerDummyDatabaseSeeder::class);
        // VoyagerDatabaseSeeder

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
