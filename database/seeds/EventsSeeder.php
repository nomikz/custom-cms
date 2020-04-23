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
        Event::create(
            [
                'name' => 'Otago Southland Squad Training',
                'image_link' => '',
                'date' => '2019-11-24'
            ],[
                'name' => 'K1 PREMIER LEAGUE - MADRID',
                'image_link' => '',
                'date' => '2019-11-29'
            ],[
                'name' => 'Canterbury Squad Training',
                'image_link' => '',
                'date' => '2019-12-06'
            ],[
                'name' => 'Otago Southland Squad Training',
                'image_link' => '',
                'date' => '2019-12-13'
            ],[
                'name' => 'K1 YOUTH LEAGUE',
                'image_link' => '',
                'date' => '2019-11-13'
            ],[
                'name' => 'K1 YOUTH LEAGUE',
                'image_link' => '',
                'date' => '2019-11-13'
            ]
        );
    }
}
