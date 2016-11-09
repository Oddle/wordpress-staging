
<?php /* Template Name: Blog Template */ ?>
<?php get_header(); ?>


      <div class="row">

        <div class="col-sm-8 blog-main">
          <h1>Blog Index!</h1>
          <?php
    			if ( have_posts() ) : while ( have_posts() ) : the_post();

    				get_template_part( 'content', get_post_format() ); //look for content, then insert content.php. content.php will have the post context, use the context to display the content

    			endwhile;
          ?>

          <nav>
          	<ul class="pager">
          		<li><?php next_posts_link( 'Previous' ); ?></li>
          		<li><?php previous_posts_link( 'Next' ); ?></li>
          	</ul>
          </nav>

          <?php
        endif;
    			?>



        </div><!-- /.blog-main -->
<?php get_sidebar(); ?>

      </div><!-- /.row -->
<?php get_footer(); ?>
