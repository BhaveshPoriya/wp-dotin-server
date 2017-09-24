<?php
/**
 * The template for displaying Tags pages.
 *
 */
get_header();
?>
<!-- *** Single Post Starts *** -->
<div id="wrapper" class="orbitr-boxed">
<div class="content-wrapper">
<div class="container">
<div id="primary" class="content-area">
    <div class="row">
        <div class="page-post-container-wrapper">
            <div class="col-md-8">
                <div class="content-bar">
                       <!-- *** Tag loop starts *** -->
                    <?php if (have_posts()): ?>

                    <?php                     

                     if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <!-- ---------------Post starts ---------------- -->
                        <div id="post-<?php the_ID(); ?>" class="blog-post">
                            
                            <div class="blog-date">
                                <span class="blog-day"><?php echo esc_html( get_the_date('j') ) ?></span>
                                <span class="blog-month-year"><?php echo esc_html( get_the_date('M Y') ) ?></span>
                            </div>
                            
                            <div class="thumb clear">
                                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array(710, 380) ); ?>  </a>
                                    <?php
                                } else {
                                  }
                                ?>	
                            </div>
                            
                            <div class="post-heading">
                                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                            </div>
                            <div class="post-meta">
                                <ul>
                                    <li class="meta-admin"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                                    <li class="meta-cat"><i class="fa fa-folder-open"></i>  <?php the_category(', '); ?></li>
                                    <li class="meta-tag"><i class="fa fa-tag"></i> <?php the_tags(''); ?></li>
                                    <li class="meta-comm"><i class="fa fa-comment"></i> <?php comments_popup_link(__( 'Leave a comment', 'orbitr' ), __( '1 Comment', 'orbitr' ), __( '% Comments', 'orbitr' )); ?></li>
                                </ul>
                            </div>

                            <div class="post-content clear">
                                <?php the_excerpt(); ?>
                                <?php wp_link_pages(); ?>
                            </div>
                            
                            <div class="post-readmore">
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
                        
                        

                <!-- *** Tag loop ends*** --><?php wp_link_pages(); ?>
                        
                <?php endif; ?>

                    <!-- *** Post loop ends*** -->
                    </div>

                    <?php // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( '<i class="fa fa-chevron-left"></i>', 'orbitr' ),
                            'next_text'          => __( '<i class="fa fa-chevron-right"></i>', 'orbitr' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'orbitr' ) . ' </span>',
                        ) );
                    ?>

                    </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
				
            </div>
        </div>
</div>
</div> 
</div>
</div>
<?php get_footer(); ?>
