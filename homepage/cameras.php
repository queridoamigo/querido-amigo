<!DOCTYPE html>
<html>
<head>
	<title>Querido_amigo/Cameras</title>
	<?php
		include("includes/links.php");	
	?>
</head>

<body>
	<div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
        <img src="images/close.png">
      </div>
      <!-- Menu -->
      <ul>
        <li><a href="index.php">Main</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
	
	<div class="jumbotron">

      <div class="icon-menu">
        <i class="fa fa-camera"></i>
        Menu
      </div>

		<h3 class="cam_title">
			My cameras:
		</h3>
	</div>

	<div class="camPills">
		<ul class="nav nav-tabs nav-justified">
		  <li class="active"><a data-toggle="tab" href="#home">Pentax 6x7</a></li>
		  <li><a data-toggle="tab" href="#menu1">Pentax K1000</a></li>
		  <li><a data-toggle="tab" href="#menu2">Zenit ET</a></li>
		  <li><a data-toggle="tab" href="#menu3">Other</a></li>
		</ul>

			<div class="pillsContent">	
				<div class="tab-content">
				  <div id="home" class="tab-pane fade in active">
					<div class="camlist">
						<ul>
							<li>smc takumar 105/2.4</li>
						</ul>
					</div>
				  </div>
				  <div id="menu1" class="tab-pane fade">
					<div class="camlist">
						<ul>
							<li>smc pentax 50/2</li>
							<li>helios 44-2</li>
							<li>zenitar 16/2.8 fisheye</li>
							<li>Industar 50-2/3.5</li>
							<li>jupiter 21m</li>
							<li>jupiter 11</li>
						</ul>
					</div>
				  </div>
				  <div id="menu2" class="tab-pane fade">
					<div class="camlist">
						<ul>
							<li>smc pentax 50/2</li>
							<li>helios 44-2</li>
							<li>zenitar 16/2.8 fisheye</li>
							<li>Industar 50-2/3.5</li>
							<li>jupiter 21m</li>
							<li>jupiter 11</li>
						</ul>
					</div>
				  </div>
				  <div id="menu3" class="tab-pane fade">
					<div class="camlist">
						<ul>
							<li>chaika ii</li>
							<li>smena 8m</li>
							<li>smena 35</li>
							<li>lubitel 166u</li>
						</ul>
					</div>
				  </div>
				</div>
			</div>
	</div>
<!--
	<div class="camlist">
		<ul>
			<li>pentax 6x7</li>
				<ul>
					<li>
						smc takumar 105/2.4
					</li>
				</ul>
			<li>pentax k1000 and zenit et</li>
				<ul>
					<li>smc pentax 50/2</li>
					<li>helios 44-2</li>
					<li>zenitar 16/2.8 fisheye</li>
					<li>jupiter 21m</li>
				</ul>
			<li>chaika ii</li>
			<li>smena 8m</li>
			<li>lubitel 166u</li>
		</ul>
	</div>
-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
