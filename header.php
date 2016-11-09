<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

            <title>

                  <?php // WordPress custom title script

                  // is the current page a tag archive page?
                  if (function_exists('is_tag') && is_tag()) {

                  	// if so, display this custom title
                  	echo 'Tag Archive for &quot;'.$tag.'&quot; - ';

                  // or, is the page an archive page?
                  } elseif (is_archive()) {

                  	// if so, display this custom title
                  	wp_title(''); echo ' Archive - ';

                  // or, is the page a search page?
                  } elseif (is_search()) {

                  	// if so, display this custom title
                  	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';

                  // or, is the page a single post or a literal page?
                  } elseif (!(is_404()) && (is_single()) || (is_page())) {

                  	// if so, display this custom title
                  	wp_title(''); echo ' - ';

                  // or, is the page an error page?
                  } elseif (is_404()) {

                  	// yep, you guessed it
                  	echo 'Not Found - ';

                  }
                  // finally, display the blog name for all page types
                  bloginfo('name');

                  ?>

          </title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!-- <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>
  </head>

  <body>


    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        

          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>
