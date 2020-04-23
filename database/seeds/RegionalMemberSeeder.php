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
        $auckland = Regional::create([
            'name' => 'Auckland and Northland',
            'slug' => 'auckland-and-northland',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
        ]);


        $centeral = Regional::create([
            'name' => 'Central North Island',
            'slug' => 'central-north-island',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
        ]);


        $lower = Regional::create([
            'name' => 'Lower North Island',
            'slug' => 'lower-north-island',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
        ]);

        $canterbury = Regional::create([
            'name' => 'Canterbury Westland',
            'slug' => 'canterbury-westland',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
        ]);


        $orago = Regional::create([
            'name' => 'orago-southland',
            'slug' => 'orago-southland',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
        ]);


        Member::create([
            'title' => 'Board Member',
            'name' => 'Grant Holland',
            'description' => 'KNZ Referees Council Member WKF Kumite Referee A & OKF - Kata Judge A',
            'image_url' => '',
            'regional_id' => $auckland->id
        ]);

        Member::create([
            'title' => 'Treasurer',
            'name' => 'Christopher Bennett',
            'description' => 'Board member since 2013 and been on the Coaching Council as well as a successful competitor.',
            'image_url' => '',
            'regional_id' => $auckland->id,
        ]);

        Member::create([
            'title' => 'Board Member',
            'name' => 'Phil Laing',
            'description' => 'Phil has been with Karate New Zealand since the 1980s and been on the National Coaching team.',
            'image_url' => '',
            'regional_id' => $auckland->id,
        ]);

        Member::create([
            'title' => 'Treasurer',
            'name' => 'Rebecca Merrifield',
            'description' => 'Represented NZ as a competitor and a Member for Canterbury Westland and Coaches councils',
            'image_url' => '',
            'regional_id' => $auckland->id,
        ]);

        Member::create([
            'title' => 'Treasurer',
            'name' => 'Geoge Glausius',
            'description' => 'Represented NZ as a competitor and a Member for Canterbury Westland and Coaches councils',
            'image_url' => '',
            'regional_id' => $auckland->id,
        ]);

        Member::create([
            'title' => 'Board Member',
            'name' => 'Kevin Plaisted',
            'description' => 'Kevin has worked within Karate NZ for many years and a member of the Referees Council of Karate NZ.',
            'image_url' => '',
            'regional_id' => $auckland->id,
        ]);


    }
}
