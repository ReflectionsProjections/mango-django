<!DOCTYPE HTML> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home - ACM Reflections | Projections 2012</title>

	<!-- Le Styles -->
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/rp_styles.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.css" rel="stylesheet" />
	<link href="css/rp_styles-responsive.css" rel="stylesheet" />

</head>
<body>
<div id="wrap">
	<div id="logo-box" class="container-fluid">
		<div class="row" id="header">
			<div class="span12">
				<img id="logo" src="./img/logo.png">
			</div>
		</div>
	</div>
	<?php $page="index.php"; include("nav.php"); ?>
	<div id="main" class="container">
		<div class="row">
			<div id="homepage-span6">
				<div class="span6">
					<div class="hero-unit well" id="homepage-hero">
						<h2><a href="./registration.php"><small>Registration for</small> Attendees</a></h2>
						<h2><a href="./mechmania.php"><small>Registration for</small> Mechmania</a></h2>
						<h2><a href="./volunteers.php"><small>Registration for</small> Volunteers</a></h2>
						<br/>
						<p class="description"> The Association for Computing Machinery at the University of Illinois will host its 18th annual computing conference on October 5-7, 2012.  Reflections | Projections brings together students from across the country to gain a broader perspective on technological topics.  Throughout the weekend, we'll have several speakers from industry and academia alike, a programming competition (MechMania) created by in-house developers, and a job fair for students and companies in computing.  </p>
						<p class="description">There is no charge to attend the conference, but we'll hand out free t-shirts to those who register by Friday, September 28.  While registering, visitors to campus may wish to select to have food provided at a cost of $20.  Paid registration is also required for participation in the MechMania programming competition.</p>
						<p class="description">Thank you for your interest; be sure to check back for updates on events, volunteer sign-up, and registration.</p>
					</div>
				</div>
			</div>
			<div id="homepage-carousel-space" class="span6">
				<div id="homepage-carousel" class="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/carousel/rp_1.jpg" alt="RP_1" />
						</div>
						<div class="item">
							<img src="img/carousel/rp_2.jpg" alt="RP_2" />
						</div>
						<div class="item">
							<img src="img/carousel/rp_3.jpg" alt="RP_3" />
						</div>
						<div class="item">
							<img src="img/carousel/rp_4.jpg" alt="RP_4" />
						</div>
						<div class="item">
							<img src="img/carousel/rp_5.jpg" alt="RP_5" />
						</div>
						<div class="item">
							<img src="img/carousel/rp_6.jpg" alt="RP_6" />
						</div>
					</div>
					<a href="#homepage-carousel" class="carousel-control left" data-slide="prev">&lsaquo;</a>
					<a href="#homepage-carousel" class="carousel-control right" data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
