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
                <a href="<?php echo $site['whatsapp_link']?>" class="main-btn">Apply Now</a>
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
              <h2>SCHOOL HANDBOOK</h2>
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
<!-- 
              <div>
                <h4>B. Our Vision</h4>
                <p>We seek to graduate children that are wholesome, scholarly, skilled, and confident.</p>
              </div>

              <div>
                <h4>C. Our Mission</h4>
                <p>Our benefits include:</p>
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
                </ul>
              </div>

              <div>
                <h4>D. Core Values</h4>
                <p>
                  This School is dedicated to the training of children in programs of study, activity, and a lifestyle
                  that is Bible-centered. Students are trained to adhere to the School’s philosophy and Biblical-based
                  programs. We believe that “all things should be done decently and in order” and that our learners
                  should be taught to accept responsibility to “walk honorably before all men.”
                </p>
                <p>
                  Our bodies are the temples of the Holy Spirit; therefore, we train and educate all our students to
                  abstain from anything and everything that could destroy their lives as viewed from a Biblical point.
                  We pray that with innovative learning tools and strategies, our students will come out on top.
                </p>
              </div> -->

              <div>
                <h4>B. School Motto</h4>
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

                <h4>C. School Anthem & Pledge</h4>
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
                    </ul>
              </div>

              <!-- <h3>3. School Fees, Enrollment, and Withdrawal Policy</h3>

              <p>All new students are admitted on probation for the first six weeks.</p>

              <h4>(i) Admission Form</h4>
              <ul>
                <li>The sum of N2,000.00 is reserved for the purchase of the admission form, which is mandatory and is
                  the first step for a child's enrollment.</li>
              </ul>

              <h4>(ii) School Fees</h4>
              <p>School fees are mandatory for every child as they help the school provide the best learning experience
                and a conducive environment.</p>
              <p>Current fees for 2024/2025:</p>
              <h5>HQ & City Fees</h5>
              <ul>
                <li>Nursery/Primary (AOTGM): N15,000</li>
                <li>Nursery/Primary (Others): N20,000</li>
                <li>Secondary (JS1 - JS3, AOTGM): N25,000</li>
                <li>Secondary (JS1 - JS3, Others): N30,000</li>
              </ul>

              <h5>Village Fees</h5>
              <ul>
                <li>Nursery/Primary (AOTGM): N10,000</li>
                <li>Nursery/Primary (Others): N15,000</li>
                <li>Secondary (JS1 - JS3, AOTGM): N20,000</li>
                <li>Secondary (JS1 - JS3, Others): N25,000</li>
              </ul>
              <p>Fees will be reviewed next school year 2025/2026.</p>
              <p>Fees do not include books.</p>

              <h4>(iii) Registration Fee</h4>
              <p>The registration fee covers the cost of school uniforms. The cost of uniforms is based on the current
                cost of production.</p>

              <h5>Uniform Costs</h5>
              <ul>
                <li>Boys - Nursery Uniform: N12,000</li>
                <li>Girls - Nursery Uniform: N12,000</li>
                <li>Boys - Primary Uniform: N14,000</li>
                <li>Girls - Primary Uniform: N14,000</li>
                <li>Secondary School Uniform (Boys/Girls): N26,500</li>
              </ul>
              <h5>Details</h5>
              <ul>
                <li><strong>Boys - Nursery Uniform:</strong> 1x shorts, 1x shirt, 2 pairs of white socks, 1 pair of
                  sportswear.</li>
                <li><strong>Girls - Nursery Uniform:</strong> 1x dress, 2 pairs of white socks, 1 pair of sportswear.
                </li>
                <li><strong>Boys - Primary Uniform:</strong> 1x shorts, 1x shirt, 2 pairs of white socks, 1 pair of
                  sportswear.</li>
                <li><strong>Girls - Primary Uniform:</strong> 1x pinafore, 1x shirt, 2 pairs of white socks, 1 pair of
                  sportswear.</li>
                <li><strong>Secondary School Uniform:</strong> 1x trousers/skirt, 1x shirt, 1x blazer, 2 pairs of black
                  socks, 1 pair of white socks, 1 pair of sportswear.</li>
              </ul>
              <p>All students must wear uniforms with black cover shoes. Sportswear is worn with white canvas.</p>

              <h5>Uniform by Level</h5>
              <h6>Preschool and Nursery</h6>
              <ul>
                <li>Monday to Thursday:</li>
                <ul>
                  <li>Boys: Small print light blue Gingham shirt and gray shorts.</li>
                  <li>Girls: Small print light blue Gingham dress.</li>
                </ul>
              </ul>

              <h6>Primary</h6>
              <ul>
                <li>Monday to Thursday:</li>
                <ul>
                  <li>Boys: Large print dark blue Gingham shirt, gray shorts.</li>
                  <li>Girls: Large print dark blue Gingham shirt, gray pinafore.</li>
                </ul>
              </ul>

              <h6>Secondary</h6>
              <ul>
                <li>Monday to Thursday:</li>
                <ul>
                  <li>Boys/Girls: Maroon trousers/skirts, maroon blazer, light blue shirt, dark blue tie, black shoes,
                    and black socks.</li>
                </ul>
                <li>Friday: All pupils and students wear school sportswear - black shorts, white t-shirt, white socks,
                  and white canvas.</li>
              </ul>

              <h5>Hair Policy</h5>
              <ul>
                <li>Boys: Low cut only, no plaiting or accessories.</li>
                <li>Girls: Low cut, weaving, or fully plaited hair. No extensions, beading, or accessories.</li>
              </ul>

              <p>All payments must be made on or before resumption, and an official receipt will be issued as evidence
                of payment.</p>
              <p>No refund of fees after payment, even if the parent withdraws the child or the child stays away for
                other reasons.</p>
              <p>One-day attendance requires school fees payment.</p>
              <p>A child whose fees are not complete will not be allowed to complete their term assessments.</p>

              <h3>4. Absence and Attendance</h3>

              <ul>
                <li>A written excuse signed by a parent must be presented to the supervisor when a learner returns to
                  school after being absent.</li>
                <li>If the absence is foreseeable, a note should be sent in advance.</li>
                <li>Medical, dentist, music, and other appointments should be scheduled after school hours.</li>
                <li>Absence for reasons other than sickness or emergencies will only be excused if advance arrangements
                  were made with the supervisor/principal and the learner is sufficiently ahead in their work.</li>
                <li>If a student needs to leave school during the day, the supervisor must receive a note from the
                  parents or the parents must phone the principal's office before the student will be allowed to leave.
                </li>
              </ul>

              <h4>(i) Excessive Absence</h4>
              <ul>
                <li>Excessive absence will inhibit the student's progress.</li>
                <li>If, in the administration's opinion, the absence is unnecessary, the student will be considered
                  truant.</li>
                <li>A doctor's certificate is required if a learner is absent for more than two consecutive days.</li>
                <li>A learner is considered late if they are not in the learning environment on time.</li>
                <li>A learner arriving late must present a note to the principal explaining the reasons for lateness.
                </li>
                <li>Continued lateness will result in a conference with the parents and the principal, possibly leading
                  to revocation of privileges or suspension.</li>
                <li>A letter from the parent is required for absences of one or two days.</li>
                <li>Absences longer than two days require a doctor's certificate to be presented.</li>
                <li>Learners absent for more than 20 days per annum for reasons other than illness could face expulsion.
                </li>
              </ul>


              <h3>5. CURRICULUM POLICY</h3>

              <h4>(i) Curriculum</h4>

              <h4>(ii) Projects and Assignments</h4>
              <ul>
                <li>The AOTGMMS supports the place of projects and/or assignments in the school curricula.</li>
                <li>The aim of projects and/or assignments is to provide opportunities for research, creativity,
                  thinking skills, and problem-solving.</li>
                <li>The supervisors undertake to ensure that the projects are properly spaced over the year and that the
                  aims and goals of the projects will be clearly communicated to the learners.</li>
                <li>The learner is to submit the completed project and/or assignment on the set due date. Marks may be
                  forfeited, upon the discretion of the supervisor, if deadlines are not met or if work is not submitted
                  or submitted incompletely.</li>
              </ul>

              <h4>(iii) Communication Booklet Policy</h4>
              <ul>
                <li>Each child will be given a communication booklet in which the teacher will fill in emergency
                  information and a weekly report of the child's character and learning personality.</li>
                <li>Parents may also use the communication booklet to pass necessary information to the teacher as
                  related to the character and learning personality of their wards.</li>
                <li>All comments must follow with a signatory.</li>
              </ul>

              <h4>(iv) Plagiarism</h4>
              <ul>
                <li>To get answers from the Score Keys is strictly forbidden and a serious offence to the ACE model.
                </li>
                <li>If plagiarism is detected, disciplinary consequences will follow with suspension and/or expulsion.
                </li>
              </ul>

              <h4>(v) Class and Behavior Policy</h4>
              <ul>
                <li>Just as positive behavior attracts rewards and recommendations, we encourage our children, teachers,
                  and parents to follow that path as the opposite will follow negative responses, discipline, and
                  sanctions.</li>
                <li>A parent must take responsibility for his or her child's indiscipline.</li>
                <li>The classroom is a designated space where teaching and learning occur.</li>
                <li>Teachers and pupils must handle all classroom equipment with care, as a caution fee applies to
                  mismanagement.</li>
                <li>Each student is expected to participate in class activities and discussions, keep the classroom
                  clean, and organize it.</li>
                <li>We encourage academic integrity as pupils are advised to avoid plagiarism when given assignments and
                  projects to work on. Each must be submitted on the expected date as this will help build an all-round
                  child—in character and learning.</li>
              </ul>

              <h4>(vi) Grading and Assessment Policy</h4>
              <p>
                Our grading system provides an overall evaluation of the child. We observe two class tests and an
                examination at the end of the term, which will make up 70% of the child's result, including rating the
                social, physical, and emotional behavior of the child in terms of participation and contributions to
                school activities, punctuality, etc. (psychomotor and affective assessment).
              </p>
              <p>
                <strong>Grades:</strong><br>
                A - 85-100%<br>
                B - 70-84%<br>
                C - 55-69%<br>
                D - 45-54%<br>
                E - 35-44%<br>
                F - 0-34%
              </p>

              <h4>(vii) School Procedure</h4>
              <ul>
                <li>The AOTGM school office/reception is restricted to staff only.</li>
                <li>Use of any school facilities after normal school hours requires approval from the principal.</li>
                <li>Office equipment, photocopy machines, telephones, etc., are restricted to the use of staff and
                  administrative staff only.</li>
                <li>Learners are encouraged to use water and electricity sparingly.</li>
                <li>The use of bicycles, roller blades, skateboards, etc., on the school premises is prohibited.</li>
                <li>No learner is allowed to bring a cell phone or any other electronic devices to the school during
                  normal school hours.</li>
                <li>Learners may bring cell phones to extra mural school activities.</li>
                <li>The AOTGM and staff take no responsibility whatsoever for any personal belongings of the learners
                  that are lost, damaged, or stolen, whether it was handed to them for safekeeping or for any other
                  reason whatsoever.</li>
              </ul>

              <h3>6. COMPUTER CENTRE</h3>

              <h4>(i) General Rules</h4>
              <ul>
                <li>Learners' use of the Internet at the school is monitored by school staff.</li>
                <li>Learners who violate the school Internet or network rules, or breach network security, may face loss
                  of network privileges, suspension, expulsion, and/or criminal prosecution.</li>
                <li>The following are the computer network rules:</li>
                <ul>
                  <li>No downloading of any programs from the network.</li>
                  <li>No uploading of programs onto the network.</li>
                  <li>Games are not to be played on the computer unless the supervisor gives permission. It must be
                    AOTGMGS-approved games.</li>
                  <li>Do not change any of the screen settings for any school software.</li>
                  <li>Learners are not to access any chat room sites (social media sites) or offensive sites (e.g.,
                    pornographic, racist, religious extremist, or adult sites).</li>
                  <li>No food or drinks are allowed in the computer rooms at any time.</li>
                  <li>No memory sticks or devices will be connected to the AOTGMMS’s computers.</li>
                  <li>No videos/music may be downloaded and copied.</li>
                  <li>No learner will be allowed to work on another learner's profile.</li>
                  <li>Any damage, loss of equipment/software programs, or vandalism will be for the parents’ account and
                    must be replaced with new equipment/software programs.</li>
                </ul>
              </ul>

              <h4>(ii) Data Protection Policy</h4>
              <ul>
                <li>A space will be provided for the full details and information of the guardian or parent, where a
                  copy will be turned out and kept in the child's school file.</li>
              </ul>

              <h3>7. DISCIPLINE</h3>
              <ul>
                <li>The learner must at all times conduct himself in a manner to become a gentleman (girls to become
                  ladies).</li>
                <li>Griping is not tolerated!</li>
                <li>If your child does come home complaining about policy or discipline, please follow these procedures:
                </li>
                <ol>
                  <li>Give the staff the benefit of the doubt; they would not act if it was not necessary.</li>
                  <li>Realize that your child’s reporting is emotionally based and may not include all the information.
                  </li>
                  <li>Realize that the school has reasons for all rules and that they are enforced without partiality.
                  </li>
                  <li>Support the staff and call the school for all the facts.</li>
                </ol>
                <li>When a child’s attitude is not in accord with school policies or principles, the child will be
                  placed on probation, and both parents will be called for a conference.</li>
                <li>If the administration feels the situation has not changed within a designated time, parents will be
                  asked to withdraw the child. High school learners, in particular, due to their influence on younger
                  learners.</li>
                <li>Here, discipline is maintained, which is firm, consistent, fair, and tempered with love. Our staff
                  maintains standards of behavior in the learning center through kindness, love, and genuine regard for
                  the learner.</li>
                <li>However, when disciplinary action becomes necessary, it is firmly carried out, tempered by good
                  judgment and understanding.</li>
                <li>Adherence to the school’s philosophy and biblical-based programs includes abstinence from smoking,
                  using alcoholic beverages, using narcotics, swearing, viewing or discussing pornographic items, and
                  other questionable practices.</li>
                <li>Learners are reminded that God expects us to be disciplined in all areas of life:</li>
                <ul>
                  <li><strong>Colossians 3:20:</strong> “Children, obey your parents in all things: for this is well
                    pleasing unto the Lord.”</li>
                  <li><strong>Romans 13:1:</strong> “Let every soul be subject unto the higher powers…”</li>
                  <li><strong>Hebrews 13:17:</strong> “Obey them that have the rule over you, and submit yourselves…”
                  </li>
                  <li><strong>Proverbs 6:23:</strong> “For the commandment is a lamp; and the law is light; and reproofs
                    of instruction are the way of life.”</li>
                  <li><strong>Proverbs 10:17:</strong> “He is in the way of life that keepeth instructions: but he that
                    refuseth reproof erreth.”</li>
                  <li><strong>Proverbs 19:18:</strong> “Chasten thy son while there is hope, and let not thy soul spare
                    for his crying.”</li>
                  <li><strong>Proverbs 22:15:</strong> “Foolishness is bound in the heart of a child; but the rod of
                    correction shall drive it far from him.”</li>
                </ul>
              </ul> -->
              <!-- 
              <div>
                <h3>Ark of Trinity G.M Altars and Groups</h3>

                <h4>AOTGM - HQ Church</h4>
                <p>(a.k.a Throne of Mercy, Seat of Grace)</p>

                <h4>Ibesikpo Branch</h4>
                <p>(a.k.a The Beautiful City on the Hill)</p>

                <h4>Nsit Atai Branch</h4>
                <p>(a.k.a My Rehoboth - Place of my Expansion)</p>

                <h4>Afaha Akai Branch</h4>
                <p>(a.k.a Place of my Establishment)</p>

                <h4>Nwaniba Branch</h4>
                <p>(a.k.a Gate of my Encounter)</p>

                <h4>Afaha Nsit Branch</h4>
                <p>(a.k.a O! God of Revelation)</p>

                <h4>Ifiayong Branch</h4>
                <p>(a.k.a Place of my Turnaround)</p>

                <h4>Daughters of Zion</h4>
                <p>(a.k.a My Jewel)</p>

                <h4>Youths for Christ</h4>
                <p>(a.k.a We are Moving Forward)</p>

                <h4>Children of Destiny</h4>
                <p>(a.k.a "We are for Signs & Wonders")</p>

                <h4>Men Fellowship</h4>
                <p>(a.k.a "Strength of my Loin")</p>

                <h4>Youth Fellowship</h4>
                <p>(a.k.a "We are Moving Forward")</p>

                <h4>AOTGM Choir</h4>
                <p>(a.k.a "Praise Be")</p>
              </div>

              <div>
                <h3>AOTGM Awards on Wednesday</h3>
                <h4>18 December 2024</h4>
                <ul>
                  <li>Best Choir:
                    <ul>
                      <li>Best Children Choir</li>
                      <li>Best Youth Choir</li>
                      <li>Best Adult Choir</li>
                    </ul>
                  </li>
                  <li>Best Coordinated Assembly</li>
                  <li>Best Women Fellowship Group</li>
                  <li>Best Men Fellowship Group</li>
                  <li>Best Branch Pastor in the Ministry</li>
                  <li>2nd Best Pastor in the Ministry</li>
                  <li>Fastest Consistently Growing Assembly</li>
                  <li>Most Proactive - Best Ever Ready Work Group</li>
                  <li>Most Fire Zeal Assembly</li>
                  <li>Best Spiritual Church: Ibesikpo</li>
                  <li>Best Administration Team</li>
                  <li>Best All Round Performing Minister</li>
                  <li>G.O's Support Team</li>
                  <li>G.O and Ministry Trusted Backers</li>
                  <li>Logistics Support Team</li>
                </ul>
              </div> -->



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