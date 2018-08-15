<?php
function ecdl_ireland_styles() {
    // Register the style:


	wp_enqueue_style( 'datatable', get_template_directory_uri().'/assets/css/datatable.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'dataTables.bootstrap', get_template_directory_uri().'/assets/css/dataTables.bootstrap.css', array(), '1.0.0', 'all');

	wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.js', array(), '1.0.0', false );
	wp_enqueue_script( 'jquery.dataTables', get_template_directory_uri().'/assets/js/jquery.dataTables.js', array(), '1.0.0', false );
	wp_enqueue_script( 'dataTables.bootstrap', get_template_directory_uri().'/assets/js/dataTables.bootstrap.js', array(), '1.0.0', false );
	wp_enqueue_script( 'thisdatatable', get_template_directory_uri().'/assets/js/thisdatatable.js', array(), '1.0.0', false );



	//wp_enqueue_style( 'ecdl-for-you-purchase', get_template_directory_uri().'/assets/css/ecdl-for-you-purchase.css', array(), '1.0.0', 'all');
   	wp_enqueue_script( 'numscroller-1.0', get_template_directory_uri().'/assets/js/numscroller-1.0.js', array(), '1.0.0', false );
	wp_enqueue_style( 'jquery-eu-cookie-law-popup', get_template_directory_uri().'/assets/css/jquery-eu-cookie-law-popup.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'ecdl-workplace-old', get_template_directory_uri().'/assets/css/ecdl-workplace-old.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome/css/font-awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'ecdl-ireland', get_template_directory_uri().'/assets/css/ecdl-ireland.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'ecdl-for-you', get_template_directory_uri().'/assets/css/ecdl-for-you.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'ecdl-workforce-old', get_template_directory_uri().'/assets/css/ecdl-workplace-old.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'logo', get_template_directory_uri().'/assets/css/logo.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'contact-form', get_template_directory_uri().'/assets/css/contact-form.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'ittc16', get_template_directory_uri().'/assets/css/ittc16.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all');

	// Register the script:

	//wp_enqueue_script( 'jquery.countdown.min', get_template_directory_uri().'/assets/js/jquery.countdown.min.js', array(), '1.0.0', false );
	wp_enqueue_script( 'jquery-eu-cookie-law-popup', get_template_directory_uri().'/assets/js/jquery-eu-cookie-law-popup.js', array(), '1.0.0', false );
	//wp_enqueue_script( 'jquery-2.1.3.min', get_template_directory_uri().'/assets/js/jquery-2.1.3.min.js', array(), '1.0.0', false );
	wp_enqueue_script( 'logohover', get_template_directory_uri().'/assets/js/logohover.js', array(), '1.0.0', false );
	//wp_enqueue_script( 'contact-form', get_template_directory_uri().'/assets/js/contact-form.js', array(), '1.0.0', false );
	wp_enqueue_script( 'workforce-learner-validate', get_template_directory_uri().'/assets/js/workforce-learner-validate.js', array(), '1.0.0', false );
	wp_enqueue_script( 'validate-corporate', get_template_directory_uri().'/assets/js/validate-corporate.js', array(), '1.0.0', false );
	wp_enqueue_script( 'checkout', 'https://checkout.stripe.com/checkout.js', array(), '1.0.0', false );

	wp_enqueue_script( '', 'https://www.google.com/jsapi?key=ABQIAAAAvyAI0HDpzwQ1cWZjJh3aRRRrTfSy90-YM7dPxVXbL0BtSVeyChTwhlp-yLjYD_SguFwOGkQ6usWmMA', array(), '1.0.0', false );

	if ( is_page( 'purchase' ) ) {
		wp_enqueue_script( 'angular', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.js', array(), '1.0.0', false );
		wp_enqueue_script( 'angular-animate', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js', array(), '1.0.0', false );
	}



	wp_enqueue_script( 'html5shiv', '//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', get_template_directory_uri() . '/assets/js/respond.min.js' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'ecdl_ireland_styles' );

function ecdl_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('Primary', 'Primary');
}

add_action('wp_enqueue_scripts', 'ecdl_theme_setup');

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
require_once('wp_bootstrap_navwalker.php');

the_post_thumbnail( 'full' );

function add_last_nav_item($items) {
  return $items .= '<li><a data-toggle="modal" data-target="#login" >LOGIN</a></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	'description' => 'should appear only on the blog page',
	'before_widget' => '<div id="%1$s">',
	'after_widget' => '</div>',
	'before_title' => '<div class="blog-category"><p class="lead">',
	'after_title' => '</p></div>',
	));
}


add_action('pre_get_posts','four_post_per_cat');

function four_post_per_cat( $query ) {
  if ( ! is_admin() && is_main_query() && is_category() ) {
    $query->set('posts_per_page', 4);
  }
}
?>