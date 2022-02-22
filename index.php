<?php include 'connection.php';
//hi
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nilaveli Ayurveda Health Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
  
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  	<?php
	  if (!isset($_SESSION["language"])) {
		  ?>
		<script>
		$(document).ready(function(){
		$("#myModal").modal('show');
		});
		</script> 
		<?php
	  }
	  ?>
	
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"> 
  <!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ayurveda</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
				<p>Select your Language</p>
				<a href="language.php?language=eng" class="btn btn-success">English</a>
				<a href="language.php?language=dut" class="btn btn-primary">Deutsch</a>
            </div>
        </div>
    </div>
</div> -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDiscount">Launch
  modal</button>

    <!--Modal: modalDiscount-->
    <div class="modal fade right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <div class="text-center">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="false" class="white-text">&times;</span>
            </button>
			<div class="img-responsive">
					<p class="text-center">Welcome to</p>
                  <img src="/ayurvedic-nilaveli-resort.kodplex.com/images/img_36.jpg"  style="width:50%">
			</div>  
			</div>
          </div>

          <!--Body-->
          <div class="modal-body">

            <div class="row">
              <div class="col-3">
                <p></p> 
              </div>
              <div class="col-6">
                <p class="text-center">
                  <strong>Select Your Language</strong>
                </p>
              </div>
            </div>
          </div>

          <!--Footer-->
          <div class="col text-center" style="padding: 1rem;">
	  		<div class="row">
				  <div class="col-md-6">
            		<a href="language.php?language=dut" style="width:100%" class="btn btn-danger">Deutsch</a>
				  </div>
            		
				   <div class="col-md-6">
            		<a href="language.php?language=eng" style="width:100%" class="btn btn-outline-danger waves-effect" >English</a>
				</div>
			</div>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: modalDiscount-->
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
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span>
							</div>
							<a href="mailto:info@ayurveda-nilaveli-resort.com"><span class="text">info@ayurveda-nilaveli-resort.com</span>
					    </div>
				    </div>
			    </div>
		    </div>
		</div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><?php content("home-head"); ?></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#department-section" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
					<li class="nav-item"><a href="#blog-section" class="nav-link"><span>More</span></a></li>
					<li class="nav-item cta mr-md-2">
						<button type="button" class="btn btn-default btn-sm" style="padding-top: 0.8rem" data-toggle="modal" data-target="#myModal">Select Language</button>
					</li>
					
					                     
				</ul>
			</div>
	    </div>
	</nav>
	  
	<section class="hero-wrap js-fullheight" style="background-image: url('images/img_1.jpg');" data-section="home" data-stellar-background-ratio="0.5">
		<div class="overlay">
		</div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 pt-5 ftco-animate">
					<div class="mt-5">
						<span class="subheading"><?php content("home-msg1");?></span>
						<h1 class="mb-4"><?php content("home-msg2"); ?>
						<p class="mb-4"><?php content("home-msg3"); ?></p>
						<p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/img_2.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<h2 class="mb-4"><?php content("about-msg1"); ?></h2>
								<p><?php content("about-msg2");?></p>
								<p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5">
						  <div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4"><?php content("services-h1");?></h2>
							<h4 class-"mb-4"><?php content("services-msg1");?></h4>
						  </div>
						</div>
						<div class="row">
							<div class="col-md-4 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-flex">
							  <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
							  <div class="media-body pl-md-4">
								<h3 class="heading mb-3"><?php content("services-h2");?></h3>
								<p><?php content("services-msg2");?></p>
							  </div>
							</div>      
						  </div>
						  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-flex">
							  <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
							  <div class="media-body pl-md-4">
								<h3 class="heading mb-3"><?php content("services-h3");?></h3>
								<p><?php content("services-msg3");?></p>
							  </div>
							</div>      
						  </div>
						  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services d-flex">
							  <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
							  <div class="media-body pl-md-4">
								<h3 class="heading mb-3"><?php content("services-h4");?></h3>
								<p><?php content("services-msg4");?></p>
							  </div>
							</div>      
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-intro img" style="background-image: url(images/img_24.jpg);">
		<div class="overlay">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<h2><?php content("services-h5");?></h2>
					<p><?php content("services-msg5");?></p>
					<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/img_6.jpg);">
					</div>
    			</div>
				<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<a href="" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
	<section class="ftco-facts img ftco-counter" style="background-image: url(images/img_13.jpg);">
		<div class="overlay">
		</div>
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-md-5 heading-section heading-section-white">
					<!-- <span class="subheading"><?php content("services-msg6");?></span>
					<h2 class="mb-4"><?php content("services-msg7");?></h2> -->
					<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
				</div>
				<div class="col-md-7">
					<div class="row pt-4">
						<div class="">
							<div class="block-18">
								<!-- <div class="text">
									<strong class="number" data-number="30">0</strong>
									<span>Years of Experienced</span>
								</div> -->
							</div>
						</div>
						<div class="">
							<div class="block-18">
								<!-- <div class="text">
									<strong class="number" data-number="4500">0</strong>
									<span>Happy Patients</span>
								</div> -->
							</div>
						</div>
						<div class="">
							<div class="block-18">
								<!-- <div class="text">
									<strong class="number" data-number="84">0</strong>
									<span>Number of Doctors</span>
								</div> -->
							</div>
						</div>
						<div class="">
							<div class="block-18">
								<!-- <div class="text">
									<strong class="number" data-number="300">0</strong>
									<span>Number of Staffs</span>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4"><?php content("blog-h1");?></h2>
            <p><?php content("blog-msg1");?></p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single-ayurveda.php" class="block-20" style="background-image: url('images/img_8.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
				  <div>
					  <div class="tagcloud">
						<a href="overview-treatments.php">Overview Treatments</a>
						<a href="treatments.php">Treatments</a>
						<a href="treatments-process.php">Treatments Process</a>
						<a href="diagnosis.php">Diagnoses</a>
						<a href="herbal-medicine.php">Herbal Medicine</a>
						<a href="nutrition.php">Nutrition</a>
					  </div>
					</div>
                </div>
                <h3 class="heading"><a href="#"><?php content("blog-h2");?></a></h3>
                <p><?php content("blog-h2-msg");?></p>
                <p><a href="single-ayurveda.php" class="btn btn-primary py-2 px-3">Learn more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single-ayurveda-health.php" class="block-20" style="background-image: url('images/img_7.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
					<div class="tagcloud">
						<a href="management.php">Management</a>
						<a href="location.php">Location</a>
						<a href="climate.php">Climate</a>
						<a href="arrival-departure.php">Arrival/Departure</a>
						<a href="trips.php">Trips</a>
					</div>
                </div>
                <h3 class="heading"><a href="#"><a href="#"><?php content("blog-h3");?></a></h3>
                <p><?php content("blog-h3-msg");?></p>
                <p><a href="single-ayurveda-health.php" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>
			
			<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single-Yoga.php" class="block-20" style="background-image: url('images/img_19.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#"></a></div>
                  <div><a href="#"></a></div>
                </div>
                <h3 class="heading"><a href="#"><?php content("blog-h4");?></a></h3>
                <p><?php content("blog-h4-msg");?></p>
                <p><a href="single-Yoga.php" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>
			
        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single-accomodation.php" class="block-20" style="background-image: url('images/img_15.jpg');">
              </a>
              <div class="text d-block">
				  <div class="meta mb-3">
					<div class="tagcloud">
						<a href="lagoon-beach.php">Lagoon and Beach</a>
					</div>
				  </div>
                <h3 class="heading"><a href="#"><?php content("blog-h5");?></a></h3>
                <p><?php content("blog-h5-msg");?></p>
                <p><a href="single-accomodation.php" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single-social-commitment.php" class="block-20" style="background-image: url('images/img_18.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#"></a></div>
                  <div><a href="#"></a></div>
                </div>
                <h3 class="heading"><a href="#"><?php content("blog-h6");?></a></h3>
                <p><?php content("blog-h6-msg");?></p>
                <p><a href="single-social-commitment.php" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="single-impression.php" class="block-20" style="background-image: url('images/img_20.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
					<div class="tagcloud">
						<a href="feedback.php">Feed back</a>
					</div>
				  </div>
                <h3 class="heading"><a href="#"><?php content("blog-h7");?></a></h3>
                <p><?php content("blog-h7-msg");?></p>
                <p><a href="single-impression.php" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>
			<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="prices.php" class="block-20" style="background-image: url('images/img_36.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#"></a></div>
                  <div><a href="#"></a></div>
                </div>
                <h3 class="heading"><a href="#"><?php content("blog-h8");?></a></h3>
                <p></p>
                <p><a href="prices.php" class="btn btn-primary py-2 px-3">Book Now</a></p>
              </div>
            </div>
        	</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
				  <a href="#contact-section" class="block-20" style="background-image: url('images/img_36.jpg');">
				  </a>
				  <div class="text d-block">
					<div class="meta mb-3">
					  <div><a href="#"></a></div>
					  <div><a href="#"></a></div>
					</div>
					<h3 class="heading"><a href="#"><?php content("blog-h9");?></a></h3>
					<p></p>
					<p><a href="#contact-section" class="btn btn-primary py-2 px-3">Read more</a></p>
				  </div>
				</div>
        	</div>
			<div class="col-md-4 ftco-animate">
				<div class="blog-entry">
				  <a href="faq.php" class="block-20" style="background-image: url('images/img_36.jpg');">
				  </a>
				  <div class="text d-block">
					<div class="meta mb-3">
					  <div><a href="#"></a></div>
					  <div><a href="#"></a></div>
					</div>
					<h3 class="heading"><a href="#"><?php content("blog-h10");?></a></h3>
					<p></p>
					<p><a href="faq.php" class="btn btn-primary py-2 px-3">Read more</a></p>
				  </div>
				</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading"><?php content("read-testimonials");?></span>
            <h2 class="mb-4"><?php content("read-testimonials-h1");?></h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/img_37.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4"></p>
                    <span class="position"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/img_37.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4"></p>
                    <p class="name"></p>
                    <span class="position"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/img_37.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4"></p>
                    <p class="name"></p>
                    <span class="position"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/img_37.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4"></p>
                    <p class="name"></p>
                    <span class="position"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/img_37.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4"></p>
                    <p class="name"></p>
                    <span class="position"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"><?php content("contact-h");?></h2>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4"><?php content("contact-h2");?></h3>
	            <p><?php content("address");?></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4"><?php content("contact-h3");?></h3>
	            <p><a href="tel://1234567920">+94 262 050 060</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4"><?php content("contact-h4");?></h3>
	            <p><a href="mailto:info@ayurveda-nilaveli-resort.com"><?php content("email");?></a></p>
				<p><a href="mailto:ayurveda14@hotmail.com">ayurveda14@hotmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4"><?php content("contact-h5");?></h3>
	            <p><a href="#"><?php content("website");?></a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

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