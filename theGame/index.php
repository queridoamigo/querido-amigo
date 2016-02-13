<!DOCTYPE html>
<html>
	<head>
		<?php
			include("includes/links.php");	
			include("includes/highlights.php");	
		?>
		<title>The Most Epic Game of 2016</title>
	</head>

	<body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="#">Highscores</a></li>
          <li><a href="#">Add game</a></li>
        </ul>
        <ul class="pull-right">
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </div>

		<div class="jumbotron">
			<div class="container">
				<h1 id="headTitle">Ping-Pong 2016 Challenge</h1>
			</div>
		</div>

    <div class="main-pics">
			<div class="container">
				<br>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<div class="item active">
							<img src="" alt="something gone wrong"  width="1060" height="445">
							<div class="carousel-caption">
								<?php echo getMainScore(); ?>		
							</div>
						</div>

						<div class="item">
							<img src="" alt="something gone wrong"  width="1060" height="445">
							<div class="carousel-caption">
								<?php echo getLastGames(); ?>		
							</div>
						</div>
					
						<div class="item">
							<img src="" alt="something gone wrong"  width="1060" height="445">
							<div class="carousel-caption">
								<?php echo getMidScore(); ?>		
							</div>
						</div>

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
</div>
    </div> 

    <script src="js/app.js"></script>
	</body>
</html>
