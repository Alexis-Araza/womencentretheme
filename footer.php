<footer class="text-info myTheme ">
  <div class="container">
  <?php
  // wp_nav_menu(
  // array(
  // 'theme_location' => 'footer-menu',
  // //  'menu' => 'Top Bar',
  // 'menu_class' => 'btm-bar'
  // )
  // );
  ?>

  <p class="footerText"><?php echo get_theme_mod('garden_footerMessage'); ?>
    <div class="row">
        <div class="col-lg-9">
          <p>Christchurch Women's Centre</p>
          <br>
          <a href="https://www.facebook.com/Womens-Centre-Christchurch-288086097879452/">
            <img src="images/facebooklogo.png" class="col facebook" alt="facebook"/></a>
          <a href="https://www.instagram.com/wgtnhelp/" class="fab socialMediaLinks fa-instagram"></a>
          <br>
          <br>
          <p>Copyright 2020</p>
          
        </div>
      </div>
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
