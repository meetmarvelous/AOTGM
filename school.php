<?php
require_once 'include/connect.php';

$query = mysqli_query($dbcon, "SELECT * FROM site_info");
$site = mysqli_fetch_array($query);
if (!$site) {
  die("error in selecting data from blog database");
}

$queryy = mysqli_query($dbcon, "SELECT * FROM church");
$church = mysqli_fetch_array($queryy);
if (!$church) {
  die("error in selecting data from blog database");
}

$queryyy = mysqli_query($dbcon, "SELECT * FROM school");
$school = mysqli_fetch_array($queryyy);
if (!$school) {
  die("error in selecting data from blog database");
}

?>

<!doctype html>
<html lang="en">

<head>

  <!--====== Required meta tags ======-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--====== Title ======-->
  <title> <?php echo $site['webname']; ?> </title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <!--====== Slick css ======-->
  <link rel="stylesheet" href="css/slick.css">

  <!--====== Animate css ======-->
  <link rel="stylesheet" href="css/animate.css">

  <!--====== Nice Select css ======-->
  <link rel="stylesheet" href="css/nice-select.css">

  <!--====== Nice Number css ======-->
  <link rel="stylesheet" href="css/jquery.nice-number.min.css">

  <!--====== Magnific Popup css ======-->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--====== Fontawesome css ======-->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!--====== Default css ======-->
  <link rel="stylesheet" href="css/default.css">

  <!--====== Style css ======-->
  <link rel="stylesheet" href="css/style.css">

  <!--====== Responsive css ======-->
  <link rel="stylesheet" href="css/responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

</head>

