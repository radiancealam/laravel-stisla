<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            [
                'sts_name' => 'Open',
                'sts_description' => 'Ticket Open'
            ],
            [
                'sts_name' => 'Close',
                'sts_description' => 'Ticket Closed'
            ],
            [
                'sts_name' => 'Waiting For Response',
                'sts_description' => 'Ticket Waiting For Response'
            ],
        ]);
    }
}
