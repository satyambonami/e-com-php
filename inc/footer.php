<!-- footer -->
<div class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-box about-widget">
          <h2 class="widget-title">About us</h2>
          <p><?php echo  $_SESSION['general']['footer_about']; ?></p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-box get-in-touch">
          <h2 class="widget-title">Get in Touch</h2>
          <ul>
            <li><?php echo  $_SESSION['general']['address']; ?></li>
            <li><?php echo  $_SESSION['general']['email']; ?></li>
            <li><?php echo  $_SESSION['general']['contact']; ?></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-box pages">
          <h2 class="widget-title">Pages</h2>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Shop</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-box subscribe">
          <h2 class="widget-title">Subscribe</h2>
          <p>Subscribe to our mailing list to get the latest updates.</p>
          <form action="https://technext.github.io/fruitkha/index.php">
            <input type="email" placeholder="Email">
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <p>Copyrights &copy; 2019 - <a href="http://studyground.rf.gd">Sahil</a>, All Rights Reserved.<br>

        </p>
      </div>
      <div class="col-lg-6 text-right col-md-12">
        <div class="social-icons">
          <ul>
            <li><a href="<?php echo  $_SESSION['general']['facebook']; ?>" target="_blank"><i
                  class="fab fa-facebook-f"></i></a></li>
            <li><a href="<?php echo  $_SESSION['general']['contact']; ?>" target="_blank"><i
                  class="fab fa-twitter"></i></a></li>
            <li><a href="<?php echo  $_SESSION['general']['instagram']; ?>" target="_blank"><i
                  class="fab fa-instagram"></i></a></li>
            <li><a href="<?php echo  $_SESSION['general']['linkedin']; ?>" target="_blank"><i
                  class="fab fa-linkedin"></i></a></li>
            <li><a href="<?php echo  $_SESSION['general']['contact']; ?>" target="_blank"><i
                  class="fab fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end copyright -->