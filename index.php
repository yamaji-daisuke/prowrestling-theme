<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage test-theme
 * @since 2016.06.08
 */

get_header(); ?>

<div class="container layout-contents">
  <div class="row">
    <div class="col-md-8">
      <main id="main" class="entries" role="main">
  		  <?php if ( have_posts() ) : ?>
			    <?php if ( is_home() && ! is_front_page() ) : ?>
				    <header>
					    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				    </header>
			    <?php endif; ?>

			    <?php /// Start the loop.
			      while ( have_posts() ) : the_post();
				    get_template_part( 'content', get_post_format() );
			      endwhile; /// End the loop.

			      the_posts_pagination( array(
				      'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				      'next_text'          => __( 'Next page', 'twentyfifteen' ),
				      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			      ));

		    else : /// If no content, include the "No posts found" template.
			    get_template_part( 'content', 'none' );
		    endif;
		    ?>
		  </main>
	  </div>
    <div class="col-md-4">
      <div class="sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<!-- CONTENTS FINISH -->

<?php get_footer(); ?>
