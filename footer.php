<footer id="footer-widgets">
  <div class="container">
    <div class="go-top"><a href="#top"><i class="ti-arrow-up"></i></a></div>
    <div class="col-md-6 ov-h">
      <!-- about, culture, case studies -->
      <?php dynamic_sidebar('footer_firstarea');?>
      <!-- about, culture, case studies ends -->
    </div>
    <div class="col-md-4 col-md-offset-2">
      <div class="col-md-12">
        <!-- subscribe start -->
        <?php dynamic_sidebar('subscribe-email')?>
        <!-- subscribe end -->
      </div>
    </div>
  </div>
</footer>
<footer id="footer">
  <div class="container">
    <div class="footer-wrap">
      <div class="col-md-4">
        <div class="copy-text">
          <p><i class="icon-heart red mr-15"></i>
            <?php global $commet_options; echo $commet_options['footer-copyright-text'];?>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <!-- <ul class="list-inline">
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul> -->

        <?php
          wp_nav_menu([
            'theme_location'    => 'footer-menu',
            'menu_class'        => 'list-inline'
          ]);
        ?>
      </div>
      <div class="col-md-4">
        <div class="footer-social">
          <ul>
            <li><a target="_blank" href="<?php echo $commet_options['facebook-url']?>"><i class="ti-facebook"></i></a></li>
            <li><a target="_blank" href="<?php echo $commet_options['twitter-url']?>"><i class="ti-twitter-alt"></i></a></li>
            <li><a target="_blank" href="<?php echo $commet_options['linkedin-url']?>"><i class="ti-linkedin"></i></a></li>
            <li><a target="_blank" href="<?php echo $commet_options['instagram-url']?>"><i class="ti-instagram"></i></a></li>
            <li><a target="_blank" href="<?php echo $commet_options['dribbble-url']?>"><i class="ti-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>


</html>
