<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package orbitr
 */

?>
<div id="post-<?php the_ID(); ?>" class="post">
   <div class="page-heading">
      <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
   </div>
                            
   <div class="page-content clear">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'orbitr' ),
				'after'  => '</div>',
			) );
		?>
   </div>
</div>