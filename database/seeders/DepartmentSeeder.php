<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();

        Department::insert([
            [
                "dpt_name" => "NOC-NMC",
                "dpt_email" => "noc@zumstar.co.id",
            ],
            [
                "dpt_name" => "Customer Service",
                "dpt_email" => "custcare@zumstar.co.id",
            ],
            [
                "dpt_name" => "Service Activation",
                "dpt_email" => "serviceact@zumstar.co.id",
            ],
            [
                "dpt_name" => "IST",
                "dpt_email" => "ist@zumstar.co.id",
            ],
            [
                "dpt_name" => "Sales Marketing",
                "dpt_email" => "salesmarketing@zumstar.co.id",
            ],
            [
                "dpt_name" => "IPTV",
                "dpt_email" => "iptv@zumstar.co.id",
            ],
            [
                "dpt_name" => "TOD",
                "dpt_email" => "tod@zumstar.co.id",
            ],
            [
                "dpt_name" => "Billing",
                "dpt_email" => "billing.distribution@zumstar.co.id",
            ],
            [
                "dpt_name" => "Account Processing",
                "dpt_email" => "mirfan@zumstar.co.id",
            ],
            [
                "dpt_name" => "Planning",
                "dpt_email" => "planning@zumstar.co.id",
            ],
            [
                "dpt_name" => "FO Transmission",
                "dpt_email" => "fo.transmission@zumstar.co.id",
            ],
            [
                "dpt_name" => "Voice Service",
                "dpt_email" => "voice@zumstar.co.id",
            ],
            [
                "dpt_name" => "Data Network",
                "dpt_email" => "noc@zumstar.co.id",
            ],
            [
                "dpt_name" => "Technology",
                "dpt_email" => "technology@zumstar.co.id",
            ],
        ]);
    }
}
