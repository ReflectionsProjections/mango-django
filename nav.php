	<div class="navbar <?php if($page != "index.php"){ echo "navbar-fixed-top"; } ?>">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<?php if($page != "index.php"){ echo '<a class="brand" href="./"><img src="img/running_man_navbar.png"></a>';} ?>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="dropdown" id="about">
							<a class="dropdown-toggle" data-toggle="dropdown">conference <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($page=="about.php"){echo "active";} ?>">
									<a href="./about.php">about</a>
								</li>
								<li class="<?php if($page=="contact.php"){echo "active";} ?>">
									<a href="./contact.php">contact</a>
								</li>
							</ul>
						</li>
						<li class="dropdown" id="register">
							<a class="dropdown-toggle" data-toggle="dropdown">register <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($page=="registration.php"){echo "active";} ?>">
									<a href="./registration.php">attendee registration</a>
								</li>
								<li class="<?php if($page=="volunteers.php"){echo "active";} ?>">
									<a href="./volunteers.php">volunteer registration</a>
								</li>
							</ul>
						</li>
						<li class="dropdown" id="planweekend">
							<a class="dropdown-toggle" data-toggle="dropdown">plan your weekend <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($page=="schedule.php"){echo "active";} ?>">
									<a href="./schedule.php">schedule</a>
								</li>
								<li class="<?php if($page=="travel.php"){echo "active";} ?>">
									<a href="./travel.php">travel</a>
								</li>
							</ul>
						</li>
						<li class="<?php if($page=="speakers.php"){echo "active";} ?>">
							<a href="./speakers.php">speakers</a>
						</li>

						<li class="dropdown" id="job fairs">
							<a class="dropdown-toggle" data-toggle="dropdown">job fairs <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="<?php if($page=="jobfair.php"){echo "active";} ?>">
									<a href="./jobfair.php">job fair</a>
								</li>
								<li class="<?php if($page=="startupfair.php"){echo "active";} ?>">
									<a href="./startupfair.php">startup fair</a>
								</li>
							</ul>
						</li>
						<li class="<?php if($page=="mechmania.php"){echo "active";} ?>">
							<a href="./mechmania.php">mechmania</a>
						</li>
						<li class="<?php if($page=="puzzlebang.php"){echo "active";} ?>">
							<a href="./puzzlebang.php">puzzlebang</a>
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
				</div>
			</div>
		</div>
	</div>
