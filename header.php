
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Beula">
    <meta name="description" content="Plant Wellington is a community garden blog website. It offers varieties of plants such herbs, shrubs and medicinal plants.">
    <meta name="keywords" content="mint, roses, shrubs, plants, herbs, cactus">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"> -->
    <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css"> -->
    <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', 'UA-XXXXXXXX-Y']);
     _gaq.push(['_trackPageview']);
     (function()
     {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
    </script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <div class="">
      <div class="bg-info">
        <h1 class="display-4 text-light siteTitle"> <?php echo get_theme_mod('garden_siteTitleText'); ?></h1>
      </div>
    <!-- search form -->
    <div class="container text-info my-5 searchDiv">
      <?php get_search_form(); ?>
    </div>

    <!-- bootstrap nav-walker -->

    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-info" href="#">Logo</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
    </nav>

  <header class="myTheme container-fluid">

    <!-- logo -->

    <div class="container-fluid">
    <?php
    // wp_nav_menu(
    //   array(
    //   'theme_location' => 'top-menu',
    //  //  'menu' => 'Top Bar',
    //   'menu_class' => 'top-bar'
    //   )
    // );


    ?>
  </div>
  </header>
  </div>
