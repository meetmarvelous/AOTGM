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

  <!-- LightGallery CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet">
  <!-- Custom Styling -->
  <style>
    .gallery-page {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    #gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
      padding: 20px;
    }

    #gallery-container a {
      display: block;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #gallery-container a:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    #gallery-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    #gallery-container a:hover img {
      transform: scale(1.1);
    }

    @media (max-width: 600px) {
      #gallery-container {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 10px;
      }
    }

    .gallery-area {
      background-color: #fff;
      padding: 10px;
    }

    /* @media (prefers-color-scheme: dark) {
      div.gallery-page {
        background-color: #121212;
        color: #ffffff;
      }

      #gallery-container a {
        box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
      }
    } */
  </style>

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
                    <a href="school.php">Our School</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="gallery.php">Our Gallery</a>
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
    style="background-image: url(images/page-banner-3.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>Our Gallery</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
              </ol>
            </nav>
          </div> <!-- page banner cont -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== PAGE BANNER PART ENDS ======-->

  <!--====== EVENTS PART START ======-->

  <section id="event-page" class="pt-90 pb-120 gray-bg">
    <div class="container">

      <div class="gallery-area mb-3">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="text-center">Gallery 1 - Just Testing</h>
              <div class="gallery-page">
                <div id="gallery-container">
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/flyer2.jpg">
                    <img src="images/flyer2.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/img6.jpg">
                    <img src="images/img6.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/flyer2.jpg">
                    <img src="images/flyer2.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/bg-2.jpg">
                    <img src="images/bg-2.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/img2.jpg">
                    <img src="images/img2.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/favicon.png">
                    <img src="images/favicon.png" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/page-banner-5.jpg">
                    <img src="images/page-banner-5.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/img4.jpg">
                    <img src="images/img4.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/logo old.png">
                    <img src="images/logo old.png" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="gallery-area mb-3">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="text-center">Gallery 2 - To be Edited</h>
              <div class="gallery-page">
                <div id="gallery-container">
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/flyer2.jpg">
                    <img src="images/flyer2.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/bg-2.jpg">
                    <img src="images/bg-2.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/flyer2.jpg">
                    <img src="images/flyer2.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/bg-2.jpg">
                    <img src="images/bg-2.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/img2.jpg">
                    <img src="images/img2.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/favicon.png">
                    <img src="images/favicon.png" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/page-banner-5.jpg">
                    <img src="images/page-banner-5.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/img4.jpg">
                    <img src="images/img4.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/logo old.png">
                    <img src="images/logo old.png" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="gallery-area mb-3">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="text-center">Gallery 3 - Just A Test</h>
              <div class="gallery-page">
                <div id="gallery-container">
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/flyer2.jpg">
                    <img src="images/flyer2.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/bg-2.jpg">
                    <img src="images/bg-2.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/flyer2.jpg">
                    <img src="images/flyer2.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/bg-2.jpg">
                    <img src="images/bg-2.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/img2.jpg">
                    <img src="images/img2.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/favicon.png">
                    <img src="images/favicon.png" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/page-banner-5.jpg">
                    <img src="images/page-banner-5.jpg" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1067" data-src="images/flyer.jpg">
                    <img src="images/flyer.jpg" alt="Boat on Calm Water">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2400" data-src="images/img4.jpg">
                    <img src="images/img4.jpg" alt="Wintry Mountain Landscape">
                  </a>
                  <a class="lg-item" data-lg-size="1600-2398" data-src="images/logo old.png">
                    <img src="images/logo old.png" alt="Mountains in the Clouds">
                  </a>
                  <a class="lg-item" data-lg-size="1600-1065" data-src="images/bg-3.jpg">
                    <img src="images/bg-3.jpg" alt="Boat on Calm Water">
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <nav class="courses-pagination mt-50">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a href="#" aria-label="Previous">
                  <i class="fa fa-angle-left"></i>
                </a>
              </li>
              <li class="page-item"><a class="active" href="#">1</a></li>
              <li class="page-item"><a href="#">2</a></li>
              <li class="page-item"><a href="#">3</a></li>
              <li class="page-item">
                <a href="#" aria-label="Next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </nav> <!-- courses pagination -->
        </div>
      </div> <!-- row -->

    </div> <!-- container -->

  </section>

  <!--====== EVENTS PART ENDS ======-->

  <!--====== FOOTER PART START ======-->

  <?php
  include("footer.php");
  ?>

  <!--====== FOOTER PART ENDS ======-->

  <!--====== BACK TO TP PART START ======-->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!--====== BACK TO TP PART ENDS ======-->


  <!-- LightGallery JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>

  <script>
    const container = document.querySelector('#gallery-container');
    lightGallery(container, {
      selector: '.lg-item',
      plugins: [lgZoom, lgThumbnail],
      mobileSettings: {
        showCloseIcon: true,
        zoom: true,
        thumbnail: true
      }
    });
  </script>

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