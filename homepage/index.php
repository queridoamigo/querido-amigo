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
        <h1 id="hTitle">Querido Amigo</h1>
      </div>
	</div> 

    <div class="main-pics">
        <div class="container">
            <p></p>
				<div class="slider">
					<div class="slide active-slide">
						<?php
								completeRows();
						?>                
					</div>

					<div class="slide slide-feature">
						<?php
								completeRows1();
						?>                
					  </div> 

					<div class="slide slide-feature">
						<?php
								completeRows2();
						?>                
					  </div> 

					<div class="slide slide-feature">
						<?php
								completeRows3();
						?>                
					  </div> 

				</div>
        </div>
    </div>

	    <div class="slider-nav">
      <a href="#" class="arrow-prev"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-prev.png"></a>
      <ul class="slider-dots">
        <li class="dot active-dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
      </ul>
      <a href="#" class="arrow-next"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-next.png"></a>
    </div> 


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/app.js"></script>
	<script src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="js/jquery.lazyload.mini.js"></script>
		<script>
			 $(document).ready(function () {
			 $("img").lazyload({effect:"fadeIn"});
			 $("a[rel='colorbox']").colorbox({current:"Picture {current} of {total}"});
			 });
		</script>
  </body>
</html>
