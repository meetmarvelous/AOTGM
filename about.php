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
                    <a class="active" href="about.php">About us</a>
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

  <!--====== PAGE BANNER PART START ======-->

  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
    style="background-image: url(images/about_banner.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>About Us</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
            <?php echo $church['about']; ?>
            <!-- <p>
              We serve as a beacon of hope and support, providing charity and welfare to both our congregation and the broader community. Our mission is to demonstrate the love of Christ through acts of kindness, generosity, and compassionate service.
            </p> -->
          </div>
        </div> <!-- about cont -->
        <div class="col-lg-7">
          <div class="about-image mt-50">
            <img src="images/about/about.png" alt="About">
          </div> <!-- about imag -->
        </div>
      </div> <!-- row -->
      <div class="about-items pt-60">
      </div> <!-- about items -->
    </div> <!-- container -->
  </section>

  <!--====== ABOUT PART ENDS ======-->


  <!--====== COUNTER PART START ======-->
   





 

  <div id="counter-part" class="bg_cover pt-40 pb-110" data-overlay="8" style="background-image: url(images/cbanner.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Transformative</span>
            <p>Lives Impacted</p>
          </div> <!-- singel counter -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Spirit-Led</span>
            <p> Worship Experiences</p>
          </div> <!-- singel counter -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Faith-Filled</span>
            <p> Evangelism Outreach</p>
          </div> <!-- singel counter -->
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="singel-counter text-center mt-40">
            <span class="">Compassionate</span>
            <p>Community Support</p>
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

              <div>
                <h3>Our Aims and Objectives</h3>
                <p>The aims and objectives of the association are:</p>
                <ul>
                  <li>To preach the word of God, through the gospel of Jesus Christ, to touch and convert unbelievers and lost souls
                    in all parts of the world.</li>
                  <li>To raise a spirit-filled and word-based people that will offer true quality worship unto God in celebration of
                    their redemption.</li>
                  <li>To mobilize God's people with a burning desire for soul-winning and nurturing the converted through evangelism
                    and mission outreaches.</li>
                  <li>To raise the Christian believer with the heart for service in the church of Jesus Christ.</li>
                  <li>To pursue divine and noble transformation of lives via Bible-based preaching and teaching.</li>
                  <li>To assist the needy, aged, widows, and the vulnerable in society.</li>
                  <li>To discourage child abuse and juvenile delinquencies in society.</li>
                  <li>To steadily inculcate Bible seeds for honesty, integrity, and nobility.</li>
                  <li>To promote female and male empowerment towards developing and maximizing their potentials.</li>
                  <li>To embark on community development through encouraging collective actions of community people to generate
                    solutions to their common problems and by executing projects for the rural communities in their areas of need.
                  </li>
                  <li>To educate community people on capacity building, self-improvement, economy development, and empowerment, and to
                    engage the people in such activities towards helping them maximize their potentials.</li>
                  <li>To promote peaceful coexistence among community people.</li>
                  <li>To promote adherence to the rule of law and respect for human rights.</li>
                  <li>To pursue humanitarian service, evangelism, Christian congregational services.</li>
                  <li>To establish educational institutions and trusts.</li>
                </ul>
              </div>

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

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== SCHOOL PART ENDS ======-->

  <!--====== carousel PART START ======-->

  <section id="event-singel" class="pt-40 pb-40">
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
                    <img class="d-block w-100" src="images/flyer.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/flyer2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/flyer.jpg" alt="Third slide">
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
            <img src="images/patnar-logo/p-1.png" alt="Logo">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="singel-patnar text-center mt-40">
            <img src="images/patnar-logo/p-2.png" alt="Logo">
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