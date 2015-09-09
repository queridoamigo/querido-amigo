<!DOCTYPE html>
<html>

  <head>
	<?php
		include("includes/links.php");	
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

<?php

function completeRows() {

	$linksPics[0] = array("thumb" => "https://farm1.staticflickr.com/506/19401739228_248e7fa5a7_n.jpg", "fullsize" => "https://farm1.staticflickr.com/506/19401739228_248e7fa5a7_c.jpg");
	$linksPics[1] = array("thumb" => "https://farm1.staticflickr.com/264/20151032216_40dfb8280f_n.jpg", "fullsize" => "https://farm1.staticflickr.com/264/20151032216_40dfb8280f_c.jpg");
	$linksPics[2] = array("thumb" => "https://farm1.staticflickr.com/506/19828357310_5d5789d621_n.jpg", "fullsize" => "https://farm1.staticflickr.com/506/19828357310_5d5789d621_c.jpg");
	$linksPics[3] = array("thumb" => "https://farm6.staticflickr.com/5822/19997280023_a37cc32e73_n.jpg", "fullsize" => "https://farm6.staticflickr.com/5822/19997280023_a37cc32e73_c.jpg");
	$linksPics[4] = array("thumb" => "https://farm1.staticflickr.com/538/20485737746_a0771c2943_n.jpg", "fullsize" => "https://farm1.staticflickr.com/538/20485737746_a0771c2943_c.jpg");
	$linksPics[5] = array("thumb" => "https://farm4.staticflickr.com/3771/19552191951_a431197caf_n.jpg", "fullsize" => "https://farm4.staticflickr.com/3771/19552191951_a431197caf_c.jpg");

	$rows = 
            "
            <div class=\"row\"> ";

	foreach($linksPics as $row => $value) {
			$rows .=" 
					<div class='col-md-4'>
							<div class='thumbnail'>
							<a class='cboxElement' rel='colorbox' href='". $value['fullsize'] ."' style='outline: none' > <img src='". $value['thumb'] ."' style='border: 1px solid #456;' alt='Lorem ipsum dolor sit amet...' />
							</a> 
							</div>
					</div>
					";
	}

	$rows .= " 
				</div> 
				";

	echo $rows;
}

?>
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