<body>

  <!--====== PRELOADER PART START ======-->

  <div class="preloader">
    <div class="loader rubix-cube">
      <div class="layer layer-1"></div>
      <div class="layer layer-2"></div>
      <div class="layer layer-3 color-1"></div>
      <div class="layer layer-4"></div>
      <div class="layer layer-5"></div>
      <div class="layer layer-6"></div>
      <div class="layer layer-7"></div>
      <div class="layer layer-8"></div>
    </div>
  </div>

  <!--====== PRELOADER PART START ======-->

  <!--====== HEADER PART START ======-->

  <header id="header-part">

    <div class="header-top d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="header-contact text-lg-left text-center">
              <ul>
                <li><img src="images/all-icon/map.png" alt="icon"><span>Shelter Afrique, Uyo, Akwa Ibom State</span>
                </li>
                <li><img src="images/all-icon/email.png" alt="icon"><span><?php echo $site['email']; ?></span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="header-opening-time text-lg-right text-center">
              <p>Worship WITH US : EVERY SUNDAY | 9am - 12pm</p>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- header top -->

    <div class="header-logo-support pt-30 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="logo">
              <a href="index.php">
                <img src="images/logo.svg" alt="Logo">
              </a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8">
            <div class="support-button float-right d-none d-md-block">
              <div class="support float-left">
                <div class="icon">
                  <img src="images/all-icon/support.png" alt="icon">
                </div>
                <div class="cont">
                  <p>Help Line</p>
                  <span><?php echo $site['phone']; ?></span>
                </div>
              </div>
              <div class="button float-left">
                <a href="<?php echo $site['whatsapp_link'] ?>" class="main-btn">Apply Now</a>
              </div>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-9 col-8">
            <nav class="navbar navbar-expand-lg">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="about.php">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="school.php">Our School</a>
                  </li>
                  <li class="nav-item">
                    <a href="charity.php">Charity</a>
                  </li>
                  <li class="nav-item">
                    <a href="gallery.php">Our Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </nav> <!-- nav -->
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-4">
            <div class="right-icon text-right">
              <ul>
                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
              </ul>
            </div> <!-- right icon -->
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div>

  </header>

  <!--====== HEADER PART ENDS ======-->

  <!--====== SEARCH BOX PART START ======-->

  <div class="search-box">
    <div class="serach-form">
      <div class="closebtn">
        <span></span>
        <span></span>
      </div>
      <form action="#">
        <input type="text" placeholder="Search by keyword">
        <button><i class="fa fa-search"></i></button>
      </form>
    </div> <!-- serach form -->
  </div>

  <!--====== SEARCH BOX PART ENDS ======-->

  <!--====== PAGE BANNER PART START ======-->

  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
    style="background-image: url(images/sbanner.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>About Our School</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our School</li>
              </ol>
            </nav>
          </div> <!-- page banner cont -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== PAGE BANNER PART ENDS ======-->

  <!--====== ABOUT PART START ======-->

  <section id="about-page" class="pt-70 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-title mt-50">
            <h5>About us</h5>
            <h2>Welcome to AOTGMMS </h2>
            <h3>Ark of Trinity GM Montessori School</h3>

          </div> <!-- section title -->
          <div class="about-cont">
            <?php echo $school['about']; ?>
            <!-- <p>
              This School is dedicated to the training of children in programs of study, activity, and a lifestyle
              that is Bible-centered. Students are trained to adhere to the School’s philosophy and Biblical-based
              programs. We believe that “all things should be done decently and in order” and that our learners
              should be taught to accept responsibility to “walk honorably before all men.”
            </p> -->
          </div>
        </div> <!-- about cont -->
        <div class="col-lg-7">
          <div class="about-image mt-50">
            <img src="images/school.png" alt="About">
          </div> <!-- about imag -->
        </div>
      </div> <!-- row -->
      <div class="about-items pt-60">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="about-singel-items mt-30">
              <span>01</span>
              <h4>Our vision</h4>
              <?php echo $school['vision']; ?>
              <!-- <p>We seek to graduate children that are wholesome, scholarly, skilled and confident. </p> -->
            </div> <!-- about singel -->
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="about-singel-items mt-30">
              <span>02</span>
              <h4>Our Mission</h4>
              <?php echo $school['mission']; ?>
              <!-- <p>Our benefits include:</p>
              <ul>
                <li>Christian faith-based environment and learning</li>
                <li>Loving and charitable learning atmosphere</li>
                <li>Improved grades</li>
                <li>Performance Tutoring</li>
                <li>Innovative learning tools</li>
                <li>Best education strategy</li>
                <li>Extracurricular activities and skills acquisition</li>
                <li>Firm corrective discipline</li>
                <li>Wholesomeness and wellbeing</li>
              </ul> -->
            </div> <!-- about singel -->
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="about-singel-items mt-30">
              <span>03</span>
              <h4>Core Values </h4>
              <?php echo $school['value']; ?>
              <!-- <p>
                This School is dedicated to the training of children in programs of study, activity, and a lifestyle
                that is Bible-centered. Students are trained to adhere to the School’s philosophy and Biblical-based
                programs. We believe that “all things should be done decently and in order” and that our learners
                should be taught to accept responsibility to “walk honorably before all men.”
              </p>
              <p>
                Our bodies are the temples of the Holy Spirit; therefore, we train and educate all our students to
                abstain from anything and everything that could destroy their lives as viewed from a Biblical point.
                We pray that with innovative learning tools and strategies, our students will come out on top.
              </p> -->
            </div> <!-- about singel -->
          </div>
        </div> <!-- row -->
      </div> <!-- about items -->
    </div> <!-- container -->
  </section>

  <!--====== ABOUT PART ENDS ======-->

  <!--====== COUNTER PART START ======-->

  <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/sbanner.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Best</span>
            <p>Education Strategy</p>
          </div> <!-- singel counter -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Performance</span>
            <p>Tutoring</p>
          </div> <!-- singel counter -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Firm</span>
            <p>Corrective Discipline</p>
          </div> <!-- singel counter -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Innovative</span>
            <p>Learning Tools</p>
          </div> <!-- singel counter -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div>

  <!--====== COUNTER PART ENDS ======-->

  <!--====== SCHOOL PART START ======-->

  <section id="event-singel" class="pt-120 pb-120 gray-bg">
    <div class="container">
      <div class="events-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="eventt events-left">
              <h2>Ark of Trinity GM Montessori School (AOTGMMS)</h2>

              <div>
                <h3>1. A. Forward by the Proprietor</h3>
                <p>
                  Dear parents and investors in our children's future, <br>
                  It is so good to see that many of you have joined in this vision to give the best all-round education
                  to our children. Our vision is Christ-based; to raise excellent performing children whose spirit is
                  come alive by the word of God. You will experience a new brilliance and confidence in your children
                  that is awakened by the uniqueness and principles of our teaching strategies.
                </p>
                <p>
                  I trust that we will continue to join hands in prayers for this school project and the growth of our
                  children. We shall all be well pleased.
                </p>
                <p>The Lord bless you, forevermore.</p>
                <p><strong>Reverend (Dr. Mrs.) Victoria Onofiok Kinlock</strong><br>(Proprietor)</p>
              </div>

              <div>
                <h3>2. School Motto</h3>
                <p><strong>Knowledge. Discipline & Charity</strong></p>

                <h5>Knowledge</h5>
                <p><em>Proverbs 17:24</em><br>
                  "An intelligent person aims at wise actions, but a fool starts off in many directions." Oh Lord, teach
                  us wisdom, knowledge, and understanding.</p>

                <h5>Discipline</h5>
                <p>Rules are there to promote order and discipline within any organisation. <em>Deuteronomy 8:5</em>
                  states: "Know then in your heart that as a man disciplines his son, so the Lord your God disciplines
                  you." This is not a corrective institution; consequently, we ask that a child not be enrolled with the
                  idea that he will be reformed. We are here to work with the home, but not take the place of Parents
                  who have experienced difficulty in fulfilling their roles.</p>

                <h5>Charity</h5>
                <p>Charity begins at home and it is the firm foundation of our being and very existence. <em>Acts
                    20:35</em><br>
                  "In all things I have shown you that by working hard in this way we must help the weak and remember
                  the words of the Lord Jesus, how he himself said, ‘It is more blessed to give than to receive.'" All
                  our ventures have these bases. We will teach these values to the children, so that the world will be a
                  better place.</p>

                <h3>3. School Anthem & Pledge</h3>
                <p><i>1. OUR DEAR AOTGM MONTESSORI SCHOOL<br>
                    OUR HEARTS AND TONGUES ARE FILLED UP<br>
                    WITH PRAISES AND THANKS<br>
                    FOR VALUABLE TRAINING IN YOU<br>
                    THAT WE CAN'T BUT SAY IT LOUD<br>
                    WE'RE PROUD OF YOUR LEGACY<br>
                    AND YOUR GREAT VISION</i>
                </p>
                <p><i>2. WE WILL UPHOLD OUR MOTTO<br>
                    KNOWLEDGE, DISCIPLINE, CHARITY<br>
                    AND WITH ALL OUR EFFORTS<br>
                    WE WILL BE THE BEST<br>
                    BY RENOUNCING EVERY EVIL<br>
                    AND OBEYING ALL THE SCHOOL RULES<br>
                    KNOWLEDGE, DISCIPLINE, CHARITY<br>
                    THAT WILL BE OUR GUIDE</i>
                </p>

