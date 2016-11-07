<?php
add_action( 'wp_enqueue_scripts', 'wordpresscustom_scripts' );

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
