<?php
	function mhsplanner_setup() {
	    add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 75,
			'flex-height' => true,
		) );
		add_theme_support( 'post-formats', array('gallery', 'video') );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );

	}
	add_action( 'after_setup_theme', 'mhsplanner_setup' );

	if ( ! function_exists( 'mytheme_custom_logo' ) ) {
		function mytheme_custom_logo() {
		    $output = '';
			$custom_logo_id = get_theme_mod( 'custom_logo' );
		    if (function_exists('get_custom_logo'))
		        $output = wp_get_attachment_image($custom_logo_id, 'full', false, array('class' => 'navbar-brand'));
		    if (empty($output))
		        $output = '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
		    echo $output;
		}
	}
?>