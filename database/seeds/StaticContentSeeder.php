<?php

use Illuminate\Database\Seeder;
use App\StaticContent;

class StaticContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // governance page
        StaticContent::create([
            'key' => 'governance_page_short_description',
            'value' => 'The organisation of Karate New Zealand is handled by the Board and by various specialist councils.'
        ]);




        StaticContent::create([
            'key' => 'governance_page_policy',
            'value' => '<p>Please find below the list of policies from the Executive Board of Karate New Zealand.</p><p>Policy for the handling of complaints 22nd November, 2017.</p>'
        ]);

        StaticContent::create([
            'key' => 'governance_page_policy_document',
            'value' => 'Download version 1.0'
        ]);

        StaticContent::create([
            'key' => 'governance_page_policy_document_link_location',
            'value' => '#'
        ]);





        // about us page
        StaticContent::create([
            'key' => 'about_page_short_description',
            'value' => 'Karate NZ is a voluntary, non profit organization committed to fostering and developing opportunities'
        ]);

        StaticContent::create([
            'key' => 'about_page_what_we_do',
            'value' => '<p>Karate NZ is a voluntary, non profit organization committed to fostering and developing opportunities for all New Zealanders to participate in traditional and sports karate at all levels. Karate NZ is recognized by Sport New Zealand as the national governing body for Karate in New Zealand.</p>
<p>What Are It\'s Aims?</p>
<p>Karate NZ aims to promote and facilitate the development of the highest standards in, and the fullest understanding of traditional and sport karate.</p>

<p>How Does It Achieve It\'s Objectives?</p>
<p>Karate NZ arranges seminars and coaching clinics to assist its members in improving existing skills are learning new skills in the practice, coaching and administration of traditional and sport karate.</p>

<p>Karate NZ arranges training camps and tournaments at regional and national level to provide opportunities for members to participate in sport karate at their preferred level. Karate NZ also maintains affiliations with appropriate national and international bodies to provide for elite and high performance Karate athletes to compete at the highest level.</p>

<p>In conjunction with Sport New Zealand, Karate NZ has developed and is maintaining a rolling 4 year management plan to facilitate a structured and consultative approach to the development of karate at all levels in New Zealand.</p>

 <p>The purposes of this plan are to enable members to participate more effectively in the development and administration of policies to enhance public knowledge and appreciation of and participation in Karate at all levels in New Zealand.</p>

<p>Karate NZ publishes on it\'s website and Facebook page news briefs and updates on karate events and issues. It also publishes other relevant material from time to time to assist it\'s members in staying abreast of current developments and issues affecting karate participants.</p>

<p>Karate NZ maintains and publishes a national register of qualified instructors and coaches who adhere to a common code of conduct so that the general public can exercise a more informed choice taking up karate or martial arts in general.</p>

<p>Karate NZ is owned by it\'s voluntary members. What it does is determined by what they want and need. Karate NZ promotes cooperation, fellowship and the sharing of knowledge among it\'s members and all interested persons in the development of opportunities for all New Zealanders to participate in Karate.</p>

<p>Karate NZ aims at financial self sufficiency. It does not seek to accumulate profit, but only to have it\'s activities meet their cost with sufficient resources to ensure adequate working capital and financial stability through time.</p>'
        ]);

        StaticContent::create([
            'key' => 'about_page_contact_us',
            'value' => '<p>This is the text for contact us section of about us page</p>'
        ]);

        StaticContent::create([
            'key' => 'about_page_club_membership',
            'value' => '<p>This is the text for club membership section of about us page</p>'
        ]);




        // regional information
        StaticContent::create([
            'key' => 'regional_information',
            'value' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.
The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p> <p>The Executive Board consists of the following office bearers:</p> <ul><li>President who shall be the Chairperson</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a> . They are further extended in <a href="#">our Bylaws</a>.</p>'
        ]);

    }
}
