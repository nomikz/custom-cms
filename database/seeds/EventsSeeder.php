<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name' => 'Otago Southland Squad Training',
            'image_link' => '',
            'date' => '2019-11-24 09:45 12:30'
        ]);

        Event::create([
            'name' => 'K1 PREMIER LEAGUE - MADRID',
            'image_link' => '',
            'date' => '2019-11-29 09:45 12:30'
        ]);


        Event::create([
            'name' => 'Canterbury Squad Training',
            'image_link' => '',
            'date' => '2019-12-06 09:45 12:30'
        ]);

        Event::create([
            'name' => 'Otago Southland Squad Training',
            'image_link' => '',
            'date' => '2019-12-13 09:45 12:30'
        ]);

        Event::create([
            'name' => 'K1 YOUTH LEAGUE',
            'image_link' => '',
            'date' => '2019-11-13 09:45 12:30'
        ]);

        Event::create([
            'name' => 'K1 YOUTH LEAGUE',
            'image_link' => '',
            'date' => '2019-11-13 09:45 12:30'
        ]);
    }
}
