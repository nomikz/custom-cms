<?php

use App\StaticPage;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // is_visable default(false) false
        // document_link default('') empty



        // about us sections

        StaticPage::create([
            'page' => 'about_us',
            'section' => 'contact_us',
            'title' => 'Contacts',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Contacts',
        ]);


        StaticPage::create([
            'page' => 'about_us',
            'section' => 'club_membership',
            'title' => 'Club membership',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Membership',
        ]);





        // tournament results sections

        StaticPage::create([
            'page' => 'tournament_results',
            'section' => 'rules_and_regulations',
            'title' => 'Rules and Regulations',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Contacts',
        ]);


        StaticPage::create([
            'page' => 'tournament_results',
            'section' => 'player_registration',
            'title' => 'Player registration',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Registration',
        ]);


        StaticPage::create([
            'page' => 'tournament_results',
            'section' => 'national_squad_application',
            'title' => 'National squad application',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Squad',
        ]);


        StaticPage::create([
            'page' => 'tournament_results',
            'section' => 'senior_athlete_management_pool',
            'title' => 'Senior athlete management pool',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Pool',
        ]);






        // governance sections

        StaticPage::create([
            'page' => 'governance',
            'section' => 'constitution_and_bylaws',
            'title' => 'Constitution and Bylaws',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Contacts',
        ]);


        StaticPage::create([
            'page' => 'governance',
            'section' => 'dan_grade_council',
            'title' => 'Dan Grade Council',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Registration',
        ]);


        StaticPage::create([
            'page' => 'governance',
            'section' => 'referees_council',
            'title' => 'Referees Council',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Squad',
        ]);


        StaticPage::create([
            'page' => 'governance',
            'section' => 'coaching_council',
            'title' => 'Coaching Council',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Pool',
        ]);


        StaticPage::create([
            'page' => 'governance',
            'section' => 'governance_review',
            'title' => 'Governance Review',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Contacts',
        ]);


        StaticPage::create([
            'page' => 'governance',
            'section' => 'agm_minutes',
            'title' => 'AGM Minutes',
            'text' => '<p>Placeholder:</p><p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.</p><p>The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p>',
            'email' => 'admin@karatenz.org.nz',
            'phone' => '021 778 640',
            'document_name' => 'Registration',
        ]);


    }
}
