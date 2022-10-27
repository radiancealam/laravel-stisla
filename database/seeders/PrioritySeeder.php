<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Priority::create([
            [
                'pty_name' => 'Low',
                'pty_description' => 'Low Priority'
            ],
            [
                'pty_name' => 'Normal',
                'pty_description' => 'Normal Priority'
            ],
            [
                'pty_name' => 'High',
                'pty_description' => 'High Priority'
            ],
            [
                'pty_name' => 'Urgent',
                'pty_description' => 'Urgent Priority'
            ],
        ]);
    }
}
