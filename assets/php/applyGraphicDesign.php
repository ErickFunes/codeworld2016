<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'efunesbarcenas@yahoo.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	Name:  $_POST[name]
  Class Slot: $_POST[class]
  E-Mail: $_POST[email]
  Phone: $_POST[phone]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Applied Graphic Design Course', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code World | Thanks For Submitting!</title>
  <link rel="icon" type="image/ico" href="favicon.ico" />

  <meta name="description" content="Learn the latest coding languages and work towards your way to become a web developer. Classes, after-school programs, & summer programs available for youth and adults">
    <meta name="keywords" content="coding bootcamp, code, coding class, front - end web developer, HTML, CSS, JavaScript, JQuery, twitter bootstrap, zerb foundation, html email, Parse.com, web developer, class, after school program, course, learn code, web developer tutor, tutoring, daly city, san francisco, learn to code, coding, graphic design, graphic-design, graphic design school, graphic designer">

  <!-- CSS -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="../css/simple-line-icons.css" rel="stylesheet" media="screen">
  <link href="../css/animate.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/slippry.css">
    
  <!-- Custom styles CSS -->
  <link href="../css/style.css" rel="stylesheet" media="screen">
    
    <script src="../js/modernizr.custom.js"></script>
       
</head>
<body id="home-after-school">

  <!-- Preloader -->

  <div id="preloader">
    <div id="status"></div>
  </div>
  <!-- Navigation start -->

  <header class="header">

    <nav class="navbar navbar-custom" role="navigation">

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.html">Code <span class="logo icon fa fa-globe"></span> World</a>
        </div>

        <div class="collapse navbar-collapse" id="custom-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../../index.html">Home</a></li>
            <li>
               <select id="courses">
                              <option value="">Courses</option>
                              <option value="webdevelop.html">Web Development</option>
                              <option value="graphic-design.html">Graphic Design</option>
                              <option value="afterschool.html">After-School Program</option>
                          </select>
                        </li>
                        <li><a href="../../scholarships.html">Tuition & Scholarships</a></li>
            <li><a href="../../contact.html">Contact</a></li>
          </ul>
        </div>

      </div><!-- .container -->

    </nav>

  </header>
  <!-- Navigation end -->


<!--main-->
<div class="container" id="services">
  <div class="row">
              <div class="col-xs-12">

          <div class="pfblock-header">
          <h1>Thank You For Submitting. We Will Contact You Shortly!</h1>
            <h2 class="pfblock-title" style="padding-top: 20px;">Start Graphic - Design Application</h2>
            <div class="pfblock-line"></div>
          </div>

        </div>
        <div class="col-xs-12" style="margin-bottom:20px;">

              <form method="post" action="applyGraphicDesign.php">
                <h3>Graphic - Design Course</h3>
                <i class="fa fa-globe" style="font-size:3em;"></i>
                <h3>333 Gellert Blvd. Suite #230 Daly City, CA</h3>
                <p>Bernie (Recruiter & COO): <a href="tel:4155313894">(415)531-3894</a></p>
                <p>Chris (Youth Recruiter & President): <a href="tel:4157064412">(415)706-4412</a></p>
              <p>Erick (Industy Mentor & CEO): <a href="tel:9254319709">(925)431-9709</a></p>
              <p>Email Us: <a href="mail:info@codeworld.io">info@codeworld.io</a></p>
               <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3158.2547241476254!2d-122.4668291!3d37.666722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7beb7ecca213%3A0x6cd4eba96587523b!2s333+Gellert+Blvd%2C+Daly+City%2C+CA+94015!5e0!3m2!1sen!2sus!4v1436563050397"></iframe>
                <hr>
                <label>Your Name: </label><input type="name" name="name" placeholder="Enter Full Name" required>
                <br>
                <label>Class Slot: </label><input type="text" name="class" placeholder="Class 1" required>
                <br>
                <label>Email: </label><input type="email" name="email" placeholder="Enter Email" required>
                <br>
                <p class="antispam">Leave this empty:
                <br /><input name="url" /></p>
                <label>Your Phone: </label><input type="tel" name="phone" placeholder="Enter Telephone" required>
                <br>
                <input type="submit" name="submit">
              </form>
                    
        </div>
        

      
    </div><!--/row-->
</div><!--/container-->
  <!-- Footer start -->

  <footer id="footer">
    <div class="container">
      <div class="row">

      <div class="col-sm-12">
            <ul class="nav-footer">
            <li>
            <a href="../../index.html">Home</a></li>
            <li>
               <a href="../../webdevelop.html">Web Development</a>
                        </li>
                        <li>
               <a href="../../graphic-design.html">Graphic Design</a>
                        </li>
                        <li>
               <a href="../../afterschool.html">After School</a>
                        </li>
                        <li>
                        <a href="../../scholarships.html">Tuition & Scholarships</a>
                        </li>
            <li>
            <a href="../../contact.html">Contact</a>
            </li>
          </ul>
          </div>

        <div class="col-sm-12">

          <ul class="social-links">
            <li><a href="https://www.facebook.com/codeworldbayarea" target="blank" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://www.twitter.com/codeworldpro" target="blank" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://www.instagram.com/codeworldprogram" target="blank" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-instagram"></i></a></li>
            <li><a href="tel:4155313894" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-phone"></i></a></li>
            <li><a href="email:info@codeworld.io" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
          </ul>

          <p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> in The Bay Area
                    </p>
                    <p class="copyright">
                        © 2016 Code World &#0153;
          </p>

        </div>

      </div><!-- .row -->
    </div><!-- .container -->
  </footer>

  <!-- Footer end -->

  <!-- Scroll to top -->

  <div class="scroll-up">
    <a href="#home-after-school"><i class="fa fa-angle-up"></i></a>
  </div>
    
    <!-- Scroll to top end-->

  <!-- Javascript files -->

  <script src="../js/jquery-1.11.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../js/jquery.parallax-1.1.3.js"></script>
  <script src="../js/imagesloaded.pkgd.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/smoothscroll.js"></script>
  <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.easypiechart.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.cbpQTRotator.js"></script>
    <script type="text/javascript" src="../js/slippry.min.js"></script>
  <script src="../js/custom.js"></script>

</body>
</html>