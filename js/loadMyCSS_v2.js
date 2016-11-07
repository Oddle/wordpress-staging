
// load a local CSS file
if(window.location.host.includes('localhost')) {
  loadCSS( "//" + window.location.host + "/wordpress/wp-content/themes/wordpresscustom/css/bootstrap.min.css" );
  loadCSS( "//" + window.location.host + "/wordpress/wp-content/themes/wordpresscustom/css/blog.css" );
} else {
  loadCSS( "//" + window.location.host + "/wp-content/themes/wordpress-staging/css/bootstrap.min.css" );
  loadCSS( "//" + window.location.host + "/wp-content/themes/wordpress-staging/css/blog.css" );
}
