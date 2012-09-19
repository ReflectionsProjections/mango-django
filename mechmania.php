<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>MechMania - ACM Reflections | Projections 2012</title>

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
<?php $page="mechmania.php"; include("nav.php") ?>
<div id="page-description" class="container-fluid">
	<div class="row" id="header">
		<div id="top-section">
		<div class="span12">
			<h1 class="page-heading">MechMania</h1>
		</div>
	</div>
	</div>
</div>
<div id="main" class="container">
	<div class="row mechmania-row">
		<div class="mechmania-info span12">
			<div class="hero-unit">
				<h2>What is it?</h2>
				<p>
				MechMania is a 24-hour programming contest in which teams of
				students from various schools compete to create an AI capable of
				playing (and winning) a strategy game we have developed for the
				event.
				</p>
				<p><a href="#register">Register Below</a></p>
			</div>
		</div>
	</div>
	<div class="row mechmania-row">
		<div class="mechmania-info span12">
			<div class="hero-unit">
				<h2>Who's eligible?</h2>
				<p>
				We accept teams of up to three people in two brackets: the
				student competition and the corporate competition.
				</p>
				<h3>Student Competition</h3>
				<p>
				Our student competition accepts up to twenty teams and pits them
				against each other in one final battle. Teams do not need to be
				comprised of all students from the same school, but all
				participants must be actively enrolled in a college or
				university.
				</p>
				<h3>Corporate Competition</h3>
				<p>
				The corporate competition is open to teams representing
				companies. Be sure to contact us if your company is interested
				in participating in this year's competition. There are no
				prizes (other than the joy of winning) for corporate
				competitors.
				</p>
			</div>
		</div>
	</div>
	<div id="register" class="row mechmania-row">
		<div class="mechmania-info span12">
			<div class="hero-unit">
			  <h2>Register Now!</h2>
			  <div style="width:100%; text-align:left;" ><iframe  src="http://www.eventbrite.com/tickets-external?eid=4243049074&ref=etckt" frameborder="0" height="250" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe></div>
			</div>
		</div>
	</div>
	<div class="row mechmania-row">
		<div class="mechmania-info span6">
			<div class="hero-unit">
				<h2>What you need to know</h2>
				<p>
				At least one, and preferably all, members of each team will need
				general familiarity with a Linux shell (bash, zsh, and csh are
				all provided on our workstations). All members should be
				proficient in the programming language their team intends to
				use. The API will use JSON messages passed over HTTP, so we recommend having
				knowledge of a JSON library in your chosen language.
				</p>
			</div>
		</div>
		<div class="mechmania-info span6">
			<div id="dont" class="hero-unit">
				<h2>What you don't need to know</h2>
				<p>
				No prior knowledge of any specific languages are
				required<sup>1</sup>. You won't need a background in artificial
				intelligence&mdash;in previous years, many teams without an AI
				background have competed and done well, or even won. You also
				shouldn't need knowledge of network programming beyond HTTP
				requests.
				</p>
			</div>
		</div>
	</div>
	<div class="row mechmania-row">
		<div class="mechmania-info span6">
			<div id="bring" class="hero-unit">
				<h2>What you can bring</h2>
				<p>
				You can bring any reference manual(s) you wish, whether it be the
				<em>Art of Computer Programming</em> or the <em>Art of War.</em>
				But absolutely no outside code. You may, however, bring non-code
				items like rc files, build scripts, notes, etc. Competitors are
				allowed to bring their own laptops, though the code you write
				must be capable of running on our systems.
				</p>
			</div>
		</div>
		<div class="mechmania-info span6">
			<div class="hero-unit">
				<h2>What we'll give you</h2>
				<p>
				Teams will be provided two PCs running Scientific Linux 6.
				Your code should be platform-independent to ensure compatibility with the competition environment.
				We will provide a standard Unix environment, as described above.
				You will have access to the internet throughout the competition
				and are free to find reference materials, documentation and
				third party libraries<sup>2</sup>.
				</p>
			</div>
		</div>
	</div>
	<div class="row mechmania-row">
		<div class="mechmania-info span6">
			<div class="hero-unit">
			<h2>What you'll do</h2>
			<p>
			By either starting from scratch or using our provided sample
			clients, you will build an artificial intelligence client to play a strategy game
			of our design. Our API will provide you
			information about the current state of the game, as well as
			allow you to send commands to play it. You may find previous
			competition sites useful to get an idea of how MechMania operates.
			</p>
			</div>
		</div>
		<div id="when" class="mechmania-info span6">
			<div id="when" class="hero-unit">
				<h2>When it'll happen</h2>
				<p>
				This year we have changed the start time for the competition
				based on feedback from previous years' participants. The
				competition will begin with the opening ceremony and announcement of the game on Friday,
				October 5, after which the programming component will
				commence immediately. The competition will end Saturday evening
				after running for 24 hours. We will present the closing ceremony and awards Sunday afternoon.
				</p>
			</div>
		</div>
	</div>
	<div class="row mechmania-row">
		<div class="mechmania-info span6">
			<div id="footnotes" class="hero-unit">
				<h3>Footnotes</h3>
				<p class="small-font">
				1 You may only use languages and language features that compile
				and run on our test machine. Note that this means you should
				avoid Linux-specific C/C++. Pure Unix-targeted code should
				suffice.
				</p>
				<p class="small-font">
				2 Please note that when we say "third-party libraries," we mean
				third-party--not ones written by you, your team, or your
				friends. We will try to make sure that PIP is set up for Python
				users.
				</p>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>
