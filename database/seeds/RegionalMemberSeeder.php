<?php

use App\Member;
use App\Regional;
use Illuminate\Database\Seeder;

class RegionalMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'title' => 'Board Member',
            'name' => 'Grant Holland',
            'description' => 'KNZ Referees Council Member WKF Kumite Referee A & OKF - Kata Judge A',
            'image_url' => '',
            'region_id' => 1
        ]);

        Member::create([
            'title' => 'Treasurer',
            'name' => 'Christopher Bennett',
            'description' => 'Board member since 2013 and been on the Coaching Council as well as a successful competitor.',
            'image_url' => '',
            'region_id' => 1,
        ]);

        Member::create([
            'title' => 'Board Member',
            'name' => 'Phil Laing',
            'description' => 'Phil has been with Karate New Zealand since the 1980s and been on the National Coaching team.',
            'image_url' => '',
            'region_id' => 1,
        ]);

        Member::create([
            'title' => 'Treasurer',
            'name' => 'Rebecca Merrifield',
            'description' => 'Represented NZ as a competitor and a Member for Canterbury Westland and Coaches councils',
            'image_url' => '',
            'region_id' => 1,
        ]);

        Member::create([
            'title' => 'Treasurer',
            'name' => 'Geoge Glausius',
            'description' => 'Represented NZ as a competitor and a Member for Canterbury Westland and Coaches councils',
            'image_url' => '',
            'region_id' => 1,
        ]);

        Member::create([
            'title' => 'Board Member',
            'name' => 'Kevin Plaisted',
            'description' => 'Kevin has worked within Karate NZ for many years and a member of the Referees Council of Karate NZ.',
            'image_url' => '',
            'region_id' => 1,
        ]);


    }
}
