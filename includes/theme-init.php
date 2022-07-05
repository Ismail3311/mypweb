<?php



add_action( 'after_setup_theme', 'klasik_setup' );



function klasik_default_image(){

	$imgconf = array(

	);

	return $imgconf;

}



if ( ! function_exists( 'klasik_setup' ) ):



function klasik_setup() {



	// Add default posts and comments RSS feed links to head

	add_theme_support( 'automatic-feed-links' );

	

	// This theme supports a variety of post formats.

	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'gallery', 'video', 'audio' ) );

	

	// Enable support for Post Thumbnails, and declare Custom Image Size

	add_theme_support( 'post-thumbnails' );
	
	add_image_size ('porn-theme-3-thumb', '400', '250', true);


	// This theme uses wp_nav_menu() in one location.

	register_nav_menus( array(

		'primarymenu' => __( 'Header Menu', 'klasik' )



	) );

	

	/* Sidebar woocommerce */

	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );



	/* woocommerce hide page title */

	add_filter( 'woocommerce_show_page_title' , 'klasik_woo_hide_page_title' );

	function klasik_woo_hide_page_title() {

		return false;

	}

	

	/* remove breadcrumbs woocommerce on the page */

	add_action( 'init', 'klasik_remove_wc_breadcrumbs' );

	function klasik_remove_wc_breadcrumbs() {

		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

	}

		

}

endif;



/* Declare WooCommerce support  

code to hide the, "Your theme does not declare WooCommerce support" message. 

*/

add_action( 'after_setup_theme', 'klasik_woocommerce_support' );



function klasik_woocommerce_support() {

    add_theme_support( 'woocommerce' );

}

