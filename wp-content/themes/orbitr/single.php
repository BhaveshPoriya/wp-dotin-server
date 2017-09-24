<?php
/**
 * The template for displaying all single posts.
 *
 * @package Orbitr
 */

get_header(); ?>
<div id="wrapper" class="orbitr-boxed">
<div class="content-wrapper">
<div class="container">
	<div id="primary" class="content-area">
             <div class="row">
            <div class="col-md-8">
                <section id="blog">
		 <!-- Start the Loop. -->
                <?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );

					the_post_navigation( array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Article', 'orbitr' ) . '</span> ' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Article', 'orbitr' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					) );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
                </section><!--/#blog-->
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-4">
                    
                     <?php get_sidebar(); ?>
                         
                 </div>
                 
                 </div><!-- #main -->
	</div><!-- #primary -->
    </div>
</div>
</div>
<?php get_footer(); ?>