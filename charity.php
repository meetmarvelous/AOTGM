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
                    <a href="school.php">Our School</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="charity.php">Charity</a>
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
    style="background-image: url(images/chbanner.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>About AOTGM Charity Foundation</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Charity Foundation</li>
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
            <h5>About Our Charity Foundation</h5>
            <h2>AOTGM Charity Foundation</h2>

          </div> <!-- section title -->
          <div class="about-cont">
            <p>
              AOTGM Charity Foundation began as a charity outreach within the church ministry in 2010. The church started as a family worship Chapel in 2008 and was founded by Rev. Dr (Mrs) Victoria Onofiok Kinlock. In 2021, the Church, along with the Charity Foundation, was legally incorporated under CAC.
            </p>
          </div>
        </div> <!-- about cont -->
        <div class="col-lg-7">
          <div class="about-image mt-50">
            <img src="images/charity.png" alt="About">
          </div> <!-- about imag -->
        </div>
      </div> <!-- row -->
      <div class="events-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="eventt events-left">
              <div>
                <h2>AOTGM Charity Foundation</h2>
                <p>AOTGM Charity Foundation began as a charity outreach within the church ministry in 2010. The church started as a family worship Chapel in 2008 and was founded by Rev. Dr (Mrs) Victoria Onofiok Kinlock. In 2021, the Church, along with the Charity Foundation, was legally incorporated under CAC.</p>

                <p>AOTGM Charity Foundation is established on the Christian ethos of Almsgiving, Welfare, and Prayer offering for the poor, destitute, and needy. AOTGM Charity Foundation undertakes monthly distribution of food, clothes, and funds to orphanages and destitute homes in Akwa Ibom State. The welfare unit takes care of widows, poor families, and those in need.</p>

                <h4>Empowerment Programs</h4>
                <p>The foundation empowers numerous groups of people as follows:</p>
                <ul>
                  <li>Giving soft loans for start-up and reviving existing SMEs businesses,</li>
                  <li>Employment opportunities in the founder's Conglomerate of companies,</li>
                  <li>Educational grants and scholarships to youths,</li>
                  <li>Medical care through hospitals,</li>
                  <li>General financial help for the well-being of people, etc.</li>
                </ul>

                <h4>Financial Support and Partnerships</h4>
                <p>AOTGM Charity Foundation is financially supported by the founder's Conglomerate of Companies. We partner with the following establishments:</p>
                <ol>
                  <li>Saint Charles Walker Orphanage Home, Nwaniba Road, Uyo</li>
                  <li>Saint Anthony of Padua Destitute Home, Uruan Street, Uyo</li>
                  <li>Bishop Elijah Mboho Orphanage Home, Gospel Village, Abak</li>
                  <li>Government of Akwa Ibom State Special Children Center, IBB, Uyo</li>
                  <li>Friends of the Needy Orphanage Home, Okobo</li>
                  <li>God's Liberty Orphanage Home, Oron</li>
                </ol>

                <p>Come partner with us to uplift humanity and ameliorate the welfare of the poor and disadvantaged in our society.</p>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div> <!-- container -->
  </section>

  <!--====== ABOUT PART ENDS ======-->

  <!--====== SCHOOL PART START ======-->

  <section id="event-singel" class="pt-10 pb-10 gray-bg">
    <div class="container">
      <div class="events-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="eventt events-left">
              <div>
                <h2>AOTGM Charity Foundation</h2>
                <p>AOTGM Charity Foundation began as a charity outreach within the church ministry in 2010. The church started as a family worship Chapel in 2008 and was founded by Rev. Dr (Mrs) Victoria Onofiok Kinlock. In 2021, the Church, along with the Charity Foundation, was legally incorporated under CAC.</p>

                <p>AOTGM Charity Foundation is established on the Christian ethos of Almsgiving, Welfare, and Prayer offering for the poor, destitute, and needy. AOTGM Charity Foundation undertakes monthly distribution of food, clothes, and funds to orphanages and destitute homes in Akwa Ibom State. The welfare unit takes care of widows, poor families, and those in need.</p>

                <h4>Empowerment Programs</h4>
                <p>The foundation empowers numerous groups of people as follows:</p>
                <ul>
                  <li>Giving soft loans for start-up and reviving existing SMEs businesses,</li>
                  <li>Employment opportunities in the founder's Conglomerate of companies,</li>
                  <li>Educational grants and scholarships to youths,</li>
                  <li>Medical care through hospitals,</li>
                  <li>General financial help for the well-being of people, etc.</li>
                </ul>

                <h4>Financial Support and Partnerships</h4>
                <p>AOTGM Charity Foundation is financially supported by the founder's Conglomerate of Companies. We partner with the following establishments:</p>
                <ol>
                  <li>Saint Charles Walker Orphanage Home, Nwaniba Road, Uyo</li>
                  <li>Saint Anthony of Padua Destitute Home, Uruan Street, Uyo</li>
                  <li>Bishop Elijah Mboho Orphanage Home, Gospel Village, Abak</li>
                  <li>Government of Akwa Ibom State Special Children Center, IBB, Uyo</li>
                  <li>Friends of the Needy Orphanage Home, Okobo</li>
                  <li>God's Liberty Orphanage Home, Oron</li>
                </ol>

                <p>Come partner with us to uplift humanity and ameliorate the welfare of the poor and disadvantaged in our society.</p>
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