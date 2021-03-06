<?php include('functions.php') 

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
  <link href="css/register.css" rel="stylesheet">

 
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img class="logo "src="img/logoNew.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
           <li class="active"><a href="index.php#intro">Home</a></li>
          <li><a href="allpets.php">Our Pets</a></li>
          <li><a href="index.php#about">About Us</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#portfolio">Portfolio</a></li>
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
  
  <main id="main">
     <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Register Here!</p>
                </div>
                
                <form method="post" action="register.php">
                    <div class="form-content">
                        <form>
                        <div class="row">
                            <div class="errors col-md-12">
                                <p><?php echo display_error(); ?><p>
                            </div>
  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Your Username *" value="<?php echo $username; ?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email *" value="<?php echo $email; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_1" class="form-control" placeholder="Your Password *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_2" class="form-control" placeholder="Confirm Password *" value=""/>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btnSubmit" name="register_btn">Submit</button>
                        <br>
                        <br>
                        <p>
                            Already a member? <a href="login.php">Sign in</a>
                        </p>
   
                    </div>
                </form>     
            </div>
        </div>

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
            <p></p>
            <form action="" method="post">
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
