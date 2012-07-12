<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Startup Fair Registration - ACM Reflections | Projections 2012</title>

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
						<li class="">
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
						<li class="active">
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
<h1 class="page-heading">Startup Fair Registration</h1>
<?php
require_once('dbconnect.php');

$mysqli = new mysqli($db_host,$db_user,$db_pass, $db_name);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL";
}

$company = $mysqli->real_escape_string($_GET['company']);
$hash = $mysqli->real_escape_string($_GET['key']);

$error = False;
$res = $mysqli->query("SELECT * FROM startupfair WHERE company = '$company'");
if($row = $res->fetch_assoc()){
    if($row['hash'] == $hash && !$row['done']){
	$id = $row['id'];
	$mysqli->query("UPDATE startupfair SET visits=visits+1 WHERE id=$id");
    ?>
	<a name="form1308489271" id="formAnchor1308489271"></a>
	<script type="text/javascript" src="http://fs6.formsite.com/include/form/embedManager.js?1308489271"></script>
	<script type="text/javascript">
		EmbedManager.embed({
		    key: "http://fs6.formsite.com/res/showFormEmbed?EParam=0f3EXAbWkRyOWvWrn2%2FGgq%2F3bsAv%2BgQi&1453896551",
 		    width: "100%"
		});
	</script>
    <?php
    }else{
	$error = True;
    }
}else{
    $error = True;
}
if($error){
?>
<p>There was an error with this page. Please contact <a href="mailto:jobfair@acm.uiuc.edu">jobfair@acm.uiuc.edu</a></p>
<?php
}
?>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Le JavaScript -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
