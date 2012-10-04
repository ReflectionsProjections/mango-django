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
					<p>Click on a speaker's name for more information about his or her talk and biography.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="main" class="container">
		<div class="row">
			<div class="span6">
				<div class="hero-unit">
					<?php include("speaker_pages/garry_tan.php"); ?>
					<?php include("speaker_pages/amber_graner.php"); ?>
					<?php include("speaker_pages/shannon_jj_behrens.php"); ?>
					<?php include("speaker_pages/shauna_mckeon.php"); ?>
					<?php include("speaker_pages/ian_chan.php"); ?>
					<?php include("speaker_pages/jiquan_ngiam.php"); ?>
					<?php include("speaker_pages/radu_rusu.php"); ?>
					<?php include("speaker_pages/joe_boutros.php"); ?>
				</div>
			</div>
			<div class="span6">
				<div class="hero-unit">
					<?php include("speaker_pages/danielle_feinberg.php"); ?>
					<?php include("speaker_pages/rian_hunter.php"); ?>
					<?php include("speaker_pages/zed_shaw.php"); ?>
					<?php include("speaker_pages/stefano_zacchiroli.php"); ?>
					<?php include("speaker_pages/ken_taylor.php"); ?>
					<?php include("speaker_pages/jonathan_verrecchia.php"); ?>
					<?php include("speaker_pages/andrew_ritz.php"); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span6">
				<div class="hero-unit">
          <a id="gaming_panel"></a>
					<h2>Gaming Q & A</h2>
					<h4>Saturday, 10/6 @ 7:45PM</h4>
					<h4>1320 DCL</h4>
					<br>
					<h4>Suggest questions <a id="panel_link" href="./panel_suggestions.php">here</a>.</h4>
					<br>
					<?php include("speaker_pages/steve_jaros.php"); ?>
					<?php include("speaker_pages/erik_wolpaw.php"); ?>
				</div>	
			</div>
			<div id="startup_panel" class="span6">
				<div class="hero-unit">
          <a id="startup_panel"></a>
					<h2>Startup Panel</h2>
					<h4>Saturday, 10/6 @ 11:15AM</h4>
					<h4>1404 Siebel</h4>
					<br>
					<?php include("speaker_pages/amit_kulkarni.php"); ?>
					<?php include("speaker_pages/cory_levy.php"); ?>
					<?php include("speaker_pages/dan_magnes.php"); ?>
					<?php include("speaker_pages/dave_paola.php"); ?>
				</div>	
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
$(function(){
var hash = window.location.hash;
$(hash).click();

});
</script>
</body>
</html>
