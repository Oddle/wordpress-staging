<?php


// adding scripts
function custom_scripts() {

	// unregister the jQuery at first
	wp_deregister_script('jquery');
	// register to footer (the last function argument should be true)
  wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);
  wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
  wp_enqueue_script('bootstrap');

	wp_register_script('css', get_template_directory_uri() . '/js/loadCSS.js', false, null, true);
  wp_enqueue_script('css');
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );
// end of adding scripts

// adding styles
// function custom_css() {
// 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
// 	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
// }
// add_action( 'wp_enqueue_scripts', 'custom_css' );
// end of adding styles

// Defer Javascripts
// Defer jQuery Parsing using the HTML5 defer property
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}
