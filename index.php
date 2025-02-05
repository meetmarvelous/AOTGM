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
                    <a class="active" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="about.php">About us</a>
                  </li>
                  <li class="nav-item">
                    <a href="school.php">Our School</a>
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

  <!--====== SLIDER PART START ======-->

  <section id="slider-part" class="slider-active">
    <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-1.png)" data-overlay="4">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-9">
            <div class="slider-cont">
              <h1 data-animation="bounceInLeft" data-delay="1s">Grow in faith and fellowship in a place that feels like home.</h1>
              <p data-animation="fadeInUp" data-delay="1.3s">To Evangelize, Teach and Preach the Christian Religion of the Love of God through the Gospel of Jesus Christ.</p>
              <ul>
                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="about.php">Read More</a></li>
                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="about.php">Get Started</a>
                </li>
              </ul>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- single slider -->

    <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-2.png)" data-overlay="4">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-9">
            <div class="slider-cont">
              <h1 data-animation="bounceInLeft" data-delay="1s">Become part of the Ark of Trinity Gospel Ministry family!</h1>
              <p data-animation="fadeInUp" data-delay="1.3s">Experience spirit-led worship, transformative teachings, and a community rooted in Christ's love.</p>
              <ul>
                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="about.php">Read More</a></li>
                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="about.php">Get Started</a>
                </li>
              </ul>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- single slider -->

    <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-3.png)" data-overlay="4">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-9">
            <div class="slider-cont">
              <h1 data-animation="bounceInLeft" data-delay="1s">Choose the right place for worship</h1>
              <p data-animation="fadeInUp" data-delay="1.3s">To Evangelize, Teach and Preach the Christian Religion of the Love of God through the Gospel of Jesus Christ. </p>
              <ul>
                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="about.php">Read More</a></li>
                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="about.php">Get Started</a>
                </li>
              </ul>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- single slider -->
  </section>

  <!--====== SLIDER PART ENDS ======-->

  <!--====== ABOUT PART START ======-->
  <section id="about-page" class="pt-70 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-title mt-50">
            <h5>About us</h5>
            <h2>Welcome to AOTGM </h2>
          </div> <!-- section title -->
          <div class="about-cont">
            <?php echo $church['about']; ?>
            <!-- <p>We serve as a beacon of hope and support, providing charity and welfare to both our congregation and the broader community. Our mission is to demonstrate the love of Christ through acts of kindness, generosity, and compassionate service.</p> -->
          </div>
        </div> <!-- about cont -->
        <div class="col-lg-7">
          <div class="about-image mt-50">
            <img src="images/about/about.png" alt="About">
          </div> <!-- about imag -->
        </div>
      </div> <!-- row -->
      <!-- <div class="about-items pt-60">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="about-singel-items mt-30">
              <span>01</span>
              <h4>Why Choose us</h4>
              <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem
                quibibendum auci</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="about-singel-items mt-30">
              <span>02</span>
              <h4>Our Mission</h4>
              <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem
                quibibendum auci</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="about-singel-items mt-30">
              <span>03</span>
              <h4>Our vission</h4>
              <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem
                quibibendum auci</p>
            </div> 
          </div>
        </div> 
      </div>  -->
    </div> <!-- container -->
  </section>

  <!--====== ABOUT PART ENDS ======-->



  <!--====== APPLY PART START ======-->

  <section id="apply-aprt" class="pt-70 pb-120">
    <div class="container">
      <div class="apply">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="apply-cont apply-color-1">
              <h3>Join Ark of Trinity Gospel Ministry family!</h3>
              <p>Become part of the Ark of Trinity Gospel Ministry family! Experience spirit-led worship, transformative teachings, and a community rooted in Christ's love. </p>
              <a href="<?php echo $site['whatsapp_link'] ?>" class="main-btn">Join us today!</a>
            </div> <!-- apply cont -->
          </div>
          <div class="col-lg-6">
            <div class="apply-cont apply-color-2">
              <h3>Apply for ARK OF TRINITY MONTESSORI SCHOOL</h3>
              <p>Join the Ark of Trinity Montessori School today! Empower your child with a solid academic and spiritual foundation for a brighter future. Apply Now!</p>
              <a href="<?php echo $site['whatsapp_link'] ?>" class="main-btn">Apply Now</a>
            </div> <!-- apply cont -->
          </div>
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== APPLY PART ENDS ======-->

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
              </div>

              <div>
                <h4>E. School Motto</h4>
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

                <h4>F. School Anthem & Pledge</h4>
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

                <a href="school.php" class="main-btn">Read More</a>

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
              </div> 



              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--====== SCHOOL PART ENDS ======-->

  <!--====== carousel PART START ======-->

  <section id="event-singel" class="pt-120 pb-120 gray-bg">
    <div class="container">
      <div class="events-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="eventt events-left">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/img1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Image 1</h5>
                      <p>Description for Image 1</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/img2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Image 2</h5>
                      <p>Description for Image 2</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/img3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Image 3</h5>
                      <p>Description for Image 3</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/img4.jpg" alt="Fourth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Image 4</h5>
                      <p>Description for Image 4</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/img5.jpg" alt="Fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Image 5</h5>
                      <p>Description for Image 5</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/img6.jpg" alt="Sixth slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Image 6</h5>
                      <p>Description for Image 6</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== carousel PART ENDS ======-->

  <!--====== carousel PART START ======-->

  <!-- <section id="event-singel" class="pt-120 pb-120 gray-bg">
    <div class="container">
      <div class="events-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="eventt events-left">

              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/img2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/img3.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/img4.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/img5.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/img6.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!--====== carousel PART ENDS ======-->

  <!--====== PATNAR LOGO PART START ======-->

  <div id="patnar-logo" class="pt-20 pb-20 gray-bg">
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
            <img src="images/patnar-logo/p-1.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-2.png" alt="Logo">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== PATNAR LOGO PART ENDS ======-->

  <!--====== FOOTER PART START ======-->

  <?php
  include("footer.php");
  ?>

  <!--====== FOOTER PART ENDS ======-->

  <!--====== BACK TO TP PART START ======-->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!--====== BACK TO TP PART ENDS ======-->

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>