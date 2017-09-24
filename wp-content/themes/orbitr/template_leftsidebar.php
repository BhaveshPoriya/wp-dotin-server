<?php
/**
 * The template for displaying all single posts.
 *
 * Template Name: Left sidebar Page
 */

get_header(); ?>
<div class="content-wrapper">
    <div class="container">
	<div id="primary" class="content-area">
             <div class="row">
                 
                 <div class="col-md-4">
                     <?php get_sidebar(); ?>
                 </div>
                 
            <div class="col-md-8">
                <div class="content-bar" id="content">
		 <!-- Start the Loop. -->
                <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

                </div>
                 </div>               
                 </div><!-- #main -->
	</div><!-- #primary -->
    </div>
</div>
<?php get_footer(); ?>

