<?php

namespace Database\Seeders;

use App\Models\Problem;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Problem::truncate();

        Problem::insert([
            [
                'problem_name' => 'G1N01',
                'problem_description' => 'General Information on zum',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'G1N02',
                'problem_description' => 'Info and Input about Packaging',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'G1N03',
                'problem_description' => 'Info and Input about zum Program',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN04',
                'problem_description' => 'Info Promotion',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN05',
                'problem_description' => 'Info about Dealer / Installer / Retailer',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN06',
                'problem_description' => 'Info about Payment Media',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN07',
                'problem_description' => 'Info Procedures',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN08',
                'problem_description' => 'Info Term & Conditions',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN09',
                'problem_description' => 'Offering Services to zum',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN10',
                'problem_description' => 'New (Potential) Subscribers Concern',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN11',
                'problem_description' => 'Info on Billing',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN12',
                'problem_description' => 'Request to Subscribe',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN13',
                'problem_description' => 'Registration Phone Number',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'GIN14',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'ACM01',
                'problem_description' => 'Change / Shifting Address',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'ACM02',
                'problem_description' => 'Change other Subscriber Info/Database',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'ACT01',
                'problem_description' => 'Wrong Installer Code',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'ACT02',
                'problem_description' => 'Wrong/Exchanging Equipment by Installer',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'ACT03',
                'problem_description' => 'No Customer Data at SMS',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'ACT04',
                'problem_description' => 'Disconnect Account',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI01',
                'problem_description' => 'Request for Update / Void AUT',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI02',
                'problem_description' => 'Request for One Time Charge Payment',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI03',
                'problem_description' => 'Request of Statement of Bill / Reprint Billing Statement',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI04',
                'problem_description' => 'Change Frequency',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI05',
                'problem_description' => 'Additional Magazine',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI06',
                'problem_description' => 'Change Payment Method',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI07',
                'problem_description' => 'Info and Input about zum Program',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPI08',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC01',
                'problem_description' => 'Payment Dispute',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC02',
                'problem_description' => 'Payment not Updated / Reflected - Suspend Account',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC03',
                'problem_description' => 'Wrong Account Updated',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC04',
                'problem_description' => 'Waiver & Adjustment',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC05',
                'problem_description' => 'Refund',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC06',
                'problem_description' => 'Transfer of Payment for Different Subscriber',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC07',
                'problem_description' => 'Non-received Billing and Magazine',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'CSP01',
                'problem_description' => 'Upgrade',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'CSP02',
                'problem_description' => 'Downgrade',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS01',
                'problem_description' => 'Installer come to customer house but not as per agreed time',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS02',
                'problem_description' => 'Installer didn\'t show up as per promised',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS03',
                'problem_description' => 'Installer come to customer house but can not solve problem',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS04',
                'problem_description' => 'Leaving Cust house without proper explanation when facing pr',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS05',
                'problem_description' => 'Bad Attitude of Installer to Customer (such as rude, not fri',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS06',
                'problem_description' => 'Request for Reschedule',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS07',
                'problem_description' => 'Customer is not contacted yet by Installer for schedulling',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS08',
                'problem_description' => 'Installed but not yet activated',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS09',
                'problem_description' => 'Installed improperly',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'INS10',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'RFD01',
                'problem_description' => 'Disconnect Request by Subscriber',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'RFD02',
                'problem_description' => 'Temporary Disconection',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'RFD03',
                'problem_description' => 'Voluntary Cancellation (before activation)',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'RFR01',
                'problem_description' => 'Request for Transfer Ownership',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'RFR02',
                'problem_description' => 'Change of Service Address',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'RFR03',
                'problem_description' => 'Reconnection',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'SAL01',
                'problem_description' => 'Over Promise',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'SAL02',
                'problem_description' => 'Wrong Info from Sales to Customer',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'SAL03',
                'problem_description' => 'Sales do calling to DSO on behalf of Customer (such as DSO)',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'SAL04',
                'problem_description' => 'Bad Attitude of Sales',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV01',
                'problem_description' => 'Additional Outlet',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV02',
                'problem_description' => 'Handling of Remote Control',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV03',
                'problem_description' => 'Missing Channel',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV04',
                'problem_description' => 'Skipping Channel',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV05',
                'problem_description' => 'IRD Hang / Damage',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV06',
                'problem_description' => 'No Power',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV07',
                'problem_description' => 'Pin Code Reset',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV08',
                'problem_description' => 'Freezing / Blocking',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV09',
                'problem_description' => 'Missing Picture',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV10',
                'problem_description' => 'No Signal',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP01',
                'problem_description' => 'Echo',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP02',
                'problem_description' => 'One Way Transmission',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP03',
                'problem_description' => 'No incoming and No Outgoing Call On Net/ Off Net',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP04',
                'problem_description' => 'Quality Issue',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP05',
                'problem_description' => 'Lost / Error Transmission',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP06',
                'problem_description' => 'Link International',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP07',
                'problem_description' => 'Phone Line Problem',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCP08',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN01',
                'problem_description' => 'Email address',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN02',
                'problem_description' => 'Metro Line',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN03',
                'problem_description' => 'Link International',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN04',
                'problem_description' => 'Lost Connection',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN05',
                'problem_description' => 'Problem in Modem',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN06',
                'problem_description' => 'Link Lokal',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN07',
                'problem_description' => 'Bandwidth Management',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN08',
                'problem_description' => 'Speed Problem',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN09',
                'problem_description' => 'WIFI',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCN10',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCF01',
                'problem_description' => 'Fax Hang',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCF02',
                'problem_description' => 'No incoming / Outgoing',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCF03',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'NOC01',
                'problem_description' => 'Data Center (UPS, AC, Rectifier, Rack)',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'BPC08',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV11',
                'problem_description' => 'Sound Problem',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'TCV12',
                'problem_description' => 'Others',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'NOC02',
                'problem_description' => 'Switch (Core, Distribution, Last Mile)',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'NOC03',
                'problem_description' => 'Services (IPTV, Softswitch, Internet)',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'problem_name' => 'NOC04',
                'problem_description' => 'Fiber Optic',
                "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
                "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
            ],
        ]);
    }
}
