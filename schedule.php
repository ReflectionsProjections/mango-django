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
									echo '<dd>' . $event["desc"] . '</dd>';
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
									"desc" => "<a href='speakers.php#tan'>Garry Tan, Partner at Y Combinator</a>",
								),
								array(
									"time" => "6:30 PM",
									"desc" => "Dinner",
								),
								array(
									"time" => "7:45 PM",
									"desc" => "<a href='speakers.php#feinberg'>Danielle Feinberg, Director of Photography -- Lighting  at Pixar</a>",
								),
								array(
									"time" => "9:00 PM",
									"desc" => "<a href='mechmania.php'>MechMania Opening Ceremony</a>",
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
								
									"desc" => "<p><a href='speakers.php#graner'>Amber Graner, Co-Author of <em>The Official Ubuntu Book</em></a></p>
											   <p><a href='speakers.php#hunter'>Rian Hunter, Software Engineer at Dropbox</a></p>
											  ",
								),
								array(
									"time" => "11:15 AM",
									"desc" => "Startup Panel with Amit Kulkarni (Do), Cory Levy (One), Dan Manges (Braintree), and Dave Paola (Bloc)",
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
									"desc" => "<p><a href='speakers.php#behrens'>Shannon 'JJ' Behrens, Member of Google DART Team</a></p>
											   <p><a href='speakers.php#shaw'>Zed Shaw, Creator of Mongrel</a></p><p>Open Hatch Talk</p>
											   ",
								),
								array(
									"time" => "2:45 PM",
									"desc" => "<p><a href='speakers.php#zacchiroli'>Stefano Zacchiroli, Debian Project Leader</a></p>
											   <p><a href='speakers.php#chan'>Ian Chan, Front End Engineer at Twitter</a></p>
											  ",
								),
								array(
									"time" => "4:00 PM",
									"desc" => "<p><a href='speakers.php#ngiam'>Jiquan Ngiam, Director of Engineering at Coursera</a></p>
											   <p><a href='speakers.php#verrecchia'>Jonathan Verrecchia, Front End Engineer at Yelp</a></p>
											  ",
								),
								array(
									"time" => "5:30 PM",
									"desc" => "Dinner",
								),
								array(
									"time" => "6:30 PM",
									"desc" => "<p><a href='speakers.php#ritz'>Andrew Ritz, Development Manager for Windows at Microsoft</a></p>
											   <p><a href='speakers.php#rusu'>Radu Rusu, CEO of Open Perception, Inc.</a></p>
											   <p>Google DART Workshop</p>
											  ",
								),
								array(
									"time" => "7:45 PM",
									"desc" => "<p><a href='speakers.php#boutros'>Joe Boutros, Project Manager at Indeed</a></p>
								<p>Video Game Q&amp;A with Erik Wolpaw (Portal) and Steve Jaros (Volition)</p>",
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
									"time" => "TBA",
									"desc" => "Open Hatch Workshop",
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