<!-- 
                <h3>2. General School Rules</h3>

                <h4>A. School Days Schedule</h5>

                  <h5>(i) Arrival and Departure Policy</h6>
                    <p>Students are to be in school on these days and at the stipulated time except an alteration is
                      announced:</p>
                    <ul>
                      <li>Nursery School - 7am to 1pm {Monday to Friday}</li>
                      <li>Primary School - 7am to 2pm {Monday to Friday}</li>
                      <li>Secondary School - 7am to 3pm {Monday to Friday}</li>
                    </ul>
                    <p>School premises opens by 6:30am. Teachers are to arrive by 7am. Morning devotion starts by
                      7:45am.
                      Classes begin in earnest by 9:00am.</p>
                    <ul>
                      <li>Arrival on time and lateness will be checked as we're working on encouraging our kids to be
                        time
                        conscious.</li>
                      <li>Any child that comes to school later than 8:30am without prior notice and authorization will
                        not
                        attend classes for that day and will be sent home.</li>
                      <li>School closes at: Nursery - 1pm, Primary - 2pm, and Secondary - 3pm.</li>
                      <li>No child is expected to remain at the school premises later than 4pm as this will attract a
                        penalty on the parent or guardian.</li>
                      <li>If someone else needs to pick up the child, please communicate with the head of school, as no
                        child will be allowed to go home with any stranger except the child comes and goes back by
                        themselves.</li>
                      <li>All teachers, students, and parents must sign in and out with the appropriate time to enable
                        us to
                        maintain security consciousness.</li>
                      <li>No one is allowed out of the school premises without due permission granted or except school
                        dismisses for the day.</li>
                    </ul>

                    <h5>(ii) Break Times</h5>
                    <ul>
                      <li>Break time is for socializing, eating, and playing.</li>
                      <li>No student is allowed in the Learning Centre during break time, unless permission is given by
                        a
                        tutor.</li>
                      <li>Students might be in the Learning Centre during break time if detention is being served, and a
                        Supervisor or Monitor is present.</li>
                      <li>No student is allowed to leave the school premises during break times or any other activity
                        supervised by a teacher without permission from staff.</li>
                      <li>Students are not allowed to play in the bathroom.</li>
                      <li>No running, screaming, or making noise on the steps, stairways, veranda, and corridors.</li>
                      <li>Students may not engage in any illegal activities during break times or school hours, e.g.,
                        smoking, using/abusing alcohol or drugs, bullying, vandalizing, graffiti, or other misconduct.
                      </li>
                      <li>After break time, students must go speedily to their respective classrooms and ensure they are
                        neat and properly dressed.</li>
                    </ul>

                    <h5>(iii) General</h5>
                    <ul>
                      <li>Students should attend school clean and properly dressed.</li>
                      <li>Students must be punctual regarding all activities.</li>
                      <li>All littering will be treated as an offense.</li>
                      <li>No furniture may be removed or damaged.</li>
                      <li>Students should respect Principals, Supervisors, Monitors, fellow students, and workers.</li>
                      <li>Students must attend every school day as indicated on the school calendar for Nigerian
                        government
                        schools.</li>
                      <li>Students must participate in all compulsory school activities and programs.</li>
                      <li>A scripture passage must be memorized monthly to encourage character development.</li>
                    </ul>

                    <h5>(iv) Open Day Policy</h5>
                    <ul>
                      <li>The open day is scheduled once a term, typically in the 7th week of the academic session. This
                        helps parents interact with teachers regarding their child's activities and progress.</li>
                      <li>Parents will also review assessment booklets and discuss expectations for the next academic
                        session.</li>
                    </ul> -->
              </div>

              <div>
                <h3>4. Curriculum Overview</h3>
                <p>AOTMS follows a well-structured curriculum designed to foster academic excellence, critical thinking, and holistic development. It aligns with national and international standards to ensure students receive a high-quality education. Our small class sizes and student-centered teaching approaches encourage personalized learning, thereby preparing your child for future success. The key features are as follows:</p>
                <ul>
                  <li><strong>Core Subjects:</strong> A strong foundation in Mathematics, Science, English language, and Civic Education.</li>
                  <li><strong>Technology Integration and Practical:</strong> Hands-on learning in Science, Technology, Engineering, and Mathematics and Pro-vocational studies.</li>
                  <li><strong>Arts & Creativity:</strong> Phonics, Music, drama, and visual arts to enhance creativity and self-expression. This also gives an opportunity for extracurricular activities and field trips.</li>
                  <li><strong>Physical Education:</strong> Sports and fitness programs to promote health and teamwork.</li>
                  <li><strong>Personal Development:</strong> Leadership, communication, seminars, and problem-solving skills integrated into lessons.</li>
                </ul>

                <h3>5. School Rules and Regulations</h3>
                <p>The importance of general school rules, emphasizing discipline, safety, and a positive learning environment is an important part of Ark of Trinity Montessori Schools as it ensures smooth operations and the well-being of students and staff. Our key rules include:</p>
                <ul>
                  <li><strong>Punctuality:</strong> Students must arrive on time for classes and school activities. Our school opens by 7:45am and closes at 1pm for nursery, 2pm for primary, and 3pm for secondary; from Mondays to Fridays.</li>
                  <li><strong>Respect for Authority:</strong> Teachers and staff should be treated with courtesy and respect. Also, respect for school property as we teach our children to take care and cherish the little they have. Our parents are also our top priority, just like our pupils; we encourage you not to miss out on our open day as we get to receive your earnest feedback and suggestions.</li>
                  <li><strong>Proper Uniform:</strong> Students must wear the prescribed school uniform neatly, this is also an aspect of our cleanliness and hygiene.</li>
                  <li><strong>No Bullying:</strong> Any form of bullying or harassment is strictly prohibited. We encourage good classroom conduct as we all work towards creating a fun learning atmosphere coated with God's protection and love.</li>
                  <li><strong>Academic Integrity:</strong> Cheating or plagiarism in exams and assignments is not tolerated. Nelson Mandela once said: "Education is a powerful tool that can change our world"; in order to achieve this, we strive for originality and stay productive.</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== SCHOOL PART ENDS ======-->

  <!--====== PATNAR LOGO PART START ======-->

  <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
    <div class="container">
      <div class="row patnar-slied">
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-1.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-2.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-3.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-4.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-2.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-3.png" alt="Logo">
          </div>
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div>

  <!--====== PATNAR LOGO PART ENDS ======-->

  <!--====== FOOTER PART START ======-->

  <?php
  include("footer.php");
  ?>

  <!--====== FOOTER PART ENDS ======-->

  <!--====== BACK TO TOP PART START ======-->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!--====== BACK TO TOP PART ENDS ======-->










  <!--====== jquery js ======-->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>

  <!--====== Bootstrap js ======-->
  <script src="js/bootstrap.min.js"></script>

  <!--====== Slick js ======-->
  <script src="js/slick.min.js"></script>

  <!--====== Magnific Popup js ======-->
  <script src="js/jquery.magnific-popup.min.js"></script>

  <!--====== Counter Up js ======-->
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>

  <!--====== Nice Select js ======-->
  <script src="js/jquery.nice-select.min.js"></script>

  <!--====== Nice Number js ======-->
  <script src="js/jquery.nice-number.min.js"></script>

  <!--====== Count Down js ======-->
  <script src="js/jquery.countdown.min.js"></script>

  <!--====== Validator js ======-->
  <script src="js/validator.min.js"></script>

  <!--====== Ajax Contact js ======-->
  <script src="js/ajax-contact.js"></script>

  <!--====== Main js ======-->
  <script src="js/main.js"></script>

  <!--====== Map js ======-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
  <script src="js/map-script.js"></script>

</body>

</html>