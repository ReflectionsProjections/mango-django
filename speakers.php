<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Speakers - ACM Reflections | Projections 2012</title>

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
	<?php $page="speakers.php"; include("nav.php") ?>
	<div id="page-description" class="container-fluid">
		<div class="row" id="header">
			<div id="top-section">
				<div class="span12">
					<h1 class="page-heading">Speakers</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="main" class="container">
		<div class="row">

			<div class="span5">
				<div class="hero-unit">
					<?php include("speaker_pages/shannon_jj_behrens.php"); ?>
					<?php include("speaker_pages/joe_boutros.php"); ?>
					<?php include("speaker_pages/ian_chan.php"); ?>
					<?php include("speaker_pages/danielle_feinberg.php"); ?>
					<?php include("speaker_pages/amber_graner.php"); ?>
					<?php include("speaker_pages/rian_hunter.php"); ?>
					<?php include("speaker_pages/jiquan_ngiam.php"); ?>
					<?php include("speaker_pages/radu_rusu.php"); ?>
					<?php include("speaker_pages/andrew_ritz.php"); ?>
					<?php include("speaker_pages/dan_magnes.php"); ?>
		
				</div>
			</div>

			<div class="span5">
				<div class="hero-unit">
					<?php include("speaker_pages/zed_shaw.php"); ?>
					<?php include("speaker_pages/garry_tan.php"); ?>
					<?php include("speaker_pages/jonathan_verrecchia.php"); ?>
					<?php include("speaker_pages/stefano_zacchiroli.php"); ?>
					<?php include("speaker_pages/cory_levy.php"); ?>
					<?php include("speaker_pages/amit_kulkarni.php"); ?>
					<?php include("speaker_pages/dave_paola.php"); ?>
					<?php include("speaker_pages/erik_wolpaw.php"); ?>
					<?php include("speaker_pages/steve_jaros.php"); ?>
					<?php include("speaker_pages/healey_cypher.php"); ?>
					<?php include("speaker_pages/shauna_mckeon.php"); ?>
				</div>
			</div>

			<div class="span12">
				<div class="hero-unit">
					<h2>Talks</h2>
					<div class="row">
						<div class="span4">
							<ul>
								<li>Shannon “JJ” Behrens, Member of Google DART Team</li>
								<li>Joe Boutros, Project Manager at Indeed</li>
								<li>Ian Chan, Front End Engineer at Twitter</li>
								<li>Danielle Feinberg, Director of Photography—Lighting at Pixar</li>
								<li>Amber Graner, Co-Author of <em>The Official Ubuntu Book</em></li>
							</ul>
						</div>
						<div class="span4">
							<ul>
								<li>Rian Hunter, Software Engineer at Dropbox</li>
								<li>Jiquan Ngiam, Director of Engineering at Coursera</li>
								<li>Radu Rusu, CEO of Open Perception, Inc.</li>
								<li>Andrew Ritz, Development Manager for Windows at Microsoft</li>
								<li>Zed Shaw, Creator of Mongrel</li>
							</ul>
						</div>
						<div class="span3">
							<ul>
								<li>Garry Tan, Partner at Y Combinator</li>
								<li>Jonathan Verrecchia, Front End Engineer at Yelp</li>
								<li>Stefano Zacchiroli, Debian Project Leader</li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<div class="hero-unit">
					<h2>Startup Panel</h2>
					<ul>
						<li>Cory Levy, One</li>
						<li>Amit Kulkarni, Do</li>
						<li>Dave Paola, Bloc</li>
					</ul>	
				</div>	
			</div>
			<div class="span6">
				<div class="hero-unit">
					<h2>Gaming Q & A</h2>
					<ul>
						<li>Erik Wolpaw, Co-writer for Portal (Valve)</li>
						<li>Steve Jaros, Lead Writer for Saints Row (Volition)</li>
						<br/><!-- This is a kluge. Forgive me gods of computing -->
					</ul>	
				</div>	
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
