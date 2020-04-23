<?php

use Illuminate\Database\Seeder;
use App\Result;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Result::create([
            'title' => 'RESULTS 24TH WORLD SENIOR CHAMPIONSHIPS',
            'slug' => 'RESULTS-24TH-WORLD-SENIOR-CHAMPIONSHIPS',
            'content' => '<div>
<p>November saw our New Zealand athletes competing at the Senior World Championships in Madrid, Spain. 8 athletes competed in individual events along with the Senior Female Kumite Team with great results showing our competitiveness at top level World championships. Over half of the team made it past the first round with Andrea Anacan securing our best placing ever in Senior World&#39;s making it to the Quarter Finals and a top 8 finish.</p>

<p>Congratulations to all athletes.</p>

<ul>
	<li>Andrea Anacan&nbsp; Quarter Finals 7th Placing&nbsp;Female Kata</li>
	<li>Barney Gill&nbsp; 1st round -67kg Male Kumite</li>
	<li>Isaac Hoshi&nbsp; 2nd round Male Kata</li>
	<li>Marina Monk&nbsp; 3rd round -61kg Female Kumite</li>
	<li>Alison Oliver&nbsp; 1st round -55kg Female Kumite</li>
	<li>Amy Thomason&nbsp; 2nd round -68kg Female Kumite</li>
	<li>Shane Tregidga&nbsp; 1st round -84kg Male Kumite</li>
	<li>Bex Watkin&nbsp; 1st round -50kg Female Kumite</li>
	<li>Senior Female Team Kumite 2nd round (Marina Monk, Alison Oliver, Amy Thomason, Bex Watkin)</li>
</ul>

<p>Downloads</p>

<p><a href="https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank" title="Tournament results">Tournament results</a></p>
</div>',
            'download_link' => 'https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend',
            'image_link' => 'php8Nk42n.jpg',
            'date' => '2018-11-12',
        ]);

        //2
        Result::create([
            'title' => 'AUCKLAND OPEN 2018',
            'slug' => 'AUCKLAND-OPEN-2018',
            'content' => '<div>
<p><strong>Auckland Open Karate Championships&nbsp;</strong>was held on&nbsp;<strong>19th August 2018&nbsp;</strong>at the&nbsp;Auckland Netball Centre, Stonefields.&nbsp;</p>
<p>There were competitors from not only outside Auckland such as Hamilton, Tauranga and Wellington, but also from Australia and New Caledonia.</p>
<p><strong>Downloads</strong><br />
<a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4026&amp;active_menu=calendar" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">Tournament Results</a>&nbsp;<br />
<a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=medals&amp;vernr=4026&amp;active_menu=calendar" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">Medals by Club</a></p>
</div>',
            'download_link' => 'https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4026&amp;active_menu=calendar',
            'image_link' => 'phppGjeVP.jpg',
            'date' => '2018-08-20',
        ]);


        //3
        Result::create([
            'title' => 'NATIONAL SECONDARY SCHOOLS CHAMPIONSHIPS 2018',
            'slug' => 'NATIONAL-SECONDARY-SCHOOLS-CHAMPIONSHIPS-2018',
            'content' => '<div>
<p>The&nbsp;<strong>2018 NZ National Secondary Schools Karate Championships</strong>&nbsp;was held in conjunction with the&nbsp;<a href="http://karatenz.co.nz/News/News/2018/08/Karate-Auckland-Open-2018/" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">Auckland Open</a>&nbsp;international tournament on&nbsp;<strong>19th August</strong>&nbsp;at the&nbsp;Auckland Netball Centre, Stonefields.</p>
<p><strong>Results</strong><br />
<a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4028&amp;active_menu=calendar" style="box-sizing: border-box; background: transparent; color: rgb(196, 37, 10); outline: 0px;" target="_blank">New Zealand National Secondary Schools 201</a></p>
</div>',
            'download_link' => 'https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4028&amp;active_menu=calendar',
            'image_link' => 'phpMX0t3Q.jpg',
            'date' => '2018-08-20',
        ]);


        //4
        Result::create([
            'title' => 'FISU WORLD UNIVERSITY KARATE CHAMPS 2018',
            'slug' => 'FISU-WORLD-UNIVERSITY-KARATE-CHAMPS-2018',
            'content' => '<p>The following athletes were selected to represent New Zealand at the&nbsp;<strong>2018 World University Karate Championships</strong>&nbsp;in Kobe, Japan from&nbsp;<strong>19th-22nd July</strong>:</p>

<ul>
	<li>
	<div style="box-sizing: border-box;">Male Kumite -84kg: Reid Edmond</div>
	</li>
	<li>
	<div style="box-sizing: border-box;">Male Kata: Isaac Hoshi</div>
	</li>
</ul>

<p>Unfortunately Reid Edmond was unable to compete as he had not recovered in time from his previous head injury. However KNZ sent Reid to&nbsp;provide support for the team, and to&nbsp;experience for the first time the level of competition at a World Karate event.</p>

<p>Interview&nbsp;with Reid by ANZ Sports in the New Zealand Herald:<br />
<a href="https://www.nzherald.co.nz/sport-video/news/video.cfm?c_id=1503077&amp;gal_cid=1503077&amp;gallery_id=196022" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">ANZ Sports Scene: Karate Kid leaving nothing to chance</a></p>

<p>Dean Wiseman looked after our athletes as Team Manager and Head Coach for this event. Sensei Dean brings decades of experience both in New Zealand and Europe so Reid and Isaac were lucky to have him for this event:</p>

<p><em>What a way to end this thrilling trip!&nbsp;Humbled to be part of the Haka at the FISU university world championships closing ceremony in Kobe, Japan.<br />
A huge thanks to the Australian Karate Team for taking part in this war-dance. When we do the haka, we are united, we are one world and that is what FISU is all about.&nbsp;PUKANAAAA!</em></p>
<p><em>Congratulations to Isaac Hoshi for placing 7th in the Individual Male Kata category!</em><br />
<br />
1st round - Beat San Marino 5-0<br />
2nd round - Beat France 3-2<br />
3rd round - Lost to Japan 0-5<br />
Repechage - Lost to Taipei 1-4</p>
<p><strong>Sportdata link:</strong><br />
<a href="https://www.sportdata.org/wkf/set-online/popup_main.php?popup_action=results&amp;vernr=177&amp;active_menu=calendar" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">2018 FISU World University Karate Championship</a></p>',
            'download_link' => 'https://www.sportdata.org/wkf/set-online/popup_main.php?popup_action=results&amp;vernr=177&amp;active_menu=calendar',
            'image_link' => 'phpjk0I7z.jpg',
            'date' => '2018-07-22',
        ]);



        //5
        Result::create([
            'title' => '19TH OCEANIA KARATE CHAMPIONSHIPS & 2018 OCEANIA CUP',
            'slug' => '19TH-OCEANIA-KARATE-CHAMPIONSHIPS-2018-OCEANIA-CUP',
            'content' => '<p>[Photo courtesy of Lucio Ferri]</p>
<p>Karate New Zealand had the honour of hosting the<span>&nbsp;</span><strong>19th Oceania Karate Championships</strong><span>&nbsp;</span>and the 2<strong>018 Oceania Cup</strong>. The 3-day event from<span>&nbsp;</span><strong>18th-20th May</strong>, was held at the Barfoot &amp; Thompson Stadium, Selwyn College Grounds, Kohimarama Road, Auckland. Athletes attended from Fiji, New Caledonia, Tahiti, Nauru and of course, Australia.<br /><br />The Oceania Championships is the continental championships for the Oceania Region. It is recognised and supported by the<span>&nbsp;</span><a href="https://www.wkf.net/" target="_blank" rel="noopener">World Karate Federation</a><span>&nbsp;</span>and is a powerful stepping stone for those that are targeting Olympic Qualification.<br /><br />In addition to the Oceania Championships, the Oceania Cup was run at the same time and is an open event for competitors aged 10 to 13 years and held as part of the continuing development of our younger athletes reflecting the events being held by WKF. This year, Veteran&rsquo;s categories were added to the Oceania Cup to reflect the diversity and gender equality values of<span>&nbsp;</span><a href="http://oceaniakarate.com/" target="_blank" rel="noopener">OKF</a><span>&nbsp;</span>and WKF Karate.<br /><br />We were very lucky to have some fantastic partners who enabled this event to happen. Without them, the event would not have run, and they deserve our gratitude.<span>&nbsp;</span><a href="http://www.qpsport.co.nz/" target="_blank" rel="noopener">QP Sport</a>,<span>&nbsp;</span><a href="https://www.smai.com.au/" target="_blank" rel="noopener">SMAI</a>,<span>&nbsp;</span><a href="https://www.edwardsnz.co.nz/" target="_blank" rel="noopener">Edwards Sound Systems and Lighting</a>,<span>&nbsp;</span><a href="http://lcdmultimedia.co.nz/" target="_blank" rel="noopener">Lasercopy</a>,<span>&nbsp;</span><a href="http://www.fostersignsltd.co.nz/" target="_blank" rel="noopener">Fostersigns</a>, Lucio Ferri (Photographer),<span>&nbsp;</span><a href="http://www.headshotcoffee.com/" target="_blank" rel="noopener">Headshot Coffee</a><span>&nbsp;</span>and<a href="https://www.rydges.com/accommodation/new-zealand/auckland/" target="_blank" rel="noopener"><span>&nbsp;</span>Rydges Hotel</a>. Also thank you to<span>&nbsp;</span><a href="https://sportnz.org.nz/" target="_blank" rel="noopener">Sport NZ</a>, the<span>&nbsp;</span><a href="http://www.olympic.org.nz/" target="_blank" rel="noopener">New Zealand Olympic Committee</a>,<span>&nbsp;</span><a href="http://www.southerntrust.org.nz/" target="_blank" rel="noopener">Southern Trust</a><span>&nbsp;</span>and<span>&nbsp;</span><a href="http://www.pubcharitylimited.org.nz/" target="_blank" rel="noopener">Pub Charity</a><span>&nbsp;</span>for their ongoing support.<br /><br />The opening day consisted of the Senior and Junior (16/17) Individual events. Throughout the day athletes competed in the preliminary rounds with some notable upsets. Prior to the finals, the Opening Ceremony was held where the New Zealand team performed a fantastic haka which was responded to by our Fijian neighbours. Thank you to the Deputy Consul-General of Japan, Mr Yoshihiro Nakayama and the President of<span>&nbsp;</span><a href="http://oceaniakarate.com/" target="_blank" rel="noopener">Oceania Karate Federation</a>, Mr Michael Kassis for opening the event.<br /><br />The finals of the first day were run as a showcase event running only one match at a time so all eyes were on them and the athletes did not disappoint. The hundreds of spectators that watched the tournament throughout the first day were treated to a fantastic display of Kata and Kumite that really showed the level of competition in Oceania is exceptionally high. Video review was introduced for the first time at an OKF event, bringing and added dimension and excitement to the Senior Finals.<br /><br />The second day of competition consisted of the Cadet (14/15), Under 21, and Children&rsquo;s (10/11, 12/13) divisions. The quality of the younger athletes is rising and it was great to see so many young developing athletes, not just emulating their role models, but able to compete alongside them at such a great tournament.<br /><br />The final day of competition ran all the Veteran events as well as the Team events which always makes for a fantastic spectacle. Big congratulations must be given to the Men&rsquo;s and Women&rsquo;s teams from New Zealand who came out on top in two great finals that came down to the wire between ourselves and Australia in both cases. Brendon Running dominating the very last match of the tournament to bring home the Male Team Kumite Gold medal for New Zealand.<br /><br />The feedback from the competitors and guests on the event was full of praise, which we attribute to the hard work and team spirit of all the volunteers from around the country. From tournament officials and marshals, VIP hosts, KNZ merchandise organisation and ticket sales at Reception, the Team managers, Oceania Championship Coaches, Oceania Cup Coaches and Referees. We can\'t thank you all enough! A massive thank you needs to be given to all those who helped in making this such an unbelievable success. THANK YOU!<br /><br />Also special thanks to Ian Basckin who took care of the actual running of the tournament bringing a high level of professionalism to the event, and the Team Physiotherapist - Jason Cheng of<span>&nbsp;</span><span><a href="https://tearophysio.co.nz/" target="_blank" rel="noopener">Te Aro Physiotherapy &amp; Pilates</a>,&nbsp;who provided his services for free for the NZ athletes</span>.&nbsp;And Congratulations to the organising committee of George Glausiuss, Jason Ng, Phil Laing, Rebecca Merrifield and Chris Bennett.&nbsp;</p>
<p><strong>Link to Sportdata:</strong><br /><a href="https://www.sportdata.org/wkf/set-online/popup_main.php?popup_action=results&amp;vernr=146&amp;active_menu=calendar" target="_blank" rel="noopener">19th SENIOR &amp; 18TH CADET JUNIOR U21 OCEANIA KARATE CHAMPIONSHIPS - Results</a>&nbsp;<br /><a href="https://www.sportdata.org/wkf/set-online/popup_main.php?popup_action=medals&amp;vernr=146&amp;active_menu=calendar" target="_blank" rel="noopener">Medal Statistics</a></p>
<p><strong>Link to Photo Albums:</strong><br /><a href="https://www.facebook.com/pg/KarateNZ/photos/?tab=album&amp;album_id=2165552620425209" target="_blank" rel="noopener">Facebook - Day 1 - 18th May</a><br /><a href="https://www.facebook.com/pg/KarateNZ/photos/?tab=album&amp;album_id=2165556537091484" target="_blank" rel="noopener">Facebook - Day 2 - 19th May</a><br /><a href="https://www.facebook.com/pg/KarateNZ/photos/?tab=album&amp;album_id=2165576240422847" target="_blank" rel="noopener">Facebook - Day 3 - 20th May</a><br /><a href="https://lucio.smugmug.com/" target="_blank" rel="noopener">Lucio Ferri - Special: Oceania Karate Championships 2018</a></p>',
            'download_link' => 'https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend',
            'image_link' => 'phpnHEtvq.jpg',
            'date' => '2018-05-31',
        ]);


        //6
        Result::create([
            'title' => 'NEW ZEALAND OPEN 2018',
            'slug' => 'NEW-ZEALAND-OPEN-2018',
            'content' => '<p>The New Zealand Open is an international tournament organised by Karate New Zealand in association with the<span>&nbsp;</span><a href="http://karatenz.co.nz/Regional/Canterbury-Westland/" target="_blank" rel="noopener">Canterbury/Westland Karate</a><span>&nbsp;</span>region.</p>
<p>The 2018 Championships were held on<span>&nbsp;</span><strong>21st-22nd April</strong><span>&nbsp;</span>at the Pioneer Sports Stadium in Christchurch.<br /><strong>Day 1</strong><span>&nbsp;</span>was for competitors 13 years and Under<br /><strong>Day 2<span>&nbsp;</span></strong>was for competitors 14 years and Over</p>
<p><em>This year\'s New Zealand Open was the biggest with 268 competitors, which made for a long but very exciting event. As well as having participants nationwide, there were a few from New Caledonia and France.</em></p>
<p><em>A record number of Referees were working under the recently released<span>&nbsp;</span><a href="http://karatenz.co.nz/Governance/Referees/Referee-Council-Policies/" target="_blank" rel="noopener">Referee Council&rsquo;s Accreditation Policy</a>. which provides guidance and structure around what is required for qualification to judge and referee at KNZ tournaments.</em></p>
<p><em>Highlights included the Senior Male and Female Open divisions in both Kata and Kumite. The quality of the players&rsquo; performance was noticeably higher than previous events. Partly due to the upcoming 19th Oceania Karate Championships that will be hosted by Karate NZ in Auckland on 18-20<sup>th</sup><span>&nbsp;</span>May 2018.&nbsp; Much interested has been generated by the inclusion of Karate at the 2020 Olympic Games in Tokyo, Japan.</em></p>
<p><em>Thank you to all the volunteers from Canterbury Westland Karate, Ross Meynell and Rob Batt, plus those from the&nbsp;<a href="http://karatenz.co.nz/Regional/Auckland-and-Northland/" target="_blank" rel="noopener">Auckland</a>&nbsp;region.</em></p>
<p><strong><em>Ouss,</em></strong><br /><strong><em>George Glausiuss</em></strong><br /><strong><em>Chairperson for Canterbury Westland of KNZ</em></strong><br /><br /></p>
<p><strong>Links to Sportdata:<br /></strong><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3823&amp;active_menu=calendar" target="_blank" rel="noopener">Results of New Zealand Open 2018</a>&nbsp;<br /><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=medals&amp;vernr=3823&amp;active_menu=calendar" target="_blank" rel="noopener">Medals by Club</a></p>',
            'download_link' => 'https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend',
            'image_link' => 'phpcRV9ci.jpeg',
            'date' => '2018-05-31',
        ]);


        //6
        Result::create([
            'title' => 'RESULTS 24TH WORLD SENIOR CHAMPIONSHIPS',
            'slug' => 'RESULTS-24TH-WORLD-SENIOR-CHAMPIONSHIPS',
            'content' => '<p>The New Zealand Open is an international tournament organised by Karate New Zealand in association with the<span>&nbsp;</span><a href="http://karatenz.co.nz/Regional/Canterbury-Westland/" target="_blank" rel="noopener">Canterbury/Westland Karate</a><span>&nbsp;</span>region.</p>
<p>The 2018 Championships were held on<span>&nbsp;</span><strong>21st-22nd April</strong><span>&nbsp;</span>at the Pioneer Sports Stadium in Christchurch.<br /><strong>Day 1</strong><span>&nbsp;</span>was for competitors 13 years and Under<br /><strong>Day 2<span>&nbsp;</span></strong>was for competitors 14 years and Over</p>
<p><em>This year\'s New Zealand Open was the biggest with 268 competitors, which made for a long but very exciting event. As well as having participants nationwide, there were a few from New Caledonia and France.</em></p>
<p><em>A record number of Referees were working under the recently released<span>&nbsp;</span><a href="http://karatenz.co.nz/Governance/Referees/Referee-Council-Policies/" target="_blank" rel="noopener">Referee Council&rsquo;s Accreditation Policy</a>. which provides guidance and structure around what is required for qualification to judge and referee at KNZ tournaments.</em></p>
<p><em>Highlights included the Senior Male and Female Open divisions in both Kata and Kumite. The quality of the players&rsquo; performance was noticeably higher than previous events. Partly due to the upcoming 19th Oceania Karate Championships that will be hosted by Karate NZ in Auckland on 18-20<sup>th</sup><span>&nbsp;</span>May 2018.&nbsp; Much interested has been generated by the inclusion of Karate at the 2020 Olympic Games in Tokyo, Japan.</em></p>
<p><em>Thank you to all the volunteers from Canterbury Westland Karate, Ross Meynell and Rob Batt, plus those from the&nbsp;<a href="http://karatenz.co.nz/Regional/Auckland-and-Northland/" target="_blank" rel="noopener">Auckland</a>&nbsp;region.</em></p>
<p><strong><em>Ouss,</em></strong><br /><strong><em>George Glausiuss</em></strong><br /><strong><em>Chairperson for Canterbury Westland of KNZ</em></strong><br /><br /></p>
<p><strong>Links to Sportdata:<br /></strong><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3823&amp;active_menu=calendar" target="_blank" rel="noopener">Results of New Zealand Open 2018</a>&nbsp;<br /><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=medals&amp;vernr=3823&amp;active_menu=calendar" target="_blank" rel="noopener">Medals by Club</a></p>',
            'download_link' => '#',
            'image_link' => 'phpcRV9ci.jpeg',
            'date' => '2018-05-31',
        ]);

        //6
        Result::create([
            'title' => 'RESULTS 24TH WORLD SENIOR CHAMPIONSHIPS',
            'slug' => 'RESULTS-24TH-WORLD-SENIOR-CHAMPIONSHIPS',
            'content' => '<div>
<p>November saw our New Zealand athletes competing at the Senior World Championships in Madrid, Spain. 8 athletes competed in individual events along with the Senior Female Kumite Team with great results showing our competitiveness at top level World championships. Over half of the team made it past the first round with Andrea Anacan securing our best placing ever in Senior World&#39;s making it to the Quarter Finals and a top 8 finish.</p>

<p>Congratulations to all athletes.</p>

<ul>
	<li>Andrea Anacan&nbsp; Quarter Finals 7th Placing&nbsp;Female Kata</li>
	<li>Barney Gill&nbsp; 1st round -67kg Male Kumite</li>
	<li>Isaac Hoshi&nbsp; 2nd round Male Kata</li>
	<li>Marina Monk&nbsp; 3rd round -61kg Female Kumite</li>
	<li>Alison Oliver&nbsp; 1st round -55kg Female Kumite</li>
	<li>Amy Thomason&nbsp; 2nd round -68kg Female Kumite</li>
	<li>Shane Tregidga&nbsp; 1st round -84kg Male Kumite</li>
	<li>Bex Watkin&nbsp; 1st round -50kg Female Kumite</li>
	<li>Senior Female Team Kumite 2nd round (Marina Monk, Alison Oliver, Amy Thomason, Bex Watkin)</li>
</ul>

<p>Downloads</p>

<p><a href="https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank" title="Tournament results">Tournament results</a></p>
</div>',
            'download_link' => 'https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend',
            'image_link' => 'php8Nk42n.jpg',
            'date' => '2018-11-12',
        ]);

        //7
        Result::create([
            'title' => 'NEW ZEALAND OPEN 2018',
            'slug' => 'NEW-ZEALAND-OPEN-2018',
            'content' => '<p>The 2018 Northland Open tournament was held at the ASB Centre in Whangarei on<strong><span>&nbsp;</span>8th April</strong>, and organised by&nbsp;<a href="http://karatenz.co.nz/Regional/Auckland-and-Northland/" target="_blank" rel="noopener">Karate Auckland</a>.&nbsp;</p>
<p>Jason Ng - Chairperson for Karate Auckland -&nbsp;gave the opening address at the start of the tournament. There were also competitors from Auckland clubs, as well as WKF, National and Regional Referees and Judges.</p>
<p>Thank you to all those who helped and provided support - with special mention to&nbsp;Jyoshinmon NZ Karate-Do&nbsp;who volunteered to bring mats and monitors from their own dojo for the event, and to Sensei Chris Bennett - KNZ Secretary General - who provided support for Sportdata details of the tournament.</p>
<p><strong>Full tournament results on Sportdata -&nbsp;<br /></strong><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3826&amp;active_menu=calendar" target="_blank" rel="noopener">Northland Open 2018</a></p>',
            'download_link' => 'https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend',
            'image_link' => 'phpvL66UO.jpg',
            'date' => '2018-04-09',
        ]);

        //8
        Result::create([
            'title' => 'CENTRAL NORTH ISLAND CHAMPIONSHIPS 2018',
            'slug' => 'CENTRAL-NORTH-ISLAND-CHAMPIONSHIPS-2018',
            'content' => '<p>The<span>&nbsp;</span><strong>2018 CNI Karate Championships<span>&nbsp;</span></strong>was held in Tauranga on the<span>&nbsp;</span><strong>18th March</strong>, which was organised by<span>&nbsp;</span><a href="http://karatenz.co.nz/Regional/Central-North-Island/" target="_blank" rel="noopener">Central North Island</a><span>&nbsp;</span>region of Karate New Zealand.</p>
<p>It was a very good turn out with participants from places such as Hamilton, Auckland, Upper Hutt and Palmerston North.</p>
<p><strong>Downloads</strong><br /><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3772&amp;active_menu=calendar" target="_blank" rel="noopener">CNI Karate Championships 2018 - Results</a><br /><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=medals&amp;vernr=3772&amp;active_menu=calendar" target="_blank" rel="noopener">Medals By Club</a></p>',
            'download_link' => 'https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3772&amp;active_menu=calendar',
            'image_link' => 'phpJJx3Py.jpg',
            'date' => '2018-03-25',
        ]);


        //9
        Result::create([
            'title' => 'AUCKLAND OPEN 2017',
            'slug' => 'AUCKLAND-OPEN-2017',
            'content' => '<p>Auckland Open Karate Championships was held on&nbsp;<strong>20th August 2017&nbsp;</strong>at the&nbsp;Auckland Netball Centre, Stonefields, Auckland. New medals were commissioned by Karate Auckland (see photo below).</p>
<p><em>It was great to see support for this tournament with competitors and KNZ Officials from other regions as far as Northland, Hamilton, Wellington, Christchurch, Queenstown and Dunedin,</em></p>
<p><em>We would like to thank the volunteers who helped to set up and clear away the venue.</em></p>
<p><em>Looking forward to seeing you all at the next event!</em></p>
<p><em><strong>Jason Ng</strong></em><br /><em><strong>Chairman Karate Auckland<br /></strong></em></p>
<p><strong><br />Downloads<br /></strong><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3292&amp;active_menu=calendar" target="_blank" rel="noopener">Results by Competitor</a><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3093&amp;active_menu=calendar" target="_blank" rel="noopener"><br /></a><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=medals&amp;vernr=3292&amp;active_menu=calendar" target="_blank" rel="noopener">Medals by Club</a></p>',
            'download_link' => 'https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3292&amp;active_menu=calendar',
            'image_link' => 'phpENzAw3.jpg',
            'date' => '2017-08-22',
        ]);

        //10
        Result::create([
            'title' => 'NZ NATIONAL CHAMPIONSHIPS 2017',
            'slug' => 'NZ-NATIONAL-CHAMPIONSHIPS-2017',
            'content' => '<p>The 2017 New Zealand National Karate Championships was held at the Te Rauparaha Arena, Porirua, Wellington.on<span>&nbsp;</span><strong>15th-16th July.</strong></p>
<p>With the pending announcement by the International Olympic Committee of the inclusion of karate in the 2020 Olympic Games in Tokyo, participation at the Nationals was even larger than in 2016.</p>
<p><span><strong>Day 1 -</strong>&nbsp;14yrs+ Cadets, Juniors, Seniors, Veterans, Super Veterans</span></p>
<p><strong>Day 2 -</strong>&nbsp;6-13yrs, National Secondary Schools competition in the afternoon</p>
<p><strong>Downloads<br /></strong><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3277&amp;active_menu=calendar" target="_blank" rel="noopener">New Zealand National Championships 2017 - Results&nbsp;</a>&nbsp;</p>',
            'download_link' => 'https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=3277&amp;active_menu=calendar',
            'image_link' => 'phpkbgH2M.jpeg',
            'date' => '2017-07-20',
        ]);
    }
}
