<?php

namespace Database\Seeders;

use App\Models\Media;
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
        Media::create([
            [
                'media_name' => 'Telephone',
                'media_description' => 'Source from Telephone'
            ],
            [
                'media_name' => 'Email',
                'media_description' => 'Source from Email'
            ],
            [
                'media_name' => 'Walk-In',
                'media_description' => 'Source from Walk In'
            ],
            [
                'media_name' => 'WhatsApp',
                'media_description' => 'Source from WhatsApp'
            ],
        ]);
    }
}
