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

<?php
if (isset($_POST['change'])) {
  $name = urlencode(trim($_POST['name']));
  $email = urlencode(trim($_POST['email']));
  $subject = urlencode(trim($_POST['subject']));
  $phone = urlencode(trim($_POST['phone']));
  $message = urlencode(trim($_POST['message']));

  $whatsapp = $site['phone_no'];
  $whatsapp_number = preg_replace('/\D/', '', $whatsapp);  // Removes non-digit characters
  
  // $whatsapp_number = "2348154755551";
  $whatsapp_message = "Hello, my name is $name. You can reach me at $email.%0A%0A" .
    "Subject: $subject%0A%0A$message";

  $whatsapp_url = "https://api.whatsapp.com/send?phone=$whatsapp_number&text=$whatsapp_message";

  header("Location: $whatsapp_url");
  exit;
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
                    <a href="school.php">Our School</a>
                  </li>
                  <li class="nav-item">
                    <a href="charity.php">Charity</a>
                  </li>
                  <li class="nav-item">
                    <a href="gallery.php">Our Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="active" href="contact.php">Contact</a>
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

  <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
    style="background-image: url(images/page-banner-6.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>Contact</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div> <!-- page banner cont -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== PAGE BANNER PART ENDS ======-->

  <!--====== CONTACT PART START ======-->

  <section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="contact-from mt-30">
            <div class="section-title">
              <h5>Contact Us</h5>
              <h2>Keep in touch</h2>
            </div> <!-- section title -->
            <div class="main-form pt-45">
            <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <!-- <form id="contact-form" method="post"> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="singel-form form-group">
                      <input name="name" type="text" placeholder="Your name" data-error="Name is required."
                        required="required">
                      <div class="help-block with-errors"></div>
                    </div> <!-- singel form -->
                  </div>
                  <div class="col-md-6">
                    <div class="singel-form form-group">
                      <input name="email" type="email" placeholder="Email" data-error="Valid email is required."
                        required="required">
                      <div class="help-block with-errors"></div>
                    </div> <!-- singel form -->
                  </div>
                  <div class="col-md-6">
                    <div class="singel-form form-group">
                      <input name="subject" type="text" placeholder="Subject" data-error="Subject is required."
                        required="required">
                      <div class="help-block with-errors"></div>
                    </div> <!-- singel form -->
                  </div>
                  <div class="col-md-6">
                    <div class="singel-form form-group">
                      <input name="phone" type="text" placeholder="Phone" data-error="Phone is required."
                        required="required">
                      <div class="help-block with-errors"></div>
                    </div> <!-- singel form -->
                  </div>
                  <div class="col-md-12">
                    <div class="singel-form form-group">
                      <textarea name="message" placeholder="Messege" data-error="Please,leave us a message."
                        required="required"></textarea>
                      <div class="help-block with-errors"></div>
                    </div> <!-- singel form -->
                  </div>
                  <p class="form-message"></p>
                  <div class="col-md-12">
                    <div class="singel-form">
                      <button type="submit" name="change" class="main-btn">Send</button>
                    </div> <!-- singel form -->
                  </div>
                </div> <!-- row -->
              </form>
            </div> <!-- main form -->
          </div> <!--  contact from -->
        </div>
        <div class="col-lg-5">
          <div class="contact-address mt-30">
            <ul>
              <li>
                <div class="singel-address">
                  <div class="icon">
                    <i class="fa fa-home"></i>
                  </div>
                  <div class="cont">
                    <p><?php echo $site['address']; ?></p>
                  </div>
                </div> <!-- singel address -->
              </li>
              <li>
                <div class="singel-address">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="cont">
                    <p><?php echo $site['phone']; ?></p>
                    <p>+1 222 345 342</p>
                  </div>
                </div> <!-- singel address -->
              </li>
              <li>
                <div class="singel-address">
                  <div class="icon">
                    <i class="fa fa-envelope-o"></i>
                  </div>
                  <div class="cont">
                    <p><?php echo $site['email']; ?></p>
                    <p><?php echo $site['email']; ?></p>
                  </div>
                </div> <!-- singel address -->
              </li>
            </ul>
          </div>
          <!-- <div class="map mt-30">
            <div id="contact-map"></div>
          </div> -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== CONTACT PART ENDS ======-->

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
  <!-- <script src="js/ajax-contact.js"></script> -->

  <!--====== Main js ======-->
  <script src="js/main.js"></script>

  <!--====== Map js ======-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
  <script src="js/map-script.js"></script>

</body>

</html>