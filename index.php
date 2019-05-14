<?php 
	include('functions.php');
      

?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Oshkosh Area Humane Society</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span></span></a></h1> -->
        <a href="#intro" class="scrollto"><img class="logo "src="img/logoNew.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="allpets.php">Our Pets</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Newest</a></li>
          <!--<li><a href="#team">Team</a></li>-->
          <li class="drop-down"><a href="">Info</a>
            <ul>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="team.php">Our Team</a></li>
            </ul>
          </li>
          
          <li><a href='login.php' class="loginbtn"><u><strong>Login</strong></u></a></li>
          <li><a href="index.php?logout='1'">Logout</a></li>
          <li><?php  if (isset($_SESSION['user'])) : ?>
              <a href="admin.php"><strong><?php echo $_SESSION['user']['username']; ?></strong><?php endif ?></a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <!---<img src="img/intro-img.svg" alt="" class="img-fluid">--->
      </div>

      <div class="intro-info">
          <h2>Personal Space is<br><strong><span>Overrated.</span></strong><br>Adopt Today!</h2>
        <div>
          <a href="allpets.php" class="btn-get-started scrollto">See All Pets</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">
    <?php /*if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif*/ ?>   
      <!--==========================
      About Us Section
    ============================-->
      <section id="about">
          <div class="container">

              <header class="section-header">
                  <h3>About Us</h3>
                  <p>The Oshkosh Area Humane Society’s purpose is to provide shelter and care to lost, homeless, unwanted, abandoned and abused animals. In accordance with our Life Saving Mission, we pledge every healthy and treatable animal will receive the opportunity to find a loving home.</p>
              </header>

              <div class="row about-container">

                  <div class="col-lg-6 content order-lg-1 order-2">
                      <p>
                          <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
                      </p>

                      <div class="icon-box wow fadeInUp">
                          <a href="allpets.php"><div class="icon"><i class="fa fa-paw"></i></div></a>
                          <h4 class="title"><a href="pets.php">See All Pets</a></h4>
                          <p>&nbsp;&nbsp;&nbsp; Click here to see our available animals</p>
                      </div>

                      <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                          <a href=""><div class="icon"><i class="fa fa-heart"></i></div></a>
                          <h4 class="title"><a href="">Adoption Process</a></h4>
                          <p>&nbsp;&nbsp;&nbsp; how to adopt your next companion</p>
                      </div>

                      <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                          <a href=""><div class="icon"><i class="fa fa-dollar"></i></div></a>
                          <h4 class="title"><a href="">Donate Now</a></h4>
                          <p>&nbsp;&nbsp;&nbsp; All donations support animals in need</p>
                      </div>

                  </div>

                  <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                      <img src="img/ashelter.png" class="img-fluid" alt="">
                  </div>
              </div>

          </div>
      </section><!-- #about -->
     <!--==========================
      Featured Pets Section
    ============================-->
      <section id="why-us" class="wow fadeIn">
          <div class="container">
              <header class="section-header">
                  <h3>Featured Pets</h3>
                  
              </header>

              <div class="row row-eq-height justify-content-center">

                  <div class="col-lg-4 mb-4">
                      <div class="card wow bounceInUp">
                          <img class="feat-img img-responsive" src="img/Rayna-ball.jpg" />
                          <div class="card-body">
                              <h5 class="card-title">Rayna</h5>
                              <p class="card-text">I am a snuggly, sweet girl who loves tennis balls, stuffies, and couches. My foster home has described me as "perfectly behaved." Can't get much better than that! I do have a medical issue that requires medication but thanks to the people who care about me, 2 whole years of my medicine is sponsored!</p>
                              <a href="allpets.php" class="readmore">See All Dogs</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 mb-4">
                      <div class="card wow bounceInUp">
                          <img class="feat-img img-responsive" src="img/Oskar.jpg" />
                          <div class="card-body">
                              <h5 class="card-title">Oskar</h5>
                              <p class="card-text">Behold the wise, sweet gentleman that is me, Oskar. There's nothing I like better than pets and snuggles on the couch. I'm an older gent so I'd prefer my new home to be on the quiet, chill side. With a couch. Does that sound good to you?</p>
                              <a href="allpets.php" class="readmore">See All Cats</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 mb-4">
                      <div class="card wow bounceInUp">
                          <img class="feat-img img-responsive" src="img/Saturn.jpg" />
                          <div class="card-body">
                              <h5 class="card-title">Saturn</h5>
                              <p class="card-text">I am a sweet piggie that can be a bit bashful at first, but if you give me some time I will show you all the love I have to give! I would do best with another guinea pig to hang out with and keep me company.</p>
                              <a href="allpets.php" class="readmore">See All Small Animals</a>
                          </div>
                      </div>
                  </div>
               
              </div>
          </div>

          <!--==========================
      Services Section
    ============================-->
          <section id="services" class="section-bg">
              <div class="container">

                  <header class="section-header">
                      <h3 style="color: black;">Information & Services</h3>
                      <p></p>
                  </header>

                  <div class="row">

                      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                          <a href="allpets.php"><div class="box" style="color: #000;">
                              <div class="icon"><i class="ion-ios-paw-outline" style="color: #ff689b;"></i></div>
                              <h4 class="title">Our Pets</h4>
                              <p class="description">Click here to see all our pets</p>
                          </div></a>
                      </div>
                      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                          <div class="box">
                              <div class="icon"><i class="ion-android-globe" style="color: #e9bf06;"></i></div>
                              <h4 class="title"><a href="">Our Vision</a></h4>
                              <p class="description">Click here to see our vision</p>
                          </div>
                      </div>

                      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                          <a href="team.php"><div class="box" style="color: #000;">
                              <div class="icon"><i class="ion-ios-people-outline" style="color: #3fcdc7;"></i></div>
                              <h4 class="title">The Team</h4>
                              <p class="description">Click here to see our staff</p>
                              </div></a>
                      </div>
                      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                          <div class="box">
                              <div class="icon"><i class="ion-ios-telephone-outline" style="color:#41cf2e;"></i></div>
                              <h4 class="title"><a href="">Contact Us</a></h4>
                              <p class="description">Click here to contact us</p>
                          </div>
                      </div>

                      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                          <div class="box">
                              <div class="icon"><i class="ion-ios-calendar-outline" style="color: #b7accf;"></i></div>
                              <h4 class="title"><a href="">Calendar & Events</a></h4>
                              <p class="description">Click here to see what going on with OAHS</p>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                          <div class="box">
                              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                              <h4 class="title"><a href="">Location & Hours</a></h4>
                              <p class="description">Click here to see hours and location</p>
                          </div>
                      </div>

                  </div>

              </div>
          </section><!-- #services -->
          <!--==========================
      Why Us Section
    ============================-->
          <div class="row counters">

              <div class="col-lg-4 col-6 text-center">
                  <span data-toggle="counter-up">1,329</span>
                  <p>Adoptions Last Year</p>
              </div>

              <div class="col-lg-4 col-6 text-center">
                  <span data-toggle="counter-up">21</span>
                  <p>Years Of Support</p>
              </div>

              <div class="col-lg-4 col-6 text-center">
                  <span data-toggle="counter-up">34</span>
                  <p>Hard Workers</p>
              </div>

          </div>

          <!--</div>-->
      </section>

      <!--==========================
      Portfolio Section
    ============================-->
      <section id="portfolio" class="clearfix">
          <div class="container">

              <header class="section-header">
                  <h3 class="section-title">Our Newest Friends</h3>
              </header>
              <br>
                <?php latest(); ?>
             
              </div>

          </div>
      </section><!-- #portfolio -->
      <!--==========================
      Testimonials Section
    ============================-->
      <section id="testimonials" class="section-bg">
          <div class="container">

              <header class="section-header">
                  <h3>Testimonials</h3>
              </header>

              <div class="row justify-content-center">
                  <div class="col-lg-8">

                      <div class="owl-carousel testimonials-carousel wow fadeInUp">

                          <div class="testimonial-item">
                              <img src="img/test_1.jpg" class="testimonial-img" alt="">
                              <h3>Hilary Ince</h3>
                              <h4>Adopter</h4>
                              <p>
                                  "The Misha & Gretchen (kittens) are doing great overall! They settled into their new environment fairly quickly. It has been many years since getting a new forever pet, so the tips provided during the adoption session were very helpful."
                              </p>
                          </div>

                          <div class="testimonial-item">
                              <img src="img/test_2.jpg" class="testimonial-img" alt="">
                              <h3>Whitney Pitzlin</h3>
                              <h4>Adopter</h4>
                              <p>
                                  "I can't say enough good things about OAHS. They truly care about the animals and want what's best for them. I visited a few times searching for two bonded cats. They led us to Vincent and Jules (formerly Ziggles) and it was meant to be. I couldn't be happier with the boys and can't thank OAHS for allowing us to bring them into our home."
                              </p>
                          </div>

                          <div class="testimonial-item">
                              <img src="img/test_3.jpg" class="testimonial-img" alt="">
                              <h3>Kristopher Ulrich</h3>
                              <h4>Adopter</h4>
                              <p>
                                  "OAHS has been excellent to work with. Where our pup was concerned, they made sure that he was ready to go with his vaccinations and fixing before we took him home. Our dog Moose was well treated by OAHS prior to our adoption. My family was treated well by all staff members, and we were impressed by the education provided by their experts during the adoption process. We are deeply grateful to OAHS, and we highly recommend working with them."
                              </p>
                          </div>

                          <div class="testimonial-item">
                              <img src="img/test_4.jpg" class="testimonial-img" alt="">
                              <h3>Sue and Neil Verwey</h3>
                              <h4>Adopter</h4>
                              <p>
                                  "I wanted to compliment the staff at the Oshkosh Area Humane Society, especially Ann. My husband and I adopted a dog on April 2 who we loved and still do. Because of some unforeseen issues we reluctantly returned her to OAHS. I was very emotionally upset. Ann was so caring and understanding of my state of mind. Last week she called to say "Gracie" had been adopted which is helping me move forward Oshkosh and the surrounding communities are fortunate to have the OAHS that displays an outstanding commitment to the welfare of animals and the people who love them. Thank you!"
                              </p>
                          </div>

                          <div class="testimonial-item">
                              <img src="img/test_5.jpg" class="testimonial-img" alt="">
                              <h3>Jean Cherveny Schlais</h3>
                              <h4>Adopter</h4>
                              <p>
                                  "Wonderful process for adopting our cats, everything went so smooth and we now have the best pets anybody could ask for. Cat class very helpful, I can not say enough about this facility."
                              </p>
                          </div>

                      </div>

                  </div>
              </div>


          </div>
      </section><!-- #testimonials -->
      

      <!--==========================
      Contact Section
    ============================-->
      <section id="contact">
          <div class="container-fluid">

              <div class="section-header">
                  <h3>Contact Us</h3>
              </div>

              <div class="row wow fadeInUp">

                  <div class="col-lg-6">
                      <div class="map mb-4 mb-lg-0">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2868.019414231006!2d-88.53250928462002!3d44.04165437910987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803ebb10152206f%3A0x5f5e4342868f5177!2sOshkosh+Area+Humane+Society!5e0!3m2!1sen!2sus!4v1556393926507!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                      </div>
                  </div>

                  <div class="col-lg-6">
                      <div class="row">
                          <div class="col-md-5 info">
                              <i class="ion-ios-location-outline"></i>
                              <p>1925 Shelter Ct, Oshkosh WI 54901</p>
                          </div>
                          <div class="col-md-4 info">
                              <i class="ion-ios-email-outline"></i>
                              <p>info@oahs.org</p>
                          </div>
                          <div class="col-md-3 info">
                              <i class="ion-ios-telephone-outline"></i>
                              <p>(920)-424-2128</p>
                          </div>
                      </div>

                      <div class="form">
                          <div id="sendmessage">Your message has been sent. Thank you!</div>
                          <div id="errormessage"></div>
                          <form action="" method="post" role="form" class="contactForm">
                              <div class="form-row">
                                  <div class="form-group col-lg-6">
                                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                      <div class="validation"></div>
                                  </div>
                                  <div class="form-group col-lg-6">
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                      <div class="validation"></div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                  <div class="validation"></div>
                              </div>
                              <div class="form-group">
                                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                  <div class="validation"></div>
                              </div>
                              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                          </form>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Oshkosh Area Humane Society</h3>
            <p> </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              1925 Shelter Ct.<br>
              Oshkosh, WI  54901<br>
              United States <br>
              <strong>Phone:</strong>(920) 424-2128<br>
              <strong>Email:</strong> info@oahs.org<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Newsletter</p>
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
