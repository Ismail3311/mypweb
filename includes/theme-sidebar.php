<?php

function klasik_sidebar_init() {



	register_sidebar( array(

		'name' 					=> __( 'Main Widget Area', 'klasik' ),

		'id' 						=> 'primary-sidebar',

		'description' 		=> __( 'Located below the content on the archives, single and search pages. Four rows for screens above 875px. Then 3, then 2. If you have only 1 widget you should use "Full Width Widgets" instead!', 'klasik' ),

		'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s"><div class="box">',

		'after_widget' 		=> '<div class="clear"></div></div></li></ul>',

		'before_title' 		=> '<h3 class="widget-title"><span>',

		'after_title' 			=> '</span></h3>',

	));	

	

}



function klasik_maintop_sidebar(){	

		register_sidebar(array(

		'name'          => __('Full Width Widgets', 'klasik' ),

		'id'         	=> 'maintop',

		'description'   => __( 'Just above the Main Widget Area. This is for full width widgets like tag clouds or banners. You could use this instead of the Main Widget Area if the style of 4 columns does not fit your site.', 'klasik' ),

		'before_widget' => '<div class="widget-fullwidth"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title"><span>',

		'after_title' 	=> '</span></h3>',

	));

}



function klasik_contenttop_sidebar(){

	

	register_sidebar(array(

		'name'          => __('Header Banner', 'klasik' ),

		'id'         	=> 'contenttop',

		'description'   => __( 'In the header for screens with widths larger than 1215px.', 'klasik' ),

		'before_widget' => '<div class="widget-header">',

		'after_widget' 	=> '</div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

}



function klasik_contentbottom_sidebar(){

	register_sidebar(array(

		'name'          => __('Above Content Widgets', 'klasik' ),

		'id'         	=> 'contentbottom',

		'description'   => __( 'A widget area just above the content. The widgets you place here will (should) be centered.', 'klasik' ),

		'before_widget' => '<div class="widget-abovecontent">',

		'after_widget' 	=> '</div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

}





function klasik_mainbottom_sidebar(){	

	register_sidebar(array(

		'name'          => __('Below Content Widgets', 'klasik' ),

		'id'         	=> 'mainbottom',

		'description'   => __( 'A widget area just below the content. The widgets you place here will (should) be centered.', 'klasik' ),

		'before_widget' => '<div class="widget-belowcontent">',

		'after_widget' 	=> '</div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));



}





function klasik_footer1_sidebar_init(){



	register_sidebar(array(

		'name'          => __('Not in use', 'klasik' ),

		'id'         	=> 'footer1',

		'description'   => __( 'Located at the footer column 1.', 'klasik' ),

		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

	

}



function klasik_footer2_sidebar_init(){



	register_sidebar(array(

		'name'          => __('Not in use', 'klasik' ),

		'id'         	=> 'footer2',

		'description'   => __( 'Located at the footer column 2.', 'klasik' ),

		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));	

	

}



function klasik_footer3_sidebar_init(){



	register_sidebar(array(

		'name'          => __('Not in use', 'klasik' ),

		'id'         	=> 'footer3',

		'description'   => __( 'Located at the footer column 3.', 'klasik' ),

		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

	

}



function klasik_footer4_sidebar_init(){



	register_sidebar(array(

		'name'          => __('Not in use', 'klasik' ),

		'id'         	=> 'footer4',

		'description'   => __( 'Located at the footer column 4.', 'klasik' ),

		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

	

}



function klasik_footer5_sidebar_init(){



	register_sidebar(array(

		'name'          => __('Not in use', 'klasik' ),

		'id'         	=> 'footer5',

		'description'   => __( 'Located at the footer column 5.', 'klasik' ),

		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

	

}



function klasik_footer6_sidebar_init(){



	register_sidebar(array(

		'name'          => __('Not in use', 'klasik' ),

		'id'         	=> 'footer6',

		'description'   => __( 'Located at the footer column 6.', 'klasik' ),

		'before_widget' => '<div class="widget-bottom"><ul><li id="%1$s" class="widget-container %2$s">',

		'after_widget' 	=> '<div class="clear"></div></li></ul><div class="clear"></div></div>',

		'before_title' 	=> '<h3 class="widget-title">',

		'after_title' 	=> '</h3>',

	));

	

}







/** Register sidebars by running klasik_sidebar_init() on the widgets_init hook. */

add_action( 'widgets_init', 'klasik_sidebar_init' );


add_action( 'widget_init', 'klasik_fullwidth_sidebar' );

add_action( 'widgets_init', 'klasik_maintop_sidebar' );

add_action( 'widgets_init', 'klasik_contenttop_sidebar' );



add_action( 'widgets_init', 'klasik_contentbottom_sidebar' );

add_action( 'widgets_init', 'klasik_mainbottom_sidebar' );



