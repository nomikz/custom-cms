<?php

use App\Article;
use App\Tag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {


        //1
        Article::create([
            'title' => 'BROADCASTING OF JUNIOR WORLD CHAMPIONSHIPS',
            'slug' => 'BROADCASTING-OF-JUNIOR-WORLD-CHAMPIONSHIPS',
            'content' => '<p>WKF are streaming all of the medal bouts of the next World Cadet, Junior & U21 Championship to be held in Chile from October 23 to 27 live and free on the WKF YouTube channel.</p><a href=""https://www.youtube.com/user/WKFKarateWorldChamps"" target=""_blank"">https://www.youtube.com/user/WKFKarateWorldChamps</a>"',
            'date' => '2019-10-09',
            'image_link' => 'phpbEZGqp.png',
            'tag' => 'Competition'
        ]);

        //2
        Article::create([
            'title' => 'TEAM TO JUNIOR WORLD CHAMPIONSHIPS	Competition',
            'slug' => 'TEAM-TO-JUNIOR-WORLD-CHAMPIONSHIPS-Competition',
            'content' => '<div>
<p><strong>Head of Delegation &amp; Team Manager</strong>&nbsp;&ndash; Grant Holland</p>

<p><strong>Coaches&nbsp;</strong>&ndash; Braedyn Birss, Leonard Kong, Binh Nyugen</p>

<p><strong>Referees&nbsp;</strong>&ndash; Johnny Ling, Dhammika Ariyaratna</p>

<p><strong>Competitors &ndash;Kata</strong></p>

<ul>
	<li>U21 Female - Holly Wigg</li>
	<li>U21 Male Kata - Elian Pagililawan</li>
	<li>Junior Female - Melissa Dunn</li>
	<li>Junior Male &ndash; Simon Sung</li>
	<li>Cadet Female &ndash; Ella Soper</li>
	<li>Cadet Male &ndash; Rui Ayama</li>
</ul>

<p><strong>Kumite &ndash;</strong></p>

<ul>
	<li>U21, Over 68kg &ndash; Jade Taylor</li>
	<li>U21, Under 84kg &ndash; Raukawa Jefferies</li>
	<li>U21, Under 68kg &ndash; Holly Wigg</li>
	<li>U21, Under 75kg &ndash; Kostya Kechin</li>
	<li>U21, Under 61kg &ndash; Juliet McLachlan</li>
	<li>U21, Under 67kg &ndash; Liam Singer</li>
	<li>U21, Under 55kg &ndash; Nina Edgar</li>
	<li>U21, Under 60kg &ndash; Chase Hennessey</li>
	<li>U21, Under 50kg &ndash; Britney Aldridge</li>
	<li>Junior Under 59kg &ndash; Jodie Batt</li>
	<li>Junior Male Under 76kg &ndash; Sean Chen</li>
	<li>Junior Under 53kg &ndash; Melissa Dunn</li>
	<li>Junior Over 68kg Connor Ashdown</li>
	<li>Junior Under 48kg &ndash; Lauren Parsons</li>
	<li>Junior Under 68kg &ndash; Chiemu Iioka</li>
	<li>Junior Under 55kg &ndash; Grant Zent</li>
	<li>Cadet Under 47kg &ndash; Lola Hennessey</li>
	<li>Cadet Over 70kg &ndash; D&rsquo;Artagnan Gould</li>
	<li>Cadet Under 70kg &ndash; Sam Crawford</li>
	<li>Cadet, Under 52kg &ndash; Kingi Tana</li>
</ul>
</div>',
            'date' => '2019-09-24',
            'image_link' => 'phpVMdftH.jpg',
            'tag' => 'Competition'
        ]);

        //3
        Article::create([
            'title' => 'SENIOR OCEANIA 2019 - TEAM ANNOUNCEMENT',
            'slug' => 'SENIOR-OCEANIA-2019-TEAM-ANNOUNCEMENT',
            'content' => '<div>
<p>Congratulations to all athletes who have been selected for the 2019 Senior Oceania Championships. Thank you to all athletes who applied this year. The job of the selectors is not easy.</p>

<p>If you have any questions about the Selections, please direct your emails to&nbsp;<a href="mailto:admin@karatenz.org.nz" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;">admin@karatenz.org.nz</a>.</p>

<h2><br />
SENIOR OCEANIA CHAMPIONSHIPS TEAM - 2019</h2>

<h3>KATA</h3>

<table border="0" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; max-width:100%; width:750px">
	<tbody>
		<tr>
			<td style="width:375px">
			<p>&nbsp;</p>

			<p><strong>Senior Male<strong>&nbsp;Kata</strong>:</strong></p>

			<p>1. Nicholas Rowsby<br />
			2. Issac Hoshi</p>
			</td>
			<td style="width:375px">
			<p><strong>Senior Female<strong>&nbsp;Kata</strong>:</strong></p>

			<p>1. Andrea Anacan<br />
			2. Holly Wigg</p>
			</td>
		</tr>
	</tbody>
</table>

<h3><br />
KUMITE</h3>

<table border="0" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; max-width:100%; width:750px">
	<tbody>
		<tr>
			<td style="width:375px">
			<p>&nbsp;</p>

			<p><strong>Senior Male Kumite:</strong></p>

			<p><br />
			<strong>-60kg:</strong><br />
			1. Zak Scott</p>

			<p><strong>-67kg:</strong><br />
			1. Amariah Gumbeze<br />
			2. Barney Gill</p>

			<p><strong>-75kg:</strong><br />
			1. Kostya Kechin</p>
			</td>
			<td style="width:375px">&nbsp;<strong>Senior Female Kumite:</strong>
			<p><br />
			<strong>-50kg:</strong><br />
			1. Britney Aldrige</p>

			<p><strong>-55kg:</strong><br />
			1. Sian Scott</p>

			<p><strong>-61kg:</strong><br />
			1. Juliet McLachlan<br />
			2. Suzanne Yee</p>

			<p><strong>-68kg:</strong><br />
			1. Amy Thomason<br />
			2. Marina Monk</p>

			<p><strong>68+kg:</strong><br />
			1. Jade Taylor<br />
			2. Charlotte Munroe</p>

			<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>

<h3>COACHES:</h3>

<p>Duane Monk, Braedyn Birss</p>

<h3>MANAGER:</h3>

<p>George Glausiuss (<a href="mailto:gglausiuss@karatenz.org.nz" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;">gglausiuss@karatenz.org.nz</a>)</p>

<div>&nbsp;</div>
</div>

<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" style="box-sizing: border-box; display: inline-block; position: relative; max-width: 100%; color: rgb(47, 47, 47); font-family: Muli, sans-serif; background-color: rgb(247, 247, 247); width: 750px;">&nbsp;</div>',
            'date' => '2019-03-22',
            'image_link' => 'phpixcQrs.png',
            'tag' => 'Competition'
        ]);

        //4
        Article::create([
            'title' => 'NATIONAL SELECTION COMMITTEE ANNOUNCED',
            'slug' => 'NATIONAL-SELECTION-COMMITTEE-ANNOUNCED',
            'content' => '<div>
<p>The Karate NZ National Selection Committee has been confirmed for 2019.</p>

<p><strong>Convenor -&nbsp;</strong>Leonard Kong</p>

<p><strong>Selectors&nbsp;</strong>(alphabetical order)<strong>&nbsp;-</strong></p>

<ul>
	<li>David Bennett</li>
	<li>Braedyn Birss</li>
	<li>Johnny Ling</li>
	<li>Simon Merrick</li>
	<li>Duane Monk</li>
	<li>Binh Nguyen</li>
	<li>Andy Roosen</li>
	<li>Sophie Saville</li>
</ul>

<p>Congratulations on your appointment and thank you for your commitment.</p>

<p>Announcements of New Zealand Representatives will be forthcoming including the upcoming Senior Oceania Championships in Sydney.&nbsp;</p>
</div>',
            'date' => '2019-03-08',
            'image_link' => 'phpPx5P12.png',
            'tag' => 'Competition'
        ]);



        //5
        Article::create([
            'title' => 'AIMING FOR TOKYO OLYMPICS 2020',
            'slug' => 'AIMING-FOR-TOKYO-OLYMPICS-2020',
            'content' => '<div>
<h1>TINY BLACK BELT STRIKING OUT FOR OLYMPIC FIRST</h1>

<p>At the age of four, Andrea Anacan was given the choice of a karate lesson or a ballet class.</p>

<p>The little girl was so keen to try the martial art, the sensei made an exception for her, waiving the normal starting age of five. &nbsp;</p>

<p>Anacan, now 28, has no regrets she selected karate, even though she&rsquo;s had her share of hurdles and pain to overcome since.</p>

<p>She&rsquo;s now knocking on the door of Olympic selection, as karate makes its debut at the 2020 Tokyo games.</p>

<p>Anacan&rsquo;s voice lights up when she talks about her sport. &ldquo;It makes me feel good. It&rsquo;s the discipline aspect that keeps me going &ndash; keeping my mind active and my body strong as well,&rdquo; the Philippines-born Aucklander says.</p>

<p>The Anacan family immigrated to New Zealand when the now black belt was 12 years old.</p>

<p>&ldquo;At the time in the Philippines there was a huge spike in kidnapping, so my parents decided to move, and we were led to New Zealand,&rdquo; she says.</p>

<p>But in a new country, Anacan wasn&rsquo;t sure if she wanted to continue in the sport.</p>

<p>&ldquo;I had a bumpy ride when I arrived here because I had such a great relationship with my previous sensei. I told my parents I wanted to quit,&rdquo; she says.</p>

<p>Anacan&rsquo;s parents bargained with her that she try the dojo they&rsquo;d found for her. If it didn&rsquo;t work out, they said, at least she&rsquo;d given it a go.</p>

<p>She listened to her parents, and has been with the Shotokan Shitoryi Karate Association ever since. Sensei Johnny Ling has been hugely influential in her career.</p>

<p>&ldquo;I&rsquo;ve been with Sensei since I was 14 so he knows my movement better than I do,&rdquo; she says. &ldquo;He&rsquo;s very open. He has a dojo at his house and it&rsquo;s always open when you arrive, ready to train.&rdquo;</p>

<p>Anacan competes in the karate discipline of kata, the performance side of karate, as opposed to kumate, the fighting discipline.</p>

<p>&ldquo;I used to do kumate but I never reached 5ft, so my height prevented me from going further.&rdquo; Anacan is just 4ft 11in (1.5m) tall.</p>

<p>Her sensei told her that if she couldn&rsquo;t reach her opponent, she would get injured.</p>

<p>So at 15, Anacan focused on kata &ndash; detailed patterns of movement - and hasn&rsquo;t looked back.</p>

<p><img alt="" src="https://res.cloudinary.com/cognitives/image/upload/dpr_auto,f_auto,fl_lossy,q_auto/sdkbzznc9ho2jjzosliv" style="border:0px; box-sizing:border-box; height:691px; vertical-align:middle; width:493px" /></p>

<p><em>After shoulder surgery, Anacan finished seventh at last year&#39;s karate world championships. Photo:&nbsp;James Carrett, Rowdy Partners</em></p>

<p>She&rsquo;s won a long string of national titles, but her best performance on the global stage came last year at the karate senior world championships in Madrid. She made the quarterfinals in kata, finishing seventh - the best-ever placing by a New Zealander at a world senior championship.</p>

<p>It was significant for Anacan, as she&rsquo;d had major shoulder surgery in 2017 and had seriously considered retiring from the sport because of her injury.</p>

<p>&ldquo;I kept dislocating my shoulder to the point where I was dislocating it in my sleep,&rdquo; she says. &ldquo;I&rsquo;d be in a lot of pain, but I was able to relocate it.&rdquo;</p>

<p>A few months down the track from her surgery, she met up with her Ling at his dojo with her arm in her sling.</p>

<p>When she entered, her teammates noticed she was shaking; at this point she realised she really missed karate and wanted to make a return.</p>

<p>Together Anacan and Ling mapped out a plan, re-entering competition at last year&rsquo;s Oceania continental championships.</p>

<p>She decided that her performance at those championships would determine whether she would carry on competing. &ldquo;I won, so I thought &lsquo;I&rsquo;ll just have to keep going&rsquo;,&rdquo; she says.</p>

<p>When karate makes its debut at the Tokyo 2020 Olympics, Anacan wants to be there.</p>

<p>&ldquo;Now my goal is to qualify, and then obviously I want to get an Olympic medal,&rdquo; she says.</p>

<p>To qualify, Anacan will need to accumulate points from tournaments on the World Karate Federation calendar, with the aim of being the No. 1 Oceania woman across both kata and kumate. Every continental region is allowed to send one female and one male karateka (athlete).</p>

<p>Anacan is targeting the Oceania championships in Sydney in April and the Karate 1 (K1) premier league tournaments held throughout the world.</p>

<p>In the kata discipline, Anacan will perform a series of movements with the same intensity as if she were fighting. She does the Chatanyara Kushanku style of kata, performing different sequences depending on her opponent.</p>

<p>&ldquo;You need to be strategic about what kata you do based on your opponent&rsquo;s strengths and weaknesses. We know if I&rsquo;m up against a really strong girl, I&rsquo;ll pick a more athletic kata to try and beat her,&rdquo; she says.</p>

<p>Kata athletes are given a score determined by judges which is broken down into 30 percent athletic and 70 percent technical components.</p>

<p>Anacan trains five days a week, fitting it in around the work she does in her family&rsquo;s electrical repair business, Teletech.</p>

<p>Her training is a combination of strength and cardiovascular work, as well as karate technique. &ldquo;We rehearse our movements for hours, but no day is the same. Our training is very individualized depending on what Sensei thinks we need,&rdquo; she says.</p>

<p>Now that karate has full Olympic status, Anacan says there&rsquo;s huge excitement in the global karate community.</p>

<p>&ldquo;We&rsquo;ve dreamed about being in the Olympics for a long time, so it means a lot to the community. It also brings pressure on the athletes involved because a lot of people dream of being at the Olympics and they want to be there,&rdquo; she says.</p>

<p>&ldquo;I think as a sporty kid, I always wanted to go to the Olympics, so for me to now have the potential to do so is pretty cool.&rdquo;</p>

<p>Alongside training and competing in karate, Anacan teaches young karate students, which has helped her immensely as a person and an athlete.</p>

<p>&ldquo;I would like to think I will never retire from karate,&rdquo; she says. &ldquo;If I can&rsquo;t do it physically, I&rsquo;ll still have my brain and my knowledge to pass on.&rdquo;</p>

<p>&nbsp;</p>

<p>Published with permission of the reporter, Sarah Cowley.&nbsp;</p>

<p>&nbsp;</p>

<p>Link to News Room article::</p>

<p><a href="https://www.newsroom.co.nz/2019/02/17/446705/tiny-black-belt-striking-out-for-olympic-first" style="box-sizing: border-box; background: transparent; color: rgb(196, 37, 10); outline: 0px;" target="_blank" title="News Room Article">https://www.newsroom.co.nz/2019/02/17/446705/tiny-black-belt-striking-out-for-olympic-firs</a></p>
</div>',
            'date' => '2019-02-02',
            'image_link' => 'phpxf3iFA.jpg',
            'tag' => 'Competition'
        ]);



        //6
        Article::create([
            'title' => 'NATIONAL TRAINING SQUAD APPLICATIONS FOR 2019',
            'slug' => 'NATIONAL-TRAINING-SQUAD-APPLICATIONS-FOR-2019',
            'content' => '<div>
<p>Dear Athletes and Coaches,</p>

<p><strong>Applications are now open for the NZ National Training Squad for 2019.</strong></p>

<ol>
	<li>Forms have been emailed out and are available online&nbsp;<strong><a href="http://karatenz.co.nz/Global/News/2019/KNZ%20National%20Squad%20Application%20-%202019.pdf" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">HERE</a></strong></li>
	<li>Forms are to be returned to&nbsp;<a href="mailto:admin@karatenz.org.nz" style="box-sizing: border-box; background: transparent; color: rgb(220, 42, 11); text-decoration-line: none;" target="_blank">admin@karatenz.org.nz</a>&nbsp;by 23 February 2019</li>
	<li>Selection Committee to review applications (date TBC</li>
	<li>Team named (date TBC)</li>
</ol>
</div>',
            'date' => '2019-02-17',
            'image_link' => 'phpq1cnvK.jpg',
            'tag' => 'Competition'
        ]);



        //7
        Article::create([
            'title' => 'NATIONAL TRAINING SQUAD APPLICATIONS FOR 2019',
            'slug' => 'NATIONAL-TRAINING-SQUAD-APPLICATIONS-FOR-2019',
            'content' => '<div>
<p>Dear Athletes and Coaches,</p>
<p><strong>Applications are now open for the NZ National Training Squad for 2019.</strong></p>
<ol>
<li>Forms have been emailed out and are available online&nbsp;<strong><a href="http://karatenz.co.nz/Global/News/2019/KNZ%20National%20Squad%20Application%20-%202019.pdf" target="_blank" rel="noopener">HERE</a></strong></li>
<li>Forms are to be returned to&nbsp;<a href="mailto:admin@karatenz.org.nz" target="_blank" rel="noopener">admin@karatenz.org.nz</a>&nbsp;by 23 February 2019</li>
<li>Selection Committee to review applications (date TBC</li>
<li>Team named (date TBC)</li>
</ol>
</div>',
            'date' => '2020-02-17',
            'image_link' => 'phptSHm4F.jpg',
            'tag' => 'Competition'
        ]);



        //8
        Article::create([
            'title' => 'DAN GRADING HELD IN CHRISTCHURCH',
            'slug' => 'DAN-GRADING-HELD-IN-CHRISTCHURCH',
            'content' => '<div>
<p>Dear Athletes and Coaches,</p>
<p><strong>Applications are now open for the NZ National Training Squad for 2019.</strong></p>
<ol>
<li>Forms have been emailed out and are available online&nbsp;<strong><a href="http://karatenz.co.nz/Global/News/2019/KNZ%20National%20Squad%20Application%20-%202019.pdf" target="_blank" rel="noopener">HERE</a></strong></li>
<li>Forms are to be returned to&nbsp;<a href="mailto:admin@karatenz.org.nz" target="_blank" rel="noopener">admin@karatenz.org.nz</a>&nbsp;by 23 February 2019</li>
<li>Selection Committee to review applications (date TBC</li>
<li>Team named (date TBC)</li>
</ol>
</div>',
            'date' => '2020-02-16',
            'image_link' => 'phpV8Bo7l.jpg',
            'tag' => 'Competition'
        ]);



        //9
        Article::create([
            'title' => 'RESULTS 24TH WORLD SENIOR CHAMPIONSHIPS',
            'slug' => 'RESULTS-24TH-WORLD-SENIOR-CHAMPIONSHIPS',
            'content' => '<p>November saw our New Zealand athletes competing at the Senior World Championships in Madrid, Spain. 8 athletes competed in individual events along with the Senior Female Kumite Team with great results showing our competitiveness at top level World championships. Over half of the team made it past the first round with Andrea Anacan securing our best placing ever in Senior World\'s making it to the Quarter Finals and a top 8 finish.</p>
<p>Congratulations to all athletes.</p>
<ul>
<li>Andrea Anacan<span>&nbsp;</span><span> </span>Quarter Finals 7th Placing&nbsp;Female Kata</li>
<li>Barney Gill<span>&nbsp;</span><span> </span>1st round -67kg Male Kumite</li>
<li>Isaac Hoshi<span>&nbsp;</span><span> </span>2nd round Male Kata</li>
<li>Marina Monk<span>&nbsp;</span><span> </span>3rd round -61kg Female Kumite</li>
<li>Alison Oliver<span>&nbsp;</span><span> </span>1st round -55kg Female Kumite</li>
<li>Amy Thomason<span>&nbsp;</span><span> </span><span> </span>2nd round -68kg Female Kumite</li>
<li>Shane Tregidga<span>&nbsp;</span><span> </span><span> </span>1st round -84kg Male Kumite</li>
<li>Bex Watkin<span>&nbsp;</span><span> </span>1st round -50kg Female Kumite</li>
<li>Senior Female Team Kumite<span> 2nd round (Marina Monk, Alison Oliver, Amy Thomason, Bex Watkin)</span></li>
</ul>
<p>Downloads</p>
<p><a title="Tournament results" href="https://www.sportdata.org/wkf/set-online/veranstaltung_info_main.php?active_menu=calendar&amp;vernr=188&amp;ver_info_action=catmitlist#a_eventheadend" target="_blank" rel="noopener">Tournament results</a></p>',
            'date' => '2020-02-16',
            'image_link' => 'phpjBuIfN.jpg',
            'tag' => 'Competition'
        ]);



        //10
        Article::create([
            'title' => 'SENIOR WORLD CHAMPIONSHIPS TEAM NAMED',
            'slug' => 'SENIOR-WORLD-CHAMPIONSHIPS-TEAM-NAMED',
            'content' => '<div>
<p>Congratulations to the 9 athletes who have been selected to represent New Zealand at the upcoming Senior World Championships in Madrid, Spain. The tournament will be held from the 6th November to the 11th November this year.</p>
<ul>
<li>Alison Oliver - Female Individual Kumite -55Kg</li>
<li>Amy Thomason - Female Individual Kumite -68Kg</li>
<li>Andrea Anacan - Female Individual Kata</li>
<li>Barney Gill - Male Individual Kumite -67Kg</li>
<li>Isaac Hoshi - Male Individual Kata</li>
<li>Marina Monk - Female Individual Kumite -61Kg</li>
<li>McKenzie Tuala-Pine - Female Individual Kumite +68Kg</li>
<li>Rebecca Watkin - Female Individual Kumite -50Kg</li>
<li>Shane Tregidga - Male Individual Kumite -84Kg</li>
</ul>
<p>We wish the team the best of luck!</p>
</div>',
            'date' => '2018-09-03',
            'image_link' => 'phpoEveJU.jpg',
            'tag' => 'Competition'
        ]);



        //11
        Article::create([
            'title' => 'AUCKLAND OPEN 2018',
            'slug' => 'AUCKLAND-OPEN-2018',
            'content' => '<p><strong>Auckland Open Karate Championships<span>&nbsp;</span></strong>was held on&nbsp;<strong>19th August 2018&nbsp;</strong>at the&nbsp;Auckland Netball Centre, Stonefields.&nbsp;</p>
<p>There were competitors from not only outside Auckland such as Hamilton, Tauranga and Wellington, but also from Australia and New Caledonia.</p>
<p><strong>Downloads<br /></strong><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4026&amp;active_menu=calendar" target="_blank" rel="noopener">Tournament Results</a>&nbsp;<br /><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=medals&amp;vernr=4026&amp;active_menu=calendar" target="_blank" rel="noopener">Medals by Club</a></p>',
            'date' => '2018-08-20',
            'image_link' => 'phpliONPT.jpg',
            'tag' => 'Competition'
        ]);



        //12
        Article::create([
            'title' => 'NATIONAL SECONDARY SCHOOLS CHAMPIONSHIPS 2018',
            'slug' => 'NATIONAL-SECONDARY-SCHOOLS-CHAMPIONSHIPS-2018',
            'content' => '<div>
<p>The<span>&nbsp;</span><strong>2018 NZ National Secondary Schools Karate Championships</strong><span>&nbsp;</span>was held in conjunction with the<span>&nbsp;</span><a href="http://karatenz.co.nz/News/News/2018/08/Karate-Auckland-Open-2018/" target="_blank" rel="noopener">Auckland Open</a><span>&nbsp;</span>international tournament on<span>&nbsp;</span><strong>19th August</strong><span>&nbsp;</span>at the&nbsp;<span>Auckland Netball Centre, Stonefields.</span></p>
<p><strong><span>Results</span><br /></strong><span><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4028&amp;active_menu=calendar" target="_blank" rel="noopener">New Zealand National Secondary Schools 2018</a></span></p>
</div>',
            'date' => '2018-08-20',
            'image_link' => 'phpThnkok.jpg',
            'tag' => 'Competition'
        ]);



        //13
        Article::create([
            'title' => 'NATIONAL SECONDARY SCHOOLS CHAMPIONSHIPS 2018',
            'slug' => 'NATIONAL-SECONDARY-SCHOOLS-CHAMPIONSHIPS-2018',
            'content' => '<div>
<p>The<span>&nbsp;</span><strong>2018 NZ National Secondary Schools Karate Championships</strong><span>&nbsp;</span>was held in conjunction with the<span>&nbsp;</span><a href="http://karatenz.co.nz/News/News/2018/08/Karate-Auckland-Open-2018/" target="_blank" rel="noopener">Auckland Open</a><span>&nbsp;</span>international tournament on<span>&nbsp;</span><strong>19th August</strong><span>&nbsp;</span>at the&nbsp;<span>Auckland Netball Centre, Stonefields.</span></p>
<p><strong><span>Results</span><br /></strong><span><a href="https://www.sportdata.org/karate/set-online/popup_main.php?popup_action=results&amp;vernr=4028&amp;active_menu=calendar" target="_blank" rel="noopener">New Zealand National Secondary Schools 2018</a></span></p>
</div>',
            'date' => '2018-08-20',
            'image_link' => 'phpwGBzcA.jpg',
            'tag' => 'Competition'
        ]);



        //14
        Article::create([
            'title' => 'CENTRAL NORTH ISLAND CHAMPIONSHIPS 2020 TOURNAMENT POSTPONED',
            'slug' => 'CENTRAL-NORTH-ISLAND-CHAMPIONSHIPS-2020-TOURNAMENT-POSTPONED',
            'content' => '<p>Waikato Karate regrets to announce that we are postponing the Central North Island Karate Championships 2020 tournament scheduled for Sunday 22nd March 2020 in Hamilton. Emergency services, St John’s is unable to attend the event and coupled with the concern of Covid-19, we are being proactive in our stance. We apologise for any inconvenience this may cause.
We would like to thank those clubs that entered their students, and to the officials and the referees for their support leading up to this day. Refunds to players will be made available soon via your club.</p>',
            'date' => '2020-03-16',
            'image_link' => 'phpb2KGdC.png',
            'tag' => 'Announcement'
        ]);



        //15
        Article::create([
            'title' => 'Tactics and Strategy for Karate Dojo\'s re Covid-19',
            'slug' => 'Tactics-and-Strategy-for-Karate-Dojo\'s-re-Covid-19',
            'content' => '<p>I appreciate if people are anything like me, you are overloaded with change and bombarded with CV-19 related challenges and communications...<br /><br />Here\'s something positive we at Karate New Zealand can do that may just help our members and wider, anyone involved in karate everywhere...if we can save just 1 dojo from closing down, it\'s a good thing...Tactics and Strategy for Karate Dojo\'s re Covid-19<br /><br />Dojo\'s, clubs and traditional Karate schools across the country will be understandably concerned about the effect Covid-19 may have on their dojo\'s and clubs. We offer some guidance, in both Tactics and a Strategy in preparedness for all Karate, everywhere, in the hope this helps you stay in health and in fitness and \'Keep Karate Alive\'...After all, the country and the world needs Karate...Tactics- Eliminate direct contact in keeping separation of personal training space<br />- Personal hygiene, wash hands or sanitise hands immediately before and immediately after class<br />- Anyone feeling unwell should stay at home , teachers/sensei included<br />- Kihon, Kihon, Kihon....Basics, basics,basic<br />- Kata, Kata, Kata....<br />- Stop kumite, self defence any contact / partnered work for now ( these can be emulated in personal training space )<br />- Clean the floors<br />- Consider/Increase 1:1 sessions<br />- In the event that government ban gatherings of groups and you cannot run a regular dojo class, don\'t close down...change and adapt.Strategy- Prepare for and instigate remote virtual classes using zoom, skype or what\'s app<br />- laptops, tablets and smartphones have video conference capability and all we need then is connection to the internet<br />- From your own homes or space to move around in, everyone logs into class online and we commence training<br />- Many businesses run meetings and workshops like this, works the same for Karate.Grant Holland<br />Board Chair and President<br />Karate New Zealand</p>',
            'date' => '2020-03-20',
            'image_link' => 'phpwQomrD.png',
            'tag' => 'Announcement'
        ]);
    }
}
