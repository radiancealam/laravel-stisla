<?php

namespace Database\Seeders;

use App\Models\Problem;
use Illuminate\Database\Seeder;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Problem::create([
            [
                'problem_name' => 'G1N01',
                'problem_description' => 'General Information on zum'
            ],
            [
                'problem_name' => 'G1N02',
                'problem_description' => 'Info and Input about Packaging'
            ],
            [
                'problem_name' => 'G1N03',
                'problem_description' => 'Info and Input about zum Program'
            ],
        ]);
    }
}
