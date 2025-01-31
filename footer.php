<footer id="footer-part">
  <div class="footer-top pt-40 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about mt-40">
            <div class="logo">
              <a href="#"><img src="images/logo-2.svg" alt="Logo"></a>
            </div>
            <!-- <p>We serve as a beacon of hope and support, providing charity and welfare to both our congregation and the broader community. Our mission is to demonstrate the love of Christ through acts of kindness, generosity, and compassionate service.</p> -->
            <?php echo $church['about']; ?>
            <ul class="mt-20">
              <li><a href="<?php echo $site['facebook_link']?>"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="<?php echo $site['twitter_link']?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo $site['whatsapp_link']?>"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="<?php echo $site['instagram_link']?>"><i class="fa fa-instagram"></i></a></li>
              <li><a href="<?php echo $site['youtube_link']?>"><i class="fa fa-youtube-play "></i></a></li>
            </ul>
          </div> <!-- footer about -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-link mt-40">
            <div class="footer-title pb-25">
              <h6>Sitemap</h6>
            </div>
            <ul>
              <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
              <li><a href="about.php"><i class="fa fa-angle-right"></i>About us</a></li>
              <li><a href="school.php"><i class="fa fa-angle-right"></i>Our School</a></li>
            </ul>
            <ul>
              <!-- <li><a href=""><i class="fa fa-angle-right"></i>Event</a></li> -->
              <li><a href="gallery.php"><i class="fa fa-angle-right"></i>Our Gallery</a></li>
              <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
            </ul>
          </div> <!-- footer link -->
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="footer-link support mt-40">
            <div class="footer-title pb-25">
              <h6>Support</h6>
            </div>
            <ul>
              <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
            </ul>
          </div> <!-- support -->
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-address mt-40">
            <div class="footer-title pb-25">
              <h6>Contact Us</h6>
            </div>
            <ul>
              <li>
                <div class="icon">
                  <i class="fa fa-home"></i>
                </div>
                <div class="cont">
                  <p><?php echo $site['address']; ?></p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="cont">
                  <p><?php echo $site['phone']; ?></p>
                </div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <div class="cont">
                  <p><?php echo $site['email']; ?></p>
                </div>
              </li>
            </ul>
          </div> <!-- footer address -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- footer top -->

  <div class="footer-copyright pt-10 pb-25">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="copyright text-md-left text-center pt-15">
            <p><a target="_blank" href=""><?php echo $site['webname']; ?></a> </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="copyright text-md-right text-center pt-15">

          </div>
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- footer copyright -->
</footer>