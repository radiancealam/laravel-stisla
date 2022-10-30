<?php

namespace Database\Seeders;

use App\Models\Problem;
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
            [
                'problem_name' => 'GIN04',
                'problem_description' => 'Info Promotion'
            ],
            [
                'problem_name' => 'GIN05',
                'problem_description' => 'Info about Dealer / Installer / Retailer'
            ],
            [
                'problem_name' => 'GIN06',
                'problem_description' => 'Info about Payment Media'
            ],
            [
                'problem_name' => 'GIN07',
                'problem_description' => 'Info Procedures'
            ],
            [
                'problem_name' => 'GIN08',
                'problem_description' => 'Info Term & Conditions'
            ],
            [
                'problem_name' => 'GIN09',
                'problem_description' => 'Offering Services to zum'
            ],
            [
                'problem_name' => 'GIN10',
                'problem_description' => 'New (Potential) Subscribers Concern'
            ],
            [
                'problem_name' => 'GIN11',
                'problem_description' => 'Info on Billing'
            ],
            [
                'problem_name' => 'GIN12',
                'problem_description' => 'Request to Subscribe'
            ],
            [
                'problem_name' => 'GIN13',
                'problem_description' => 'Registration Phone Number'
            ],
            [
                'problem_name' => 'GIN14',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'ACM01',
                'problem_description' => 'Change / Shifting Address'
            ],
            [
                'problem_name' => 'ACM02',
                'problem_description' => 'Change other Subscriber Info/Database'
            ],
            [
                'problem_name' => 'ACT01',
                'problem_description' => 'Wrong Installer Code'
            ],
            [
                'problem_name' => 'ACT02',
                'problem_description' => 'Wrong/Exchanging Equipment by Installer'
            ],
            [
                'problem_name' => 'ACT03',
                'problem_description' => 'No Customer Data at SMS'
            ],
            [
                'problem_name' => 'ACT04',
                'problem_description' => 'Disconnect Account'
            ],
            [
                'problem_name' => 'BPI01',
                'problem_description' => 'Request for Update / Void AUT'
            ],
            [
                'problem_name' => 'BPI02',
                'problem_description' => 'Request for One Time Charge Payment'
            ],
            [
                'problem_name' => 'BPI03',
                'problem_description' => 'Request of Statement of Bill / Reprint Billing Statement'
            ],
            [
                'problem_name' => 'BPI04',
                'problem_description' => 'Change Frequency'
            ],
            [
                'problem_name' => 'BPI05',
                'problem_description' => 'Additional Magazine'
            ],
            [
                'problem_name' => 'BPI06',
                'problem_description' => 'Change Payment Method'
            ],
            [
                'problem_name' => 'BPI07',
                'problem_description' => 'Info and Input about zum Program'
            ],
            [
                'problem_name' => 'BPI08',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'BPC01',
                'problem_description' => 'Payment Dispute'
            ],
            [
                'problem_name' => 'BPC02',
                'problem_description' => 'Payment not Updated / Reflected - Suspend Account'
            ],
            [
                'problem_name' => 'BPC03',
                'problem_description' => 'Wrong Account Updated'
            ],
            [
                'problem_name' => 'BPC04',
                'problem_description' => 'Waiver & Adjustment'
            ],
            [
                'problem_name' => 'BPC05',
                'problem_description' => 'Refund'
            ],
            [
                'problem_name' => 'BPC06',
                'problem_description' => 'Transfer of Payment for Different Subscriber'
            ],
            [
                'problem_name' => 'BPC07',
                'problem_description' => 'Non-received Billing and Magazine'
            ],
            [
                'problem_name' => 'CSP01',
                'problem_description' => 'Upgrade'
            ],
            [
                'problem_name' => 'CSP02',
                'problem_description' => 'Downgrade'
            ],
            [
                'problem_name' => 'INS01',
                'problem_description' => 'Installer come to customer house but not as per agreed time'
            ],
            [
                'problem_name' => 'INS02',
                'problem_description' => 'Installer didn\'t show up as per promised'
            ],
            [
                'problem_name' => 'INS03',
                'problem_description' => 'Installer come to customer house but can not solve problem'
            ],
            [
                'problem_name' => 'INS04',
                'problem_description' => 'Leaving Cust house without proper explanation when facing pr'
            ],
            [
                'problem_name' => 'INS05',
                'problem_description' => 'Bad Attitude of Installer to Customer (such as rude, not fri'
            ],
            [
                'problem_name' => 'INS06',
                'problem_description' => 'Request for Reschedule'
            ],
            [
                'problem_name' => 'INS07',
                'problem_description' => 'Customer is not contacted yet by Installer for schedulling'
            ],
            [
                'problem_name' => 'INS08',
                'problem_description' => 'Installed but not yet activated'
            ],
            [
                'problem_name' => 'INS09',
                'problem_description' => 'Installed improperly'
            ],
            [
                'problem_name' => 'INS10',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'RFD01',
                'problem_description' => 'Disconnect Request by Subscriber'
            ],
            [
                'problem_name' => 'RFD02',
                'problem_description' => 'Temporary Disconection'
            ],
            [
                'problem_name' => 'RFD03',
                'problem_description' => 'Voluntary Cancellation (before activation)'
            ],
            [
                'problem_name' => 'RFR01',
                'problem_description' => 'Request for Transfer Ownership'
            ],
            [
                'problem_name' => 'RFR02',
                'problem_description' => 'Change of Service Address'
            ],
            [
                'problem_name' => 'RFR03',
                'problem_description' => 'Reconnection'
            ],
            [
                'problem_name' => 'SAL01',
                'problem_description' => 'Over Promise'
            ],
            [
                'problem_name' => 'SAL02',
                'problem_description' => 'Wrong Info from Sales to Customer'
            ],
            [
                'problem_name' => 'SAL03',
                'problem_description' => 'Sales do calling to DSO on behalf of Customer (such as DSO)'
            ],
            [
                'problem_name' => 'SAL04',
                'problem_description' => 'Bad Attitude of Sales'
            ],
            [
                'problem_name' => 'TCV01',
                'problem_description' => 'Additional Outlet'
            ],
            [
                'problem_name' => 'TCV02',
                'problem_description' => 'Handling of Remote Control'
            ],
            [
                'problem_name' => 'TCV03',
                'problem_description' => 'Missing Channel'
            ],
            [
                'problem_name' => 'TCV04',
                'problem_description' => 'Skipping Channel'
            ],
            [
                'problem_name' => 'TCV05',
                'problem_description' => 'IRD Hang / Damage'
            ],
            [
                'problem_name' => 'TCV06',
                'problem_description' => 'No Power'
            ],
            [
                'problem_name' => 'TCV07',
                'problem_description' => 'Pin Code Reset'
            ],
            [
                'problem_name' => 'TCV08',
                'problem_description' => 'Freezing / Blocking'
            ],
            [
                'problem_name' => 'TCV09',
                'problem_description' => 'Missing Picture'
            ],
            [
                'problem_name' => 'TCV10',
                'problem_description' => 'No Signal'
            ],
            [
                'problem_name' => 'TCP01',
                'problem_description' => 'Echo'
            ],
            [
                'problem_name' => 'TCP02',
                'problem_description' => 'One Way Transmission'
            ],
            [
                'problem_name' => 'TCP03',
                'problem_description' => 'No incoming and No Outgoing Call On Net/ Off Net'
            ],
            [
                'problem_name' => 'TCP04',
                'problem_description' => 'Quality Issue'
            ],
            [
                'problem_name' => 'TCP05',
                'problem_description' => 'Lost / Error Transmission'
            ],
            [
                'problem_name' => 'TCP06',
                'problem_description' => 'Link International'
            ],
            [
                'problem_name' => 'TCP07',
                'problem_description' => 'Phone Line Problem'
            ],
            [
                'problem_name' => 'TCP08',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'TCN01',
                'problem_description' => 'Email address'
            ],
            [
                'problem_name' => 'TCN02',
                'problem_description' => 'Metro Line'
            ],
            [
                'problem_name' => 'TCN03',
                'problem_description' => 'Link International'
            ],
            [
                'problem_name' => 'TCN04',
                'problem_description' => 'Lost Connection'
            ],
            [
                'problem_name' => 'TCN05',
                'problem_description' => 'Problem in Modem'
            ],
            [
                'problem_name' => 'TCN06',
                'problem_description' => 'Link Lokal'
            ],
            [
                'problem_name' => 'TCN07',
                'problem_description' => 'Bandwidth Management'
            ],
            [
                'problem_name' => 'TCN08',
                'problem_description' => 'Speed Problem'
            ],
            [
                'problem_name' => 'TCN09',
                'problem_description' => 'WIFI'
            ],
            [
                'problem_name' => 'TCN10',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'TCF01',
                'problem_description' => 'Fax Hang'
            ],
            [
                'problem_name' => 'TCF02',
                'problem_description' => 'No incoming / Outgoing'
            ],
            [
                'problem_name' => 'TCF03',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'NOC01',
                'problem_description' => 'Data Center (UPS, AC, Rectifier, Rack)'
            ],
            [
                'problem_name' => 'BPC08',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'TCV11',
                'problem_description' => 'Sound Problem'
            ],
            [
                'problem_name' => 'TCV12',
                'problem_description' => 'Others'
            ],
            [
                'problem_name' => 'NOC02',
                'problem_description' => 'Switch (Core, Distribution, Last Mile)'
            ],
            [
                'problem_name' => 'NOC03',
                'problem_description' => 'Services (IPTV, Softswitch, Internet)'
            ],
            [
                'problem_name' => 'NOC04',
                'problem_description' => 'Fiber Optic'
            ],
        ]);
    }
}
