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

// Fetch gallery categories
$blogcat = mysqli_query($dbcon, "SELECT * FROM gallery");
if (!$blogcat) {
  die("Query failed: " . mysqli_error($dbcon));
}
$gall = mysqli_fetch_assoc($blogcat);
$gallery_count = mysqli_num_rows($blogcat);
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
  <title><?php echo $site['webname']; ?></title>

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

  <!-- Premium Gallery Styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary: #840808;
      --primary-dark: #780707;
      --dark: #300303;
      --light: #f8fafc;
      --gray: #94a3b8;
      --gray-light: #e2e8f0;
      --radius: 12px;
      --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Premium Gallery Styles - Mobile Optimized */
.premium-gallery {
  font-family: 'Inter', sans-serif;
  background-color: #f1f5f9;
  color: var(--dark);
  line-height: 1.6;
  padding: 1rem 0;
}

.gallery-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 1rem;
}

.gallery-header {
  text-align: center;
  margin-bottom: 2rem;
}

.gallery-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--dark);
  margin-bottom: 0.5rem;
  background: linear-gradient(90deg, var(--primary), #780707);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.gallery-subtitle {
  font-size: 1rem;
  color: var(--gray);
  max-width: 100%;
  margin: 0 auto;
  padding: 0 1rem;
}

.filter-controls {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
  flex-wrap: wrap;
  padding: 0 0.5rem;
}

.filter-btn {
  padding: 0.5rem 1rem;
  background: white;
  border: none;
  border-radius: 50px;
  font-weight: 500;
  cursor: pointer;
  transition: var(--transition);
  box-shadow: var(--shadow);
  color: var(--gray);
  font-size: 0.9rem;
  min-width: 80px;
}

.filter-btn:hover,
.filter-btn.active {
  background: var(--primary);
  color: white;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  gap: 1rem;
  padding: 0.5rem 0;
}

.gallery-item {
  position: relative;
  border-radius: var(--radius);
  overflow: hidden;
  aspect-ratio: 1/1;
  transition: var(--transition);
  box-shadow: var(--shadow);
  background: white;
  touch-action: manipulation;
}

.gallery-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.gallery-media {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: var(--transition);
}

.gallery-item:hover .gallery-media {
  transform: scale(1.03);
}

.media-info {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 1rem;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
  color: white;
  opacity: 0;
  transition: var(--transition);
  font-size: 0.8rem;
}

.gallery-item:active .media-info,
.gallery-item:focus .media-info,
.gallery-item:hover .media-info {
  opacity: 1;
}

.media-type {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 0.2rem 0.6rem;
  border-radius: 50px;
  font-size: 0.7rem;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 0.2rem;
}

.media-type.video-type {
  padding: 0.2rem 0.4rem;
  font-size: 0.6rem;
}

.video-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 40px;
  height: 40px;
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(5px);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1rem;
  opacity: 0;
  transition: var(--transition);
}

.gallery-item:active .video-icon,
.gallery-item:hover .video-icon {
  opacity: 1;
}

/* Lightbox Mobile Styles */
.lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  pointer-events: none;
  transition: var(--transition);
  touch-action: manipulation;
}

.lightbox.active {
  opacity: 1;
  pointer-events: all;
}

.lightbox-content {
  position: relative;
  width: 95%;
  max-height: 95%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.lightbox-media {
  max-width: 100%;
  max-height: 70vh;
  border-radius: var(--radius);
  display: block;
}

.lightbox-video {
  width: 100%;
  max-width: 100%;
}

.lightbox-close {
  position: absolute;
  top: 10px;
  right: 10px;
  background: rgba(0, 0, 0, 0.7);
  border: none;
  color: white;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 1.2rem;
  cursor: pointer;
  z-index: 11;
  display: flex;
  align-items: center;
  justify-content: center;
}

.lightbox-nav {
  position: absolute;
  top: 50%;
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding: 0 0.5rem;
  transform: translateY(-50%);
}

.lightbox-prev,
.lightbox-next {
  background: rgba(255, 255, 255, 0.2);
  border: none;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  color: white;
  font-size: 1rem;
  cursor: pointer;
  transition: var(--transition);
  display: flex;
  align-items: center;
  justify-content: center;
}

.lightbox-prev:hover,
.lightbox-next:hover {
  background: var(--primary);
}

.lightbox-controls {
  position: absolute;
  bottom: 10px;
  right: 10px;
  z-index: 10;
}

.lightbox-fullscreen {
  background: rgba(0, 0, 0, 0.7);
  border: none;
  color: white;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 0.9rem;
}

/* Responsive adjustments */
@media (min-width: 480px) {
  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 1.2rem;
  }
  
  .gallery-title {
    font-size: 2rem;
  }
  
  .filter-btn {
    padding: 0.6rem 1.1rem;
    font-size: 0.95rem;
  }
}

