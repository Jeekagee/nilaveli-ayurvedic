<?php include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ayurveda Health Centre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+94 262 050 060</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">info@ayurveda-nilaveli-resort.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="#" class="mr-3">Sign Up</a><a href="#">Sign In</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index.php#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="management.php" class="nav-link"><span>Management</span></a></li>
	          <li class="nav-item"><a href="location.php" class="nav-link"><span>Location</span></a></li>
	          <li class="nav-item"><a href="climate.php" class="nav-link"><span>Climate</span></a></li>
	          <li class="nav-item"><a href="arrival-departure.php" class="nav-link"><span>Arrival/Departure</span></a></li>
			  <li class="nav-item"><a href="trips.php" class="nav-link"><span>Trips</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/img_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread"><?php content("health-main-head");?></h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Ayurveda Health Centre<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
            <h2 class="mb-3"><?php content("ayurvedahealth-content-head");?></h2>
            <p><?php content("ayurvedahealth-content-msg1");?></p>
            <p>
              <img src="images/img_25.jpg" alt="" class="img-fluid">
            </p>
            <p><?php content("ayurvedahealth-content-msg2");?></p>
            
              <img src="images/img_9.jpg" alt="" class="img-fluid">
            </p>
            
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
		

    <footer class="ftco-footer ftco-section img img" style="background-image: url(images/img_13.jpg);">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php content("footer-h1");?></h2>
              <p><?php content("footer-h1-msg");?></p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2"><?php content("footer-h2");?></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h2-msg1");?></a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h2-msg2");?></a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h2-msg3");?></a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h2-msg4");?></a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h2-msg5");?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php content("footer-h3");?></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h3-msg1");?> </a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h3-msg2");?></a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h3-msg3");?></a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span><?php content("footer-h3-msg4");?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2"><?php content("footer-h4");?></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php content("footer-h4-msg1");?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php content("footer-h4-msg2");?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text"><?php content("footer-h4-msg3");?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p>© Ayurveda-Zentrum Nilaveli 2020</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>