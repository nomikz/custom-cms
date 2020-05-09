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
            'content' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p><p>The Executive Board consists of the following office bearers:</p><ul><li>The Executive Board consists of the following office bearers:</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a>. They are further extended in <a href="#">our Bylaws</a>.</p>',
        ]);


        $centeral = Region::create([
            'name' => 'CENTRAL NORTH ISLAND',
            'slug' => 'CENTRAL-NORTH-ISLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p><p>The Executive Board consists of the following office bearers:</p><ul><li>The Executive Board consists of the following office bearers:</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a>. They are further extended in <a href="#">our Bylaws</a>.</p>',
        ]);


        $lower = Region::create([
            'name' => 'LOWER NORTH ISLAND',
            'slug' => 'LOWER-NORTH-ISLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p><p>The Executive Board consists of the following office bearers:</p><ul><li>The Executive Board consists of the following office bearers:</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a>. They are further extended in <a href="#">our Bylaws</a>.</p>',
        ]);



        $caterbury = Region::create([
            'name' => 'CANTERBURY WESTLAND',
            'slug' => 'CANTERBURY-WESTLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p><p>The Executive Board consists of the following office bearers:</p><ul><li>The Executive Board consists of the following office bearers:</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a>. They are further extended in <a href="#">our Bylaws</a>.</p>',

        ]);

        $otago = Region::create([
            'name' => 'OTAGO SOUTHLAND',
            'slug' => 'OTAGO-SOUTHLAND',
            'description' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.',
            'content' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p><p>The Executive Board consists of the following office bearers:</p><ul><li>The Executive Board consists of the following office bearers:</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a>. They are further extended in <a href="#">our Bylaws</a>.</p>',
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
