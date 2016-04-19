<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'efunesbarcenas@yahoo.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	Date: $_POST[date]
  Name:  $_POST[name]
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
	mail($youremail, 'Visitation Request For Graphic Design Course', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Code World | Learn To Code & Graphic Design For Youth & Adults No Skills Needed! | Thanks For Submitting!</title>
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
<body id="home-webdev">

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
               <select class="active" id="courses">
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
    <section id="home-graphic" class="pfblock-image screen-height">
        <div class="home-overlay-web"></div>
    <div class="intro">
      <span class="logo icon fa fa-globe"style="font-size: 3em;"></span>
      <h1>Thank You For Submitting. We Will Contact You Shortly!</h1>
      <h1>Graphic - Design</h1>
      <div class="start">8 1/2 week evening course</div>
      <h3>Learn More Below</h3>
    </div>

        <a href="#services">
    <div class="scroll-down">
            <span>
                <i class="fa fa-angle-double-down fa-2x"></i>
            </span>
    </div>
        </a>

  </section>
  <!-- Navigation end -->


<!--main-->
<div class="container" id="services">
  <div class="row">
      <!--left-->
      <div class="col-sm-12 col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <li><a href="#sec0">course info</a></li>
          <li><a href="#sec1">curriculum</a></li>
          <li><a href="#sec2">learning team</a></li>
          <li><a href="#sec3">dates & location</a></li>
          <li><a href="#sec4">schedule visit</a></li>
          <li><a href="#sec5">payment plans</a></li>
          <li><a href="../../apply-graphic-design.html" class="action-button shadow animate green">apply</a></li>
        </ul>
      </div><!--/left-->
      <!--right-->
      <div class="col-xs-12 col-sm-12 col-md-9">
        <div id="sec0" class="block">
          <div class="col-xs-6 col-sm-6">
            <div class="round">
              <i class="fa fa-language in-round"></i>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6">
            <h3>Latest Web Typography</h3>
            <p>Use the latest trends to style your website PSD's & learn problem-solving through the correct use of typography, space, image and color. .</p>
          </div>
          <div class="col-xs-6">
            <div class="round">
              <i class="fa fa-eye in-round"></i>
            </div>
          </div>
          <div class="col-xs-6">
            <h3>Visual Communication</h3>
            <p>Conceptualize and execute projects for a specific target audience. Create a body of work that demonstrates their creativity, analytical thinking and expertise in graphic design techniques.</p>
          </div>
          <div class="col-xs-6">
            <div class="round">
              <i class="fa fa-glass in-round"></i>
            </div>
          </div>
          <div class="col-xs-6">
            <h3>Logo & Branding</h3>
            <p>Learn to combine typography and images to create a wide variety of designs such as magazine and newspaper advertisements, television storyboards, product packaging and displays. zUse design to clearly communicate both a corporate image and a personal identity.</p>
          </div>
        </div>
        <br>
        <hr class="divider">
        <br>
        <div id="sec1">   
            <h2>The Content In Depth</h2>
        <div id="integration-list">
            <ul>
                <li>
                    <a class="expand">
                        <div class="right-arrow">+</div>
                        <div>
                            <h2>Unit One</h2>
                            <span>Identify, Employ and Document</span>
                        </div>
                    </a>

                    <div class="detail">
                        <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                            <div id="sup">
                                <div><span>Identify, employ and document a basic design process, i.e.—define, research, ideate, prototype, select, implement and evaluate.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="expand">
                        <div class="right-arrow">+</div>
                        <h2>Unit Two</h2>
                        <span>Create and Develop Effectively Articulated Visuals</span>
                    </a>

                    <div class="detail">
                        <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                            <div id="sup">
                                <div><span>Create and develop effectively articulated visual form in response to communication problems, defining and successfully employing the elements and principles of design. Develop appropriate basic concepts that satisfy the objectives of defined visual communication problems, recognizing that design exists within—social, cultural, cognitive and historic contexts.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="expand">
                        <div class="right-arrow">+</div>
                        <h2>Unit Three</h2>
                        <span>Identify How Formal Compositions Communicate and Utilize Syntactical and Semantic Aspects</span>
                    </a>

                    <div class="detail">
                        <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                            <div id="sup">
                                <div><span>Identify and discuss how formal compositions communicate. Create visual communications that present an appropriate message and that will resonate with the intended audience or audiences. Examine and utilize the basic syntactical and semantic aspects of typography, demonstrating basic normative typography skills—alignment, leading, rags, hierarchy, use of a grid, etc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="expand">
                        <div class="right-arrow">+</div>
                        <h2>Unit Four</h2>
                        <span>Attitudes/Professional Behaviors</span>
                    </a>

                    <div class="detail">
                        <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                            <div id="sup">
                                <div><span>Meet assigned deadlines. Accept and apply critiques. Analyze and discuss work using industry specific terminology.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
       </div> 
        <hr id="sec2">

        <div>
          <h2>Meet The Mentors & Support Group</h2>
          <p>
            Your experience here at this establishment is a group effort to help you get the most efficiency of your time. Our staff are professionals working in the tech field everyday so they can keep up with the latest trends to impliment into our curriculum. 
          </p>
          <div class="pfblock-line"></div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                <div class="staff">
                  <img class="staff-img" src="../images/Rico-headshot2.jpg">
                </div>
                <br>
                <h3 style="text-align:center">Industy Mentors</h3>
                <div class="pfblock-line"></div>
                <p>Learn industry-grade frameworks, tools, syntax, and best practices from a teacher whose daily work involves using them expertly.</p>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="staff">
                  <img class="staff-img" src="../images/chris.png">
                </div>
                <br>
                <h3 style="text-align:center">Youth Advisor & Recuiter</h3>
                <div class="pfblock-line"></div>
                <p>Our advisors make sure all your questions are answered & help make sure the program is best for your student.</p>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="staff">
                  <img class="staff-img" src="../images/bernie-staff.jpg">
                </div>
                <br>
                <h3 style="text-align:center">Professional Specialist & Recruiter</h3>
                <div class="pfblock-line"></div>
                <p>Our professional specialists & recruiters make sure our course is exactly what you need. They give you key advice to be seen by employers & other professionals threw your resume, LinkedIn, & your personal website.</p>
              </div>
            </div>
        </div>
        <hr>
        
        <div id="sec3">
          <div class="container">
      <div class="row">

        <div class="col-sm-6 col-sm-offset-1">

          <div class="pfblock-header">
            <h2 class="pfblock-title">Our Location & Dates</h2>
            <div class="pfblock-line"></div>
            
          </div>

        </div>

      </div><!-- .row -->

      <div class="row">

         <div class="col-sm-5 map-content">
                                <address>
                                    <h3>Daly City Office</h3>
                                    <p>333 Gellert Blvd. <br>
                                    Daly City, CA 94015</p>
                                    <p>Phone:(415) 531-3894 <br>
                                    Email Address: <a href="mailto:info@codeworld.io">info@codeworld.io</a></p>
                                </address>
                                </div>
                                <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3158.2547241476254!2d-122.4668291!3d37.666722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7beb7ecca213%3A0x6cd4eba96587523b!2s333+Gellert+Blvd%2C+Daly+City%2C+CA+94015!5e0!3m2!1sen!2sus!4v1436563050397"></iframe>
                        </div>
                    </div>      
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-offset-1" style="text-align:left;">
            <h2>Summer A</h2>
                <i class="fa fa-calendar fontup"></i><span class="fontup">  Start: June 09, 2016 - Augest 4, 2016</span> 
                <br>
                <i class="fa fa-clock-o fontup"></i><span class="fontup">  Thursday & Friday 6:00P.M. - 9:00P.M.</span>
                <br>
                <p class="fontup">Graphic-Design:101</p>
          </div>
        </div>

      </div><!-- .row -->
        </div>
        <hr>
        <div id="sec4">
          <h2>Come Visit Us</h2>
          <p>
            See if this program is a best fit for you. Meet the Code World team and speak to an instructor, get an overview of the program curriculum, and learn the benefits of being a student at Code World.</p>
            <div class="pfblock-line"></div>
              <form method="post" action="visitGraphicDesign.php">
                <h3>Graphic Design Course</h3>
                <i class="fa fa-globe" style="font-size:3em;"></i>
                <h3>333 Gellert Blvd. Suite #230 Daly City, CA</h3>
                <hr>
                <label>Date: </label><input type="date" name="date" required>
                <br>
                <label>Your Name: </label><input type="name" name="name" placeholder="Enter Full Name" required>
                <br>
                <label>Email: </label><input type="email" name="email" placeholder="Enter Email" required>
                <br>
                <p class="antispam">Leave this empty:
                <br /><input name="url" /></p>
                <label>Your Phone: </label><input type="tel" name="phone" placeholder="Enter Telephone" required>
                <br>
                <input type="submit" name="submit">
              </form>

          <br>
        </div>
        <hr>
        <div id="sec5">
          <h2>Payment Options</h2>
          <p>
            Need payment options? Our financing options allow you to focus on your goals instead of the barriers that keep you from reaching them. Also apply for the <a href="../../scholarships.html">Code World Scholarship!</a>
          </p>
          <div class="pfblock-line"></div>
          <div class="tab">

          <ul class="tabs">
              <li>Option 1</li>
              <li>Option 2</li>
          </ul> <!-- / tabs -->

          <div class="tab_content">

              <div class="tabs_item">
                  <h2>Pay Upfront For 10% Off!</h2>
                  <ul>
                      <li style="list-style:none;font-size:20px;">1,000USD
                      <br>
                      -100USD (10%)
                      <br>
                     Total: 900USD
                      </li>

                  </ul>
           </div> <!-- / tabs_item -->

        <div class="tabs_item">
            <h2>Pay a deposit of 200USD & Have 3 installment payments of 267USD!</h2>
            <h3>Also you can apply for the <a href="scholarships.html">Code World Scholarship</a> for possible grant!</h3>
        </div> <!-- / tabs_item -->
        
    </div> <!-- / tab_content -->
</div> <!-- / tab -->
        </div>
        </div><!--/right-->
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
    <a href="#home-webdev"><i class="fa fa-angle-up"></i></a>
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