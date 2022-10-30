<?php

namespace Database\Seeders;

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
        $this->call(DepartmentSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(PrioritySeeder::class);
        $this->call(ProblemSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
