<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Schedule - ACM Reflections | Projections 2012</title>

	<!-- Le Styles -->
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/rp_styles.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="css/rp_styles-responsive.css" rel="stylesheet" />
	<!--[if !IE 7]>
		<style type="text/css">
			#wrap {display:table;height:100%}
		</style>
	<![endif]-->

</head>
<body>
<div id="wrap">
	<?php $page="schedule.php"; include("nav.php") ?>
	<div id="page-description" class="container-fluid">
		<div class="row" id="header">
			<div id="top-section">
				<div class="span12">
					<h1 class="page-heading">Schedule</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="main" class="container">
		<div class="row">
			<div class="span12">
				<div class="hero-unit">
					<div id="event-schedule">
						
						<?php
							function printEvents($events, $day) {
								echo "<h1 class=\"schedule-date\">$day</h1>";
								echo "<dl class=\"dl-horizontal schedule\">";
								foreach ($events as $event) {
									echo '<dt>' . $event["time"] . '</dt>';
									echo '<dd><span class="spacing">' . $event["desc"] . '</span></dd>';
								}
								echo '</dl>';
							}

							// FRIDAY
							$fridayEvents = array(
								array(
									"time" => "9:00 AM",
									"desc" => "Registration Begins",
								),
								array(
									"time" => "10:00 AM - 4:00 PM",
									"desc" => "<a href='jobfair.php'>Reflections | Projections Job Fair</a>",
								),
								array(
									"time" => "5:00 PM",
									"desc" => "<a href='speakers.php#tan'>Garry Tan - Startup Lessons: How to Change the World With Your Mind</a><br/>Partner at Y Combinator<br/><em>1404 Siebel</em>",
								),
								array(
									"time" => "6:30 PM",
									"desc" => "Dinner sponsored by Neustar",
								),
								array(
									"time" => "7:45 PM",
									"desc" => "<a href='speakers.php#feinberg'>Danielle Feinberg - The Making of Pixar's Brave: The Art and Algorithms Behind Movie Magic</a><br/>Director of Photography -- Lighting  at Pixar<br/><em>1404 Siebel</em>",
								),
								array(
									"time" => "9:00 PM",
									"desc" => "<a href='mechmania.php'>MechMania Opening Ceremony</a><br/>sponsored by Palantir Technologies<br/><em>1404 Siebel</em>",
								),
								array(
									"time" => "9:30 PM",
									"desc" => "MechMania Begins",
								),

							);

							printEvents($fridayEvents, "Friday, October 5");
							
							// SATURDAY
							$saturdayEvents = array(
								array(
									"time" => "9:00 AM",
									"desc" => "Breakfast",
								),
								array(
									"time" => "10:00 AM",
									"room"  => "",
								
									"desc" => "<a href='speakers.php#graner'>Amber Graner - Without Fear: You Don't Need Permission to Contribute to Your Own Destiny</a><br/>Co-Author of <em>The Official Ubuntu Book</em><br/><em>1404 Siebel</em>
											  ",
								),
								array(
									"time" => "11:15 AM",
									"desc" => "<a href='speakers.php#startup_panel'>Startup Panel</a><br/>with Amit Kulkarni (Do), Cory Levy (One), Dan Manges (Braintree), and Dave Paola (Bloc)<br/><em>1404 Siebel</em>",
								),
								array(
									"time" => "12:30 PM",
									"desc" => "Lunch",
								),
								array(
									"time" => "1:00 PM - 4:00 PM",
									"desc" => "<a href='startupfair.php'>Reflections | Projections Startup Fair</a>",
								),
								array(
									"time" => "1:30 PM",
									"desc" => "<p><a href='speakers.php#behrens'>Shannon 'JJ' Behrens - Structured Web Programming: An Introduction to Dart</a><br/>Member of Google DART Team<br/><em>1404 Siebel</em></p>
                  <p><a href='speakers.php#shaw'>Zed Shaw - Undoing Your Student Code</a><br/>Creator of Mongrel<br/><em>1320 DCL</em></p>
                  <p><a href='speakers.php#mckeon'>Shauna Gordon McKeon - How to Get Started Contributing to Open Source</a><br/>Team Member at OpenHatch<br/><em>1310 DCL</em></p>
											   ",
								),
								array(
									"time" => "2:45 PM",
									"desc" => "<p><a href='speakers.php#zacchiroli'>Stefano Zacchiroli - Debian: 19 Years of Free Software, Do-ocracy, and Democracy</a><br/>Debian Project Leader<br/><em>1404 Siebel</em></p>
											   <p><a href='speakers.php#chan'>Ian Chan - Engineering at Human Scale: Building Software for 1 to 100 million users</a><br/>Front End Engineer at Twitter<br/><em>1320 DCL</em></p>
											   <p><a href='speakers.php#taylor'>Ken Taylor - Secrets of the Universe, or A Few Random Bits</a><br/>Engineering Manager at Neustar<br/><em>1310 DCL</em></p>
											  ",
								),
								array(
									"time" => "4:00 PM",
									"desc" => "<p><a href='speakers.php#verrecchia'>Jonathan Verrecchia - Writing Large Scale CSS With OOCSS and Sass</a><br/>Front End Engineer at Yelp</br><em>1404 Siebel</em></p>
											<p><a href='speakers.php#ngiam'>Jiquan Ngiam - Technology Meets Education: Building A Scalable Online Learning Platform</a><br/>Director of Engineering at Coursera<br/><em>1320 DCL</em></p>
											   <p><a href='speakers.php#hunter'>Rian Hunter - Dropbox Notification Servers</a><br/>Software Engineer at Dropbox<br/><em>1310 DCL</em></p>
                    ",
								),
								array(
									"time" => "5:30 PM",
									"desc" => "Dinner",
								),
								array(
									"time" => "6:30 PM",
									"desc" => "<p><a href='speakers.php#ritz'>Andrew Ritz - Designing Windows for SOC PCs</a><br/>Development Manager for Windows at Microsoft<br/><em>1404 Seibel</em></p>
											   <p><a href='speakers.php#rusu'>Radu Rusu - Perceiving the World Through the Eyes of a Robot</a><br/>CEO of Open Perception, Inc.<br/><em>1320 DCL</em></p>
											   <p><a href='speakers.php#behrens'>Google DART Workshop</a></br><em>2405 Siebel</em></p>
											  ",
								),
								array(
									"time" => "7:00 PM",
									"desc" => "PuzzleBang closing ceremony<br/><em>1310 DCL</em>",
								),
								array(
									"time" => "7:45 PM",
									"desc" => "<p><a href='speakers.php#boutros'>Joe Boutros - Extremely Rapid Prototyping</a><br/>Project Manager at Indeed<br/><em>1404 Siebel</em></p>
								<p><a href='speakers.php#gaming_panel'>Video Game Q&amp;A</a><br/>with Erik Wolpaw (Portal) and Steve Jaros (Volition)<br/><em>1320 DCL</em></p>",
								),
								array(
									"time" => "9:00 PM",
									"desc" => "MechMania Ends",
								),
							);

							printEvents($saturdayEvents, "Saturday, October 6");

							// SUNDAY
							$sundayEvents = array(
								array(
									"time" => "1:00 PM",
									"desc" => "MechMania Closing Ceremony",
								),
								array(
									"time" => "10:00 AM",
									"desc" => "<a href='openhatch.php'>Command line basics tutorial (optional part of Open Source Workshop)</a><br/><em>Siebel 2405</em>",
								),
								array(
									"time" => "11:00 AM",
									"desc" => "<a href='openhatch.php'>git tutorial (optional; see above)</a><br/><em>Siebel 2405</em>",
								),
								array(
									"time" => "12:00 PM",
									"desc" => "<a href='openhatch.php'>Open Source Workshop lunch</a><br/><em>Siebel 2405</em>",
								),
								array(
									"time" => "1:00 PM",
									"desc" => "<a href='openhatch.php'>Open Source Workshop hands-on projects time</a><br/><em>Siebel 2405</em>",
								),
							);

							printEvents($sundayEvents, "Sunday, October 7");
						?>

					</div> <!-- #event-schedule -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>

</body>
</html>
