<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ArticleTagSeeder::class);
         $this->call(ResultSeeder::class);
         $this->call(EventsSeeder::class);
         $this->call(RegionClubSeeder::class);
         $this->call(GovernanceMemberSeeder::class);
         $this->call(RegionalMemberSeeder::class);
         $this->call(SupporterSeeder::class);
         $this->call(StaticContentSeeder::class);
    }
}
