<?php

use Illuminate\Database\Seeder;

class SupporterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * todo priority
     * @return void
     */
    public function run()
    {
        App\Supporter::create([
            'title' => 'Pub Charity',
            'filename' => 'https://picsum.photos/120/60',
            'link' => 'https://charity.com'
        ]);
        App\Supporter::create([
            'title' => 'SMAI',
            'filename' => 'https://picsum.photos/120/60',
            'link' => 'https://smai.com'
        ]);
        App\Supporter::create([
            'title' => 'QPsport',
            'filename' => 'https://picsum.photos/120/60',
            'link' => 'https://QPsport.com'
        ]);
        App\Supporter::create([
            'title' => 'EDWARDS',
            'filename' => 'https://picsum.photos/120/60',
            'link' => 'https://charity.com'
        ]);
    }
}
