
<?php

//load stylesheets
function load_css(){

  //wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.5.0', 'all');

  wp_enqueue_style('bootstrap');

  //your own css must be last
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');

  //Google Fonts
  function add_google_fonts() {

  wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Source+Sans+Pro&family=Volkhov:wght@700&display=swap', false );}

  add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


//load javascript
function load_js()
{

		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
		wp_enqueue_script('bootstrap');

    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
		wp_enqueue_script('js');


}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-logo');

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);


//Bootstrap nav walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//custom image size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);

// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');


// custom post type
function my_first_post_type(){
  $args = array(
    'labels' => array(
        'name' => 'Resources',
        'singular_name' => 'Resource',
    ),

  'hierarchical' => true, //boolean value toggles between pages & posts without labels
  'menu_icon' => 'dashicons-palmtree',//get icon name from wordpress dashicons
  'public' => true,
  'has_archive' => true,
  'supports' => array('title','editor','thumbnail','custom-fields' ),// if one of the argument is  not mentioned,
  //if makes difference in features

);
  register_post_type('Resources',$args);
}

add_action('init','my_first_post_type');


// Taxanomy
function my_first_taxonomy(){
  $args = array(
    'labels' => array(
      'name' => 'Types',
      'singular_name' => 'Type',
    ),

    'public' => true,
    'hierarchical' => true,//false works like tags, true like catgories without labels


  );
  register_taxonomy('types', array('Resources'),$args);

}

add_action('init', 'my_first_taxonomy');


//header image
register_default_headers( array(
    'defaultImage' => array(
        'url'           => get_template_directory_uri() . '/images/background-image.jpeg',
        'thumbnail_url' => get_template_directory_uri() . '/images/background-image.jpeg',
        'description'   => __( 'The default image for the custom header.' )
    )
) );

//Header Image
$customHeaderDefaults = array(
    'width' => 1920,
    'height' => 1080,
    'default-image' => get_template_directory_uri() . '/images/background-image.jpeg'
);
add_theme_support('custom-header', $customHeaderDefaults);


// Woocommerce Cart
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
  wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css' );
}

function my_header_add_to_cart_fragment( $fragments ) {

  ob_start();
  $count = WC()->cart->cart_contents_count;
  ?><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
  if ( $count > 0 ) {
    ?>
    <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
    <?php
  }
  ?></a><?php

  $fragments['a.cart-contents'] = ob_get_clean();

  return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );



//customize API
require_once get_template_directory() . '/customizer.php';


remove_action('wp_head', 'wp_generator'); //for security. it wont show what version of wp is used.
