<footer class="text-info myTheme jumbotron ">
  <div class="container">
  <?php
  // wp_nav_menu(
  //   array(
  //   'theme_location' => 'footer-menu',
  //  //  'menu' => 'Top Bar',
  //   'menu_class' => 'top-bar'
  //   )
  // );
  ?>
</div>
 <p class="footerText"><?php echo get_theme_mod('garden_footerMessage'); ?></p>


  <div class="py-3 row">
    <img class="col footerText facebook" src="<?php echo get_theme_mod('garden_footerIcon'); ?>" alt="facebook" />
    <p class="col">twitter </p>
    <a href="https://skillcrush.com/blog/free-portfolio-templates/" > Developer </a>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
