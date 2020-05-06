<?php

use App\Club;
use App\Region;
use Illuminate\Database\Seeder;

class RegionClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auckland = Region::create([
            'name' => 'AUCKLAND AND NORTHLAND',
            'slug' => 'AUCKLAND-AND-NORTHLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'image_link' => '',
        ]);


        $centeral = Region::create([
            'name' => 'CENTRAL NORTH ISLAND',
            'slug' => 'CENTRAL-NORTH-ISLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'image_link' => '',
        ]);


        $lower = Region::create([
            'name' => 'LOWER NORTH ISLAND',
            'slug' => 'LOWER-NORTH-ISLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'image_link' => '',
        ]);



        $caterbury = Region::create([
            'name' => 'CANTERBURY WESTLAND',
            'slug' => 'CANTERBURY-WESTLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'image_link' => '',
        ]);

        $otago = Region::create([
            'name' => 'OTAGO SOUTHLAND',
            'slug' => 'OTAGO-SOUTHLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'image_link' => '',
        ]);


        $clubOne = Club::create([
            'description' => '<p>Gojukai - Christchurch</p><p>Head Sensei - Gary White</p><p>464 Tuam St, Philipstown, Canterbury</p>',
            'phone_number' => '021 778 640',
            'email' => 'gary@karatechristchurch.co.nz',
            'site' => 'www.karatechristchurch.co.nz',
            'latitude' => '-43.535411',
            'longitude' => '172.656317',
            'region_id' => $auckland->id
        ]);


        $clubTwo = Club::create([
            'description' => '<p>GKR Karate - Christchurch</p><p>Head Sensei - Greg Burgess</p><p>62 Ferry Road, Christchurch</p>',
            'phone_number' => '(029) 982 6014',
            'email' => 'greg.burgess2@vodafone.com',
            'site' => 'gkrkarate.com',
            'latitude' => '-43.538493',
            'longitude' => '172.647200',
            'region_id' => $centeral->id
        ]);

        $clubThree = Club::create([
            'description' => '<p>JKS Shotokan Karate -Canterbury</p><p>JION Karate - Ashburton</p><p>Head Sensei - Trevor Foster</p><p>185 Clyde Rd, Fendalton, Christchurch 8052</p>',
            'phone_number' => '(029) 982 6014',
            'email' => 'greg.burgess2@vodafone.com',
            'site' => 'gkrkarate.com',
            'latitude' => '-43.513591',
            'longitude' => '172.590470',
            'region_id' => $lower->id
        ]);


    }
}