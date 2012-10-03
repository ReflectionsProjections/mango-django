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
									"desc" => "<a href='speakers.php#tan'>Garry Tan</a><br/>Partner at Y Combinator<br/><em>1404 Siebel</em>",
								),
								array(
									"time" => "6:30 PM",
									"desc" => "Dinner sponsored by Neustar",
								),
								array(
									"time" => "7:45 PM",
									"desc" => "<a href='speakers.php#feinberg'>Danielle Feinberg</a><br/>Director of Photography -- Lighting  at Pixar<br/><em>1404 Siebel</em>",
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
								
									"desc" => "<p><a href='speakers.php#graner'>Amber Graner</a><br/>Co-Author of <em>The Official Ubuntu Book</em><br/><em>1404 Siebel</em></p>
											   <p><a href='speakers.php#hunter'>Rian Hunter</a><br/>Software Engineer at Dropbox<br/><em>1320 DCL</em></p>
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
									"desc" => "<p><a href='speakers.php#behrens'>Shannon 'JJ' Behrens</a><br/>Member of Google DART Team<br/><em>1040 Siebel</em></p>
                  <p><a href='speakers.php#shaw'>Zed Shaw</a><br/>Creator of Mongrel<br/><em>1320 DCL</em></p>
                  <p><a href='speakers.php#mckeon'>Shauna Gordon McKeon</a><br/>Team Member at OpenHatch<br/><em>1310 DCL</em></p>
											   ",
								),
								array(
									"time" => "2:45 PM",
									"desc" => "<p><a href='speakers.php#zacchiroli'>Stefano Zacchiroli</a><br/>Debian Project Leader<br/><em>1404 Siebel</em></p>
											   <p><a href='speakers.php#chan'>Ian Chan</a><br/>Front End Engineer at Twitter<br/><em>1320 DCL</em></p>
											  ",
								),
								array(
									"time" => "4:00 PM",
									"desc" => "<p><a href='speakers.php#verrecchia'>Jonathan Verrecchia</a><br/>Front End Engineer at Yelp</br><em>1404 Siebel</em></p>
											<p><a href='speakers.php#ngiam'>Jiquan Ngiam</a><br/>Director of Engineering at Coursera<br/><em>1320 DCL</em></p>
                    ",
								),
								array(
									"time" => "5:30 PM",
									"desc" => "Dinner",
								),
								array(
									"time" => "6:30 PM",
									"desc" => "<p><a href='speakers.php#ritz'>Andrew Ritz</a><br/>Development Manager for Windows at Microsoft<br/><em>1404 Seibel</em></p>
											   <p><a href='speakers.php#rusu'>Radu Rusu</a><br/>CEO of Open Perception, Inc.<br/><em>1320 DCL</em></p>
											   <p>Google DART Workshop</p>
											  ",
								),
								array(
									"time" => "7:45 PM",
									"desc" => "<p><a href='speakers.php#boutros'>Joe Boutros</a><br/>Project Manager at Indeed<br/><em>Siebel 1404</em></p>
								<p><a href='speakers.php#gaming_panel'>Video Game Q&amp;A</a><br/>with Erik Wolpaw (Portal) and Steve Jaros (Volition)<br/><em>DCL 1320</em></p>",
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
									"desc" => "<a href='openhatch.php'>Open Hatch Workshop</a><br/><em>Siebel 2405</em>",
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
