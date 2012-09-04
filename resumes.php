<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Resume Upload - ACM Reflections | Projections 2012</title>

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
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="./index.html"><img src="img/running_man_navbar.png"></a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="">
							<a href="./about.html">about</a>
						</li>
						<li class="">
							<a href="./registration.html">register</a>
						</li>
						<li class="active">
							<a href="./schedule.html">schedule</a>
						</li>
						<li class="">
							<a href="./speakers.html">speakers</a>
						</li>
						<li class="">
							<a href="./travel.html">travel</a>
						</li>
						<li class="">
							<a href="./jobfair.html">job fair</a>
						</li>
						<li class="">
							<a href="./startupfair.html">startups</a>
						</li>
						<li class="">
							<a href="./mechmania.html">mechmania</a>
						</li>
						<li class="">
							<a href="./volunteers.html">volunteers</a>
						</li>
						<li class="">
							<a href="./contact.html">contact</a>
						</li>
					</ul>
					<ul class="nav pull-right">
						<li class="">
							<a href="http://www.acm.uiuc.edu">acm@uiuc</a>
						</li>
						<li class="divider-vertical"></li>
						<li class="dropdown" id="history_menu">
							<a class="dropdown-toggle" data-toggle="dropdown">history <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2011/index.php">2011</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2010/">2010</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2009/">2009</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2008/">2008</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2007/">2007</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2006/">2006</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2005/">2005</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2004/">2004</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2003/">2003</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2002/">2002</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2001/">2001</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/2000/">2000</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/1999/">1999</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/1998/">1998</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/1997/">1997</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/1996/">1996</a>
								</li>
								<li>
									<a href="http://www.acm.uiuc.edu/conference/1995/">1995</a>
								</li>
							</ul>
							</li>
						</ul>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="page-description" class="container-fluid">
		<div class="row" id="header">
			<div id="top-section">
				<div class="span12">
					<h1 class="page-heading">Resume Book</h1>
					<p>Fill out the form below to have your resume added to the Reflections | Projections resume book.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="main" class="container">
		<div class="row">
			<div class="span6">
				<div class="hero-unit">
				  <h3>Add your resume to The Big Book of Programmers!</h3>
				 <p>Reflections | Projections is compiling its first volume of an annual resume book for attendees. Participants who upload their resume here or in person at the registration table will have their own page in the book.</p>
				  <p>Here is what we need:</p>
				  <ul>
					<li>Full name as you would like it printed in the book</li>
					<li>A valid University of Illinois Netid.</li>
					<li>A black & white, one-page, PDF file containing your resume.</li>
				  </ul>
				  <p>Questions? <a href="mailto:corporate@acm.uiuc.edu">Email us.</a></p>
				 <h3>Interested in a copy?</h3>
				 <p>Employers who are interested in purchasing a copy of the Big Book of Programmers should email <a href="mailto:corporate@acm.uiuc.edu">corporate@acm.uiuc.edu</a> for more information.</p>
				</div>
			</div>
			<div class="span6">
				<div class="hero-unit">
				  <?php
					 if ($_GET["status"] == "ok") {
					 ?>
<div class="alert alert-success">Your resume was uploaded! If you need to make changes, just upload your resume again with the same Netid and we will save your changes!</div>
<?
						  }
						  ?>
				  <form class="form-horizontal" method="post" action="upload.php" enctype="multipart/form-data">
					<div class="control-group">
					  <label class="control-label">First Name:</label>
					  <div class="controls">
						<input type="text" name="firstname" size="40">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">Last Name:</label>
					  <div class="controls">
						<input type="text" name="lastname" size="40">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">University of Illinois Netid:</label>
					  <div class="controls">
						<input type="text" name="netid" size="40">
						<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label">Resume (PDFs only):</label>
					  <div class="controls">
						<input type="file" name="resume" id="resume" size="40">
					  </div>
					</div>
					<div class="control-group">
					  <div class="controls">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
				  </form>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="foot">
	<h1>October 5-7, 2012</h1>
	<p>18<sup>th</sup> Annual Reflections | Projections Student Computing Conference</p>
	<p id="copyright">Copyright ACM 2012</p>
</div>

	<!-- Le JavaScript -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
