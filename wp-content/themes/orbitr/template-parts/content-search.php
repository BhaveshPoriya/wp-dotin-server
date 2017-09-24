<?php

/*
 */
?>
<!-- Start the Loop. -->
<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'orbitr' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><?php /* Start the Loop */
						while ( have_posts() ) : the_post();?>
        <div id="post-<?php the_ID(); ?>" class="post">
            <div class="post-heading">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            </div>
            <div class="entry-meta">
			   <?php orbitr_posted_on(); ?>
		    </div>
            <div class="thumb clear">
                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array(710, 380) ); ?>  </a>
                    <?php
                } else {
                  }
                ?>	
            </div>
            <div class="post-content clear">
                <?php the_excerpt(); ?>
                <?php wp_link_pages(); ?>
                <a href="<?php the_permalink() ?>" class="wpanch"><?php echo sprintf(
                    esc_html__( 'Continue reading..%s', 'orbitr' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                   ) ; ?>
                </a>
            </div>
        </div>
        <?php
    endwhile;
else:
    ?>
    <div>
        <p>
            <?php _e('Sorry no post matched your criteria', 'orbitr'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->