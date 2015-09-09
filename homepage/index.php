<!DOCTYPE html>
<html>

  <head>
	<?php
		include("includes/links.php");	
		include("includes/functions.php");	
	?>
    <title>Querido_Amigo</title>
  </head>

  <body>

	<div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
        <img src="Images/close.png">
      </div>
      <!-- Menu -->
      <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="cameras.php">Cameras</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    
	<div class="jumbotron">

      <div class="icon-menu">
        <i class="fa fa-camera"></i>
        Menu
      </div>

      <div class="container">
        <h1>Querido Amigo</h1>
        <p>Yup, thats me.</p>
        <a href="https://www.flickr.com/photos/querido_amigo/">See More</a>
      </div>
    </div> 

    <div class="main-pics">
        <div class="container">
            <h2>Shots about my life</h2>
            <p></p>
				<?php
						completeRows();
				?>                
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="app.js"></script>
	<script src="jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="jquery.lazyload.mini.js"></script>
		<script>
			 $(document).ready(function () {
			 $("img").lazyload({effect:"fadeIn"});
			 $("a[rel='colorbox']").colorbox({current:"Picture {current} of {total}"});
			 });
		</script>
  </body>
</html>
