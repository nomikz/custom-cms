<?php

use App\GovernanceMember;
use Illuminate\Database\Seeder;

class GovernanceMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        GovernanceMember::create([
            'title' => 'Board Member',
            'name' => 'Grant Holland',
            'order_number' => '1',
            'description' => 'KNZ Referees Council Member WKF Kumite Referee A & OKF - Kata Judge A',
            'image_url' => '',
            'email' => 'gholland@karatenz.org.nz',
        ]);

        GovernanceMember::create([
            'title' => 'Treasurer',
            'name' => 'Christopher Bennett',
            'order_number' => '1',
            'description' => 'Board member since 2013 and been on the Coaching Council as well as a successful competitor.',
            'image_url' => '',
            'email' => 'gglausiuss@karatenz.org.nz',
        ]);
    }
}
