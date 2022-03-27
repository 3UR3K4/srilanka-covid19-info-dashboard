

<?php
 
$url='https://hpb.health.gov.lk/api/get-current-statistical';
  
$rdJson = file_get_contents($url);
$euDecode = json_decode($rdJson, true);
 
	$datetime = $euDecode['data']['update_date_time'];
	$lcNewCases = $euDecode['data']['local_new_cases'];
	$lcAllCases = $euDecode['data']['local_total_cases'];
	$lcDeath = $euDecode['data']['local_deaths'];
	$lcRecovered = $euDecode['data']['local_recovered'];
	$totalIndi = $euDecode['data']['local_total_number_of_individuals_in_hospitals']; 
 
	$glNewCases = $euDecode['data']['global_new_cases'];
	$glAllCases  = $euDecode['data']['global_total_cases'];
	$glNewDeath = $euDecode['data']['global_new_deaths']; 
	$glDeath  =$euDecode['data']['global_deaths']; 
	$glRevovered =$euDecode['data']['global_recovered'];  
  
  $totalCase = $lcNewCases+$lcAllCases;
 
 
?>
 
<html lang="en">
  <head>
    <title>COVID19 - SRILANKA STATUS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
      <script src="https://kit.fontawesome.com/669f7d7761.js" crossorigin="anonymous"></script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0"><center>COVID19<span class="text-primary"></center></span> </a></h1>
          </div>

     
          </div>


          
        </div>
      </div>

    </header>


    <div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">

            <img src="images/2.png" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1>COVID-19 Situation In SriLanka</h1>
                <p class="mb-5">For further information, Contact “Suwasariya”.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Call 1919</a>
                </div>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="features-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">COVID-19 Situation Report</h2>
            <p class="lead">This might take several minutes to be updated,since we are issuing verified data from reliable sources..</p>
			 <h3 class="section-title">Date and Time</h3>
			<p class="lead"><h6 class="section-title" ><?php echo $datetime; ?> </h6></p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-user-injured"></span></span>
              </div>
              <div>
                <h3>Total Cases</h3>
                  <p><font color="#ff1493"><h1><?php echo $lcAllCases; ?></h1></font></p>
                 
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-ambulance"></span></span>
              </div>
              <div>
                <h3>New Cases</h3>
                  <p> <font color="orange"><h1><?php echo $lcNewCases; ?></h1> </font></p>
              
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-hospital"></span></span>
              </div>
              <div>
                <h3>Individuals in Hospitals</h3>
                  <p><font color="blue"><h1><?php echo $totalIndi; ?></h1></font></p>
               
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-skull"></span></span>
              </div>
              <div>
                <h3>Deaths</h3>
                  <p> <font color="red"><h1><?php echo $lcDeath; ?></h1></font></p>
               
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="fas fa-heart"></span></span>
              </div>
              <div>
                <h3>Recovered And Discharged</h3>
                  <p><font color="green"><h1> <?php echo $lcRecovered; ?> </h1></font></p>
                
              </div>
            </div>


          </div>



        </div>
      </div>
    </div>




    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">About Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="images/1.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4 h3 font-weight-bold">About API</h2>
            <p class="mb-4">We Are Providing this Information From The Health Promotion Bureau (HPB) is the centre of excellence in Sri Lanka API.</p>

            <h5 class="text-black mb-4 h3 font-weight-bold">Special Thanks</h5>

            <ul class="ul-check mb-5 list-unstyled success">
              <li>HPB - SriLanka</li>
              <li>Arimac - SriLanka</li>	 
            </ul>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>


      </div>
    </div>





    <div class="site-section testimonial-wrap bg-light" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">COVID-19 Symptoms</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/person_3.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Difficulty in breathing&rdquo;</p>
              </blockquote>



            </div>
          </div>
          <div>
            <div class="testimonial">

              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/person_2.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
              </figure>

              <blockquote class="mb-3">
                <p>&ldquo;Sore throat&rdquo;</p>
              </blockquote>




            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/person_5.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Fever &rdquo;</p>
              </blockquote>



            </div>

          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="images/person_1.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Cough&rdquo;</p>
              </blockquote>



            </div>

          </div>

        </div>
    </div>

    <! –– ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="site-section testimonial-wrap bg-light" id="testimonials-section2">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">COVID-19 Prevention Methods</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
        <div>
          <div class="testimonial">
            <figure class="mb-4 d-block align-items-center justify-content-center">
              <div><img src="images/mask.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
            </figure>
            <blockquote class="mb-3">
              <p>&ldquo;Use A Face Mask&rdquo;</p>
            </blockquote>



          </div>
        </div>
        <div>
          <div class="testimonial">

            <figure class="mb-4 d-block align-items-center justify-content-center">
              <div><img src="images/wash.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
            </figure>

            <blockquote class="mb-3">
              <p>&ldquo;Wash Your Hands Often&rdquo;</p>
            </blockquote>




          </div>
        </div>

        <div>
          <div class="testimonial">
            <figure class="mb-4 d-block align-items-center justify-content-center">
              <div><img src="images/cough.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
            </figure>
            <blockquote class="mb-3">
              <p>&ldquo;Cover Your Mouth When Cough &rdquo;</p>
            </blockquote>



          </div>

        </div>

        <div>
          <div class="testimonial">
            <figure class="mb-4 d-block align-items-center justify-content-center">
              <div><img src="images/crowd.png" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
            </figure>
            <blockquote class="mb-3">
              <p>&ldquo;Avoid crowded places&rdquo;</p>
            </blockquote>



          </div>

        </div>

      </div>
    </div>




    <div class="footer py-5 text-center">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
              <a href="#" class="p-3"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-3"><span class="icon-pinterest"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; All rights reserved | Digitally crafted by Heshan Basnayaka
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  
  </body>
</html>
