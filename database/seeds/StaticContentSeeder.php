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
        // governance  MAIN
        StaticContent::create([
            'key' => 'governance_page_information',
            'value' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.
The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p> <p>The Executive Board consists of the following office bearers:</p> <ul><li>President who shall be the Chairperson</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a> . They are further extended in <a href="#">our Bylaws</a>.</p>'
        ]);


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

        StaticContent::create([
            'key' => 'governance_page_contacts',
            'value' => '<p>Karatenz administration - <a href="mailto:admin@karatenz.org.nz">admin@karatenz.org.nz</a></p>
<p>Chris Bennett - Secretary General - <a href="mailto:cbennett@karatenz.org.nz">cbennett@karatenz.org.nz</a></p>
<p>George Glausiuss - Treasurer - <a href="mailto:gglausiuss@karatenz.org.nz">gglausiuss@karatenz.org.nz</a></p>
<p>Kevin Plaisted - Board Member - <a href="mailto:kplaisted@karatenz.org.nz">kplaisted@karatenz.org.nz</a></p>
<p>Phil Laing - Board Member - <a href="mailto:plaing@karatenz.org.nz">plaing@karatenz.org.nz</a></p>
<p>Rebecca Dobson - Board Member - <a href="mailto:admin@karatenz.org.nz">rmerrifield@karatenz.org.nz</a></p>
<p>Grant Holland - Board Member - <a href="mailto:gholland@karatenz.org.nz">gholland@karatenz.org.nz</a></p>'
        ]);




        // governance   constitution and bylaws
        StaticContent::create([
            'key' => 'constitution_and_bylaws_title',
            'value' => 'Constitution and Bylaws'
        ]);

        StaticContent::create([
            'key' => 'constitution_and_bylaws_text',
            'value' => '<p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Ullamcorper morbi tincidunt ornare massa. Diam maecenas sed enim ut sem viverra aliquet. Non tellus orci ac auctor augue mauris. Aliquam etiam erat velit scelerisque in dictum non consectetur. Iaculis at erat pellentesque adipiscing commodo. Sit amet venenatis urna cursus. Molestie a iaculis at erat pellentesque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Eget arcu dictum varius duis.<p>
<p>Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vitae et leo duis ut diam quam nulla porttitor. Sem nulla pharetra diam sit amet nisl. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Dui sapien eget mi proin sed libero. Cursus risus at ultrices mi tempus. Urna nunc id cursus metus aliquam.</p>'
        ]);

        StaticContent::create([
            'key' => 'constitution_and_bylaws_email',
            'value' => 'admin@karatenz.org.nz'
        ]);


        StaticContent::create([
            'key' => 'constitution_and_bylaws_phone',
            'value' => '021 778 640'
        ]);


        StaticContent::create([
            'key' => 'constitution_and_bylaws_document_name',
            'value' => 'Constitution and Bylaws'
        ]);

        StaticContent::create([
            'key' => 'constitution_and_bylaws_download_link',
            'value' => '#'
        ]);




        // governance  dan grade council
        StaticContent::create([
            'key' => 'dan_grade_council_title',
            'value' => 'Dan Grade Council'
        ]);

        StaticContent::create([
            'key' => 'dan_grade_council_text',
            'value' => '<p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Ullamcorper morbi tincidunt ornare massa. Diam maecenas sed enim ut sem viverra aliquet. Non tellus orci ac auctor augue mauris. Aliquam etiam erat velit scelerisque in dictum non consectetur. Iaculis at erat pellentesque adipiscing commodo. Sit amet venenatis urna cursus. Molestie a iaculis at erat pellentesque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Eget arcu dictum varius duis.<p>
<p>Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vitae et leo duis ut diam quam nulla porttitor. Sem nulla pharetra diam sit amet nisl. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Dui sapien eget mi proin sed libero. Cursus risus at ultrices mi tempus. Urna nunc id cursus metus aliquam.</p>'
        ]);

        StaticContent::create([
            'key' => 'dan_grade_council_email',
            'value' => 'admin@karatenz.org.nz'
        ]);


        StaticContent::create([
            'key' => 'dan_grade_council_phone',
            'value' => '021 778 640'
        ]);


        StaticContent::create([
            'key' => 'dan_grade_council_document_name',
            'value' => 'Dan Grade Council'
        ]);

        StaticContent::create([
            'key' => 'dan_grade_council_download_link',
            'value' => '#'
        ]);





        // governance  referees council
        StaticContent::create([
            'key' => 'referees_council_title',
            'value' => 'Referees Council'
        ]);

        StaticContent::create([
            'key' => 'referees_council_text',
            'value' => '<p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Ullamcorper morbi tincidunt ornare massa. Diam maecenas sed enim ut sem viverra aliquet. Non tellus orci ac auctor augue mauris. Aliquam etiam erat velit scelerisque in dictum non consectetur. Iaculis at erat pellentesque adipiscing commodo. Sit amet venenatis urna cursus. Molestie a iaculis at erat pellentesque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Eget arcu dictum varius duis.<p>
<p>Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vitae et leo duis ut diam quam nulla porttitor. Sem nulla pharetra diam sit amet nisl. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Dui sapien eget mi proin sed libero. Cursus risus at ultrices mi tempus. Urna nunc id cursus metus aliquam.</p>'
        ]);

        StaticContent::create([
            'key' => 'referees_council_email',
            'value' => 'admin@karatenz.org.nz'
        ]);


        StaticContent::create([
            'key' => 'referees_council_phone',
            'value' => '021 778 640'
        ]);


        StaticContent::create([
            'key' => 'referees_council_document_name',
            'value' => 'Referees Council'
        ]);

        StaticContent::create([
            'key' => 'referees_council_download_link',
            'value' => '#'
        ]);









        // governance  coaching council
        StaticContent::create([
            'key' => 'coaching_council_title',
            'value' => 'Coaching Council'
        ]);

        StaticContent::create([
            'key' => 'coaching_council_text',
            'value' => '<p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Ullamcorper morbi tincidunt ornare massa. Diam maecenas sed enim ut sem viverra aliquet. Non tellus orci ac auctor augue mauris. Aliquam etiam erat velit scelerisque in dictum non consectetur. Iaculis at erat pellentesque adipiscing commodo. Sit amet venenatis urna cursus. Molestie a iaculis at erat pellentesque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Eget arcu dictum varius duis.<p>
<p>Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vitae et leo duis ut diam quam nulla porttitor. Sem nulla pharetra diam sit amet nisl. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Dui sapien eget mi proin sed libero. Cursus risus at ultrices mi tempus. Urna nunc id cursus metus aliquam.</p>'
        ]);

        StaticContent::create([
            'key' => 'coaching_council_email',
            'value' => 'admin@karatenz.org.nz'
        ]);


        StaticContent::create([
            'key' => 'coaching_council_phone',
            'value' => '021 778 640'
        ]);


        StaticContent::create([
            'key' => 'coaching_council_document_name',
            'value' => 'Coaching Council'
        ]);

        StaticContent::create([
            'key' => 'coaching_council_download_link',
            'value' => '#'
        ]);






        // governance governance review
        StaticContent::create([
            'key' => 'governance_review_title',
            'value' => 'Governance Review'
        ]);

        StaticContent::create([
            'key' => 'governance_review_text',
            'value' => '<p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Ullamcorper morbi tincidunt ornare massa. Diam maecenas sed enim ut sem viverra aliquet. Non tellus orci ac auctor augue mauris. Aliquam etiam erat velit scelerisque in dictum non consectetur. Iaculis at erat pellentesque adipiscing commodo. Sit amet venenatis urna cursus. Molestie a iaculis at erat pellentesque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Eget arcu dictum varius duis.<p>
<p>Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vitae et leo duis ut diam quam nulla porttitor. Sem nulla pharetra diam sit amet nisl. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Dui sapien eget mi proin sed libero. Cursus risus at ultrices mi tempus. Urna nunc id cursus metus aliquam.</p>'
        ]);

        StaticContent::create([
            'key' => 'governance_review_email',
            'value' => 'admin@karatenz.org.nz'
        ]);


        StaticContent::create([
            'key' => 'governance_review_phone',
            'value' => '021 778 640'
        ]);


        StaticContent::create([
            'key' => 'governance_review_document_name',
            'value' => 'Governance Review'
        ]);

        StaticContent::create([
            'key' => 'governance_review_download_link',
            'value' => '#'
        ]);







        // governance  agm council
        StaticContent::create([
            'key' => 'agm_title',
            'value' => 'Governance Review'
        ]);

        StaticContent::create([
            'key' => 'agm_text',
            'value' => '<p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Ullamcorper morbi tincidunt ornare massa. Diam maecenas sed enim ut sem viverra aliquet. Non tellus orci ac auctor augue mauris. Aliquam etiam erat velit scelerisque in dictum non consectetur. Iaculis at erat pellentesque adipiscing commodo. Sit amet venenatis urna cursus. Molestie a iaculis at erat pellentesque. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Eget arcu dictum varius duis.<p>
<p>Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Interdum varius sit amet mattis vulputate enim nulla aliquet porttitor. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Vitae et leo duis ut diam quam nulla porttitor. Sem nulla pharetra diam sit amet nisl. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Dui sapien eget mi proin sed libero. Cursus risus at ultrices mi tempus. Urna nunc id cursus metus aliquam.</p>'
        ]);

        StaticContent::create([
            'key' => 'agm_email',
            'value' => 'admin@karatenz.org.nz'
        ]);


        StaticContent::create([
            'key' => 'agm_phone',
            'value' => '021 778 640'
        ]);


        StaticContent::create([
            'key' => 'agm_document_name',
            'value' => 'Agm Council'
        ]);

        StaticContent::create([
            'key' => 'agm_download_link',
            'value' => '#'
        ]);






        // about us MAIN
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



        // about us contact us
        StaticContent::create([
            'key' => 'about_page_contact_us',
            'value' => '<p>This is the text for contact us section of about us page</p>'
        ]);

        StaticContent::create([
            'key' => 'about_page_club_membership',
            'value' => '<p>This is the text for club membership section of about us page</p>'
        ]);


        // about us contact us


        // regional information
        StaticContent::create([
            'key' => 'regional_information',
            'value' => '<p>The administration of the business of Karate New Zealand shall be vested in a National Executive Board of Management to be called the Executive Board.
The Executive Board of Karate New Zealand works to ensure the best interests of all our members.</p> <p>The Executive Board consists of the following office bearers:</p> <ul><li>President who shall be the Chairperson</li><li>Secretary-General</li><li>Treasurer</li><li>Four Board members</li></ul><p>The full description of the Executive Board, including duties and powers are available in <a href="#">our Constitution</a> . They are further extended in <a href="#">our Bylaws</a>.</p>'
        ]);

    }
}