@media (min-width: 768px) {
  .gallery-container {
    padding: 1.5rem;
  }
  
  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 1.5rem;
  }
  
  .gallery-title {
    font-size: 2.2rem;
  }
  
  .gallery-subtitle {
    font-size: 1.1rem;
  }
  
  .filter-controls {
    gap: 0.8rem;
  }
  
  .filter-btn {
    padding: 0.7rem 1.3rem;
  }
  
  .media-info {
    padding: 1.2rem;
    font-size: 0.9rem;
  }
}

@media (min-width: 992px) {
  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }
  
  .gallery-title {
    font-size: 2.5rem;
  }
  
  .video-icon {
    width: 50px;
    height: 50px;
    font-size: 1.3rem;
  }
}

/* Mobile-specific touch improvements */
@media (hover: none) {
  .gallery-item:hover {
    transform: none;
  }
  
  .gallery-item:active {
    transform: scale(0.98);
  }
  
  .gallery-media {
    transform: none !important;
  }
  
  .media-info,
  .video-icon {
    opacity: 1 !important;
  }
  
  .filter-btn {
    padding: 0.6rem 1rem;
  }
}


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
                <li><img src="images/all-icon/map.png" alt="icon"><span>Shelter Afrique, Uyo, Akwa Ibom State</span></li>
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
                    <a href="charity.php">Charity</a>
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
  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
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

  <!--====== GALLERY PART START ======-->
  <section id="event-page" class="pt-90 pb-120 gray-bg">
    <div class="container premium-gallery">
      <?php
      // Fetch gallery categories
      $feat = "SELECT * FROM gallery";
      $feature = mysqli_query($dbcon, $feat);

      if (!$feature) {
        die("Query failed: " . mysqli_error($dbcon));
      }

      while ($featu = mysqli_fetch_array($feature)) {
        $cate = $featu['category'];

        // Get all media for this category
        $stmt = mysqli_prepare($dbcon, "SELECT * FROM picture WHERE category = ?");
        mysqli_stmt_bind_param($stmt, "s", $cate);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Check if there are any media items in this category
        if (mysqli_num_rows($result) > 0) {
      ?>
          <div class="gallery-container">
            <header class="gallery-header">
              <h1 class="gallery-title"><?php echo htmlspecialchars($cate); ?></h1>
              <p class="gallery-subtitle">Explore our collection of <?php echo htmlspecialchars($cate); ?></p>
            </header>

            <div class="filter-controls">
              <button class="filter-btn active" data-filter="all">All Media</button>
              <button class="filter-btn" data-filter="image">Images</button>
              <button class="filter-btn" data-filter="video">Videos</button>
            </div>

            <div class="gallery-grid" id="galleryGrid-<?php echo htmlspecialchars(str_replace(' ', '-', $cate)); ?>">
              <?php
              while ($pic = mysqli_fetch_assoc($result)) {
                $mediaPath = './images/pictures/' . htmlspecialchars($pic['picture']);
                $isVideo = pathinfo($pic['picture'], PATHINFO_EXTENSION) === 'mp4';
              ?>
                <div class="gallery-item <?php echo $isVideo ? 'marvelvideo' : 'image'; ?>">
                  <?php if ($isVideo): ?>
                    <video class="gallery-media" src="<?php echo $mediaPath; ?>" muted playsinline></video>
                    <div class="video-icon">
                      <i class="fas fa-play"></i>
                    </div>
                  <?php else: ?>
                    <img class="gallery-media" src="<?php echo $mediaPath; ?>" alt="<?php echo htmlspecialchars($pic['title']); ?>">
                  <?php endif; ?>

                  <div class="media-info">
                    <!-- <p><?php echo htmlspecialchars($pic['title']); ?></p> -->
                    <!-- <p><?php echo htmlspecialchars($pic['description']); ?></p> -->
                  </div>

                  <div class="media-type <?php echo $isVideo ? 'video-type' : ''; ?>">
                    <i class="fas fa-<?php echo $isVideo ? 'play' : 'image'; ?>"></i>
                    <span><?php echo $isVideo ? 'Video' : 'Image'; ?></span>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
      <?php
        }
        mysqli_stmt_close($stmt);
      }
      ?>
    </div>
  </section>
  <!--====== GALLERY PART ENDS ======-->

  <!--====== FOOTER PART START ======-->
  <?php include("footer.php"); ?>
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

  <!-- Gallery Script -->
  <script>
document.addEventListener('DOMContentLoaded', () => {
  // Initialize all galleries on the page
  document.querySelectorAll('.gallery-grid').forEach(galleryGrid => {
    const galleryId = galleryGrid.id;
    const category = galleryId.replace('galleryGrid-', '').replace(/-/g, ' ');

    // Get all gallery items for this category
    const galleryItems = Array.from(galleryGrid.querySelectorAll('.gallery-item'));
    const currentMedia = galleryItems.map((item, index) => {
      const isVideo = item.classList.contains('marvelvideo');
      const mediaElement = item.querySelector(isVideo ? 'video' : 'img');
      const title = item.querySelector('.media-info p:first-child')?.textContent || '';
      const description = item.querySelector('.media-info p:last-child')?.textContent || '';

      return {
        id: index,
        type: isVideo ? 'video' : 'image',
        url: isVideo ? mediaElement.src : mediaElement.src,
        thumbnail: isVideo ? mediaElement.src : mediaElement.src,
        title: title,
        description: description
      };
    });

    // Filter buttons for this gallery
    const filterButtons = galleryGrid.closest('.gallery-container').querySelectorAll('.filter-btn');

    // Lightbox elements (we'll create one per gallery)
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <button class="lightbox-close">
            <i class="fas fa-times"></i>
        </button>
        <div class="lightbox-content"></div>
        <div class="lightbox-nav">
            <button class="lightbox-prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="lightbox-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="lightbox-controls">
            <button class="lightbox-fullscreen">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    `;
    document.body.appendChild(lightbox);

    const lightboxContent = lightbox.querySelector('.lightbox-content');
    const lightboxClose = lightbox.querySelector('.lightbox-close');
    const lightboxPrev = lightbox.querySelector('.lightbox-prev');
    const lightboxNext = lightbox.querySelector('.lightbox-next');
    const lightboxFullscreen = lightbox.querySelector('.lightbox-fullscreen');

    let currentIndex = 0;
    let activeFilter = 'all';
    let filteredMedia = currentMedia;
    let isFullscreen = false;

    // Filter gallery items
    function filterGallery(filter) {
      activeFilter = filter;
      filterButtons.forEach(btn => {
        btn.classList.toggle('active', btn.dataset.filter === filter);
      });

      if (filter === 'all') {
        filteredMedia = currentMedia;
      } else {
        filteredMedia = currentMedia.filter(item => item.type === filter);
      }

      // Show/hide items based on filter
      galleryItems.forEach((item, index) => {
        const shouldShow = filter === 'all' ||
          (filter === 'image' && item.classList.contains('image')) ||
          (filter === 'video' && item.classList.contains('marvelvideo'));
        item.style.display = shouldShow ? 'block' : 'none';
      });
    }

    // Open lightbox
    function openLightbox(index) {
      currentIndex = index;
      const item = filteredMedia[index];

      lightboxContent.innerHTML = '';

      if (item.type === 'video') {
        const videoContainer = document.createElement('div');
        videoContainer.className = 'video-container';

        const video = document.createElement('video');
        video.src = item.url;
        video.controls = true;
        video.autoplay = true;
        video.className = 'lightbox-media lightbox-video';

        const closeBtn = document.createElement('button');
        closeBtn.className = 'video-close-btn';
        closeBtn.innerHTML = '<i class="fas fa-times"></i>';
        closeBtn.addEventListener('click', closeLightbox);

        videoContainer.appendChild(video);
        videoContainer.appendChild(closeBtn);
        lightboxContent.appendChild(videoContainer);
      } else {
        const img = document.createElement('img');
        img.src = item.url;
        img.alt = item.title;
        img.className = 'lightbox-media';
        lightboxContent.appendChild(img);
      }

      lightbox.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    // Close lightbox
    function closeLightbox() {
      lightbox.classList.remove('active');
      document.body.style.overflow = '';

      // Pause any videos when closing and reset them
      const videos = lightboxContent.querySelectorAll('video');
      videos.forEach(video => {
        video.pause();
        video.currentTime = 0;
      });
      
      // Exit fullscreen if active
      if (isFullscreen) {
        toggleFullscreen();
      }
    }

    // Toggle fullscreen
    function toggleFullscreen() {
      if (!isFullscreen) {
        if (lightbox.requestFullscreen) {
          lightbox.requestFullscreen();
        } else if (lightbox.webkitRequestFullscreen) {
          lightbox.webkitRequestFullscreen();
        } else if (lightbox.msRequestFullscreen) {
          lightbox.msRequestFullscreen();
        }
        isFullscreen = true;
        lightboxFullscreen.innerHTML = '<i class="fas fa-compress"></i>';
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
        isFullscreen = false;
        lightboxFullscreen.innerHTML = '<i class="fas fa-expand"></i>';
      }
    }

    // Navigate lightbox
    function navigateLightbox(direction) {
      if (direction === 'prev') {
        currentIndex = (currentIndex - 1 + filteredMedia.length) % filteredMedia.length;
      } else {
        currentIndex = (currentIndex + 1) % filteredMedia.length;
      }
      openLightbox(currentIndex);
    }

    // Setup event listeners for this gallery
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => filterGallery(btn.dataset.filter));
    });

    galleryItems.forEach((item, index) => {
      // Add touch feedback
      item.addEventListener('touchstart', function() {
        this.classList.add('active-touch');
      });
      
      item.addEventListener('touchend', function() {
        this.classList.remove('active-touch');
      });

      item.addEventListener('click', (e) => {
        // Prevent lightbox from opening if clicking on video play button
        if (e.target.closest('.video-icon')) return;
        
        // Find the index in the filtered media
        const itemType = item.classList.contains('marvelvideo') ? 'video' : 'image';
        const filteredIndex = filteredMedia.findIndex(media =>
          media.type === itemType &&
          media.url === (itemType === 'video' ? item.querySelector('video').src : item.querySelector('img').src)
        );

        if (filteredIndex !== -1) {
          openLightbox(filteredIndex);
        }
      });
    });

    // Lightbox controls
    lightboxClose.addEventListener('click', closeLightbox);
    lightboxPrev.addEventListener('click', () => navigateLightbox('prev'));
    lightboxNext.addEventListener('click', () => navigateLightbox('next'));
    lightboxFullscreen.addEventListener('click', toggleFullscreen);

    // Handle swipe gestures in lightbox
    let touchStartX = 0;
    let touchEndX = 0;

    lightboxContent.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});

    lightboxContent.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, {passive: true});

    function handleSwipe() {
      const threshold = 50; // minimum swipe distance
      
      if (touchEndX < touchStartX - threshold) {
        // Swipe left - next
        navigateLightbox('next');
      } else if (touchEndX > touchStartX + threshold) {
        // Swipe right - prev
        navigateLightbox('prev');
      }
    }
  });

  // Global keyboard navigation for all lightboxes
  document.addEventListener('keydown', (e) => {
    const activeLightbox = document.querySelector('.lightbox.active');
    if (!activeLightbox) return;

    if (e.key === 'Escape') {
      const closeBtn = activeLightbox.querySelector('.lightbox-close');
      if (closeBtn) closeBtn.click();
    } else if (e.key === 'ArrowLeft') {
      const prevBtn = activeLightbox.querySelector('.lightbox-prev');
      if (prevBtn) prevBtn.click();
    } else if (e.key === 'ArrowRight') {
      const nextBtn = activeLightbox.querySelector('.lightbox-next');
      if (nextBtn) nextBtn.click();
    } else if (e.key === 'f') {
      const fullscreenBtn = activeLightbox.querySelector('.lightbox-fullscreen');
      if (fullscreenBtn) fullscreenBtn.click();
    }
  });

  // Close lightbox when clicking outside content
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('lightbox')) {
      const closeBtn = e.target.querySelector('.lightbox-close');
      if (closeBtn) closeBtn.click();
    }
  });

  // Prevent zooming on double-tap
  let lastTap = 0;
  document.addEventListener('touchend', function(event) {
    const currentTime = new Date().getTime();
    const tapLength = currentTime - lastTap;
    if (tapLength < 300 && tapLength > 0) {
      event.preventDefault();
    }
    lastTap = currentTime;
  }, {passive: false});
});
</script>
</body>

</html>