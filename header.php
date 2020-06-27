<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="Alexis Araza">
	<meta name="description" content="Christchurch Women's Centre is available to provide resources, courses and counselling for women's wellbeing and peace of mind.">
	<meta name="keywords" content="resources, courses, counselling, women's centre">

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


<div>

<!-- bootstrap nav-walker -->

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

	<div class="container">

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	  </button>


		<div class="row">

		<a class="navbar-brand" href="#">
		  <!-- logo -->
		<?php
		  if ( function_exists('the_custom_logo')) {
		    the_custom_logo();
		    //echo ('site-title');
		  }
		?>
		  
		</a>

		    <?php
		    wp_nav_menu( array(
		        'theme_location'    => 'top-menu',
		        'depth'             => 3,
		        'container'         => 'div',
		        'container_class'   => 'collapse navbar-collapse',
		        'container_id'      => 'bs-example-navbar-collapse-1',
		        'menu_class'        => 'nav navbar-nav',
		        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		        'walker'            => new WP_Bootstrap_Navwalker(),
		    ) );
		    ?>


		</div>

	</div>
</nav>

</div>
