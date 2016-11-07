<?php

// Add scripts and stylesheets
function wordpresscustom_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );

	// unregister the jQuery at first
	wp_deregister_script('jquery');
	// register to footer (the last function argument should be true)
  wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
  wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
  wp_enqueue_script('bootstrap');

	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'wordpresscustom_scripts' );
