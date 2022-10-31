<?php

namespace Database\Seeders;

use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::truncate();

        Media::insert([
            [
                'media_name' => 'Telephone',
                'media_description' => 'Source from Telephone',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'media_name' => 'Email',
                'media_description' => 'Source from Email',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'media_name' => 'Walk-In',
                'media_description' => 'Source from Walk In',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'media_name' => 'WhatsApp',
                'media_description' => 'Source from WhatsApp',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
        ]);
    }
}
