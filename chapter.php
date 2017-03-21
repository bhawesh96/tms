
<!DOCTYPE html>
<html>
<head>
<title>The Mathitis Society</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Enlighten Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/bootstrap.min.js"></script>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!---->
<link href='//fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!---->
</head>
<body>
 <div class="header head">
	<div class="container">
	<div class="header-menu">
		<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		 
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.html">Home </a></li>
			<li><a href="about.html">About</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="services.html">Services1</a></li>
				<li><a href="services1.html">Services2</a></li>
				<li><a href="services2.html">Services3</a></li>
				<li><a href="icons.html">Icons</a></li>
			  </ul>
			</li>
			 <li><a href="gallery.html">Gallery</a></li>
			  <li><a href="typo.html">Short Codes</a></li>
			 <li><a href="contact.html">Contact</a></li>
			 
		  </ul>
		 
			  
		 
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- start search-->
	
				<div class="search-box">
				   <div id="sb-search" class="sb-search">
					 <form action="#" method="post">
						 <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						 <input class="sb-search-submit" type="submit" value="">
						 <span class="sb-icon-search"> </span>
					</form>
					</div>
				 </div>
				 <!--search-scripts-->
				 <script src="js/classie.js"></script>
				 <script src="js/uisearch.js"></script>
				   <script>
					 new UISearch( document.getElementById( 'sb-search' ) );
				   </script>
					<!--//search-scripts-->
					<div class="clearfix"></div>
</div>
		<div class="number">
			<p>+123456789</p>
		</div>
		
		<div class="logo two">
			<a href="index.html"><img src="images/logo.png" alt=""><span>E</span>NLIGHTEN</a>
	    </div>
		
	</div> 
</div>			
	
		<!---->
		<div class="feature w3ls-agileits">
			<div class="container">
				<div class="feature-top">
					<!-- <label></label> -->
					<h3>Chapters</h3>
				</div>
				<div class="feature-grid">

				<?php 

					include_once 'conn.php';

					$sql = "SELECT * FROM chapters WHERE 1";
					$result = mysql_query($sql);

					if(mysql_num_rows($result) > 0){
						try{
							while($row = mysql_fetch_assoc($result)){
								$image_link = $row['image_link'];
								$city = $row['city'];
								$address = $row['address'];

								print"
					<div class='col-md-4 feature-grid myitem'>

					  	<h5><a href='single.php?city=$city'>$city</a></h5>
					 	<div class='fe-grid'>
					 		<i class='glyphicon glyphicon-map-marker'></i>
					 		<div class='feature-text'>
					 			<p>$address</p>
					 		</div>
					 		<div class='clearfix'></div>
					 	</div>
					 	<a href='single.php?city=$city'><img src='images/$image_link' class='img-responsive' alt=''></a>
					 	<a href='single.php?city=$city' class='read'> Read More</a>
					 </div>

					 			";
							}
						}
						catch (Exception $e){
						    	echo $e;
						    }
						}
				else{
						echo 'error';
						echo mysql_error();
					}
					

				?>
					
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
		<!--map-->
			<div class="map-top CRIBBL Services-agileinfo">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833" ></iframe>
				<span></span>
				</div>
					<div class="address">
					<label></label>
						<h4>Consectetur adipisicing</h4>
						<p>Sed do eiusmod tempor incididunt ut</p>
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
				</div>
				<!--//map-->
				<!---->
				<div class="container">
				<div class="content-bottom wthree-agileinfo">
					<div class="col-md-4 address-grid">
								<h5>Address</h5>
								<p>Lorem ipsum dolor,
								TL 19034-88974</p>
							
						</div>
						<div class="col-md-4 address-grid ">
							
							<h5>Our Phone</h5>
								<p>+123456789</p>
							
						</div>
						<div class="col-md-4 address-grid ">
							
							<h5>Email</h5>
								<p><a href="mailto:info@example.com"> Lorem@example.com</a></p>
							
						</div>
						<div class="clearfix"> </div>	
					
					</div>
				</div>
		<!--//-->
	
	<!--//content-->
<!--footer-->
	<div class="footer w3ls-agileits">
				<div class="container">
					<p class="footer-class">&copy; 2017 Enlighten. All Rights Reserved | Design by  <a href="http://CRIBBL Services.com/" target="_blank">CRIBBL Services</a> </p>
					<section id="set-9">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#set-9" class="hi-icon "><i></i></a>
					<a href="#set-9" class="hi-icon "><i class="ic"></i></a>
					<a href="#set-9" class="hi-icon "><i class="ic1"></i></a>
					<a href="#set-9" class="hi-icon "><i class="ic2"></i></a>
				</div>
			</section>
			</div>
		</div>
		<!--//footer-->

</body>
</html>