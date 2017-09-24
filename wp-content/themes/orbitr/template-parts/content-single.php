 <?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package orbitr
 */

?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="post-heading">
                                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                            </div>
                            <div class="entry-meta">
                                <?php orbitr_posted_on(); ?>
                            </div>
							<div class="article-featured-image">
			                     <?php the_post_thumbnail( 'orbitr-featured-single' ); ?>
		                    </div>
                            <div class="post-content clear">
                                <?php the_content(); ?>
                                
                                <?php wp_link_pages( ); ?>
                                
                            </div>
                        </div>