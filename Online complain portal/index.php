<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Complain portal</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-	md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>Spu.ac.in</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav"><?php
					if(isset($_SESSION['name'])==''){?>
						<a href="login.php"  class="btn btn-success">Login</a>
					<?php } else{
						?><a href="profie.php"  class="btn btn-success"><?php echo "welcome  ".$_SESSION["name"]; ?></a>
					<?php }?>

                      <li><a href="https://www.facebook.com/spuni/"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="https://twitter.com/spuvsn?lang=en"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="http://spu.ac.in/"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="https://www.linkedin.com/school/department-of-mca-sankalchand-patel-college-of-engineering-sfi-visnagar.-529/"><span class="fa fa-linkedin"></span></a></li>
                      <li><a href="https://www.youtube.com/channel/UCNMXxHH-PG7F_Dp6Ru7Stuw"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>Sakalchand Patel University</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" style="float:right" class="nav navbar-nav navbar-right main-nav">
		 
	   <li class="active"><a href="index.html">Home</a></li>
	   
                      
            <li><a href="gallary.php">Gallery</a></li>
                     
           <?php
					if(isset($_SESSION['name'])==''){?>
						<li><a href="login.php">complain</a></li>
					<?php } else{
						?><li><a href="complain.php"  >complain</a></li>
					<?php }?>
             
			 
			 <?php
					if(isset($_SESSION['name'])==''){?>
						<li><a href="login.php">Profile</a></li>
					<?php } else{
						?><li><a href="profie.php">Profile</a></li>
					<?php }?>
			 
			
          <!--  <li><a href="404.html">404 Page</a></li>-->               
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/my.jpg " alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To Sakalchand Patel University</h4>
        <span></span>
        <h2>We Will Help You To Learn</h2>
        <p>As an entrepreneur, you’ll be doing a lot of learning -- if you want to be successful, that is. You’ll learn skills, which you can apply to your daily tasks and operations; facts and information about your industry, vendors and competition; and of course lessons on how to improve yourself..</p>
        <a href="https://www.entrepreneur.com/article/299219" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/2spu.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Establish in 2016</h4>
        <span></span>
        <h2>Best Education  Ever</h2>
        <p>After Establishing a quality education benchmark almost in every education domain. We are now heading towards to extend our educational contribution to the society by entering in to the MEDICINE domain. Join Us to be part of this Quality Education system. Keep Visiting for more details..</p>
        <a href="http://spu.ac.in/" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/1spu.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Exclusivly For Education</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <p>Our highly trained teachers are driven by reimaging learning, providing a free world-class education for all children. Providing Innovating learning keeping students fully engaged ensuring the opportunity to thrive. Inspiring greater interest in all educational programs..</p>
        <a href="https://collegedunia.com/university/60429-sankalchand-patel-university-spu-mehsana/faculty" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Learn Online</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Expert Teachers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Best Classrooms</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>Nootan Sarva Vidyalaya Kelavani Mandal (NSVKM) was established in the year 1952 by Shri Sankalchand Patel, a freedom fighter and a social entrepreneur, with the objective of working towards educational and socio-cultural needs of the people in North Gujarat. Since 2014, under the dynamic leadership of Hon’ble Chairman, Shri Prakash Patel, the trust has successfully achieved its goal to fulfill educational needs in the area through the Nootan Education Group consisting of 2 schools and 13 colleges on two separate campuses. The Trust began its first educational activity with the setting-up of a school known as Nootan High School, Visnagar...</p>
                  <ul>
                    <li>The university has a Nootan Medical College and Research Centre.</li>
                    <li>The Sankalchand Patel University campus offers various facilities to the learners like a library, hostel facilities, computer lab, canteen, medical facilities etc. </li>
       
                    <li>Sankalchand Patel University is one of the leading educational institutions in the entire Northern Gujarat region.</li>
                  </ul>
                  <p>Students not only are exposed to a world-class education at the Sankalchand Patel University Visnagar but are exposed to several things that focus on their all-round development. Students are never short of any opportunity to showcase their inner artistic and literary creative talents. </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
               
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/5lrVxfyc-nI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">568</h4>
                  <p>Subjects</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">3500</h4>
                  <p>Students</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4 class="counter">65</h4>
                  <p>Modern Lab</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">250</h4>
                  <p>Teachers</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Our Features</h2>
              <p>Variousn Classifications</p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>Professional Courses</h4>
                    <p>Engineering and Technology (BTech, MTech and PhD), Management Studies (BBA, MBA, Integrated MBA and PhD), Computer Science (BCA, MCA, PGDCA and PhD), Science (BSc, MSc and PhD), Commerce (BCom, MCom and PhD), Dental Sciences (BDS, MDS and PhD), Physiotherapy (BPT), Nursing (ANM, GNM, BSc and MSc).</p>
                    <a href="https://www.collegedekho.com/colleges/courses-sankalchand-university">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Expert Teachers</h4>
                    <p>Expert teachers are aware of what they are doing; they monitor and adjust their teaching behaviours to bring out the best in their students. One of the reasons that teaching is a complex business is because it revolves around decision making.
</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Online Learning</h4>
                    <p>Online learning is education that takes place over the Internet. It is often referred to as “e- learning” among other terms. However, online learning is just one type of “distance learning” - the umbrella term for any learning that takes place across distance and not in a traditional classroom.</p>
                    <a href="https://collegedunia.com/university/60429-sankalchand-patel-university-spu-mehsana/faculty">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-microphone"></span>
                    <h4>Audio Lessons</h4>
                    <p>When properly amplified, sound in a classroom improves students' attention and thus their interactions increase. In other words, students learn and retain more through increased hearing ability. Classroom amplification systems allow students to hear more clearly and learn more..</p>
                    <a href="https://collegedunia.com/university/60429-sankalchand-patel-university-spu-mehsana/faculty">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Video Lessons</h4>
                    <p>A video lesson or lecture is a video which presents educational material for a topic which is to be learned. ... Such lectures are a key part of flip teaching in which the initial work of communicating the essentials of the topic is done by the video lesson.</p>
                    <a href="https://collegedunia.com/university/60429-sankalchand-patel-university-spu-mehsana/faculty">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-certificate"></span>
                    <h4>Professional Certificate</h4>
                    <p>Certificate courses in arts stream are applicable for aspirants who are looking forward to enhancing their knowledge and skills in a specific area of specialisation. These courses help students to secure jobs in organisations that specifically require candidates who have knowledge in a specific specialisation.</p>
                    <a href="https://collegedunia.com/university/60429-sankalchand-patel-university-spu-mehsana/faculty">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Sakalchand Ptel University.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-1.jpeg" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Shri.Sakalchand Patel</h4>
                  <span>Founder of Intitute</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Sakalchand Ptel University.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-2.jpeg" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Shri.Bholabhai Patel</h4>
                  <span>Ex chairmen</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Sakalchand Ptel University</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-2.jpg" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Shri.PrakashBhai Patel</h4>
                  <span> Current chairmen</span>
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your feedback">
                  <button class="mu-subscribe-btn" type="submit">Feedback!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>Sakalchand patel Colage Visnagar, Gujarat</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.spu.ac.in</p>
                  <p>Email: </p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	 <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by Nikunjgiri Goswamy <a href="http://www.n9ikiswamy.com/" rel="nofollow">sakal chand patel university</a></p>
        </div>
		
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>

  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  </body>
  </html>