<?php 
    $blog_heading = esc_attr( get_theme_mod('blog_heading') );
?> 

<div class="blog-wrapper">
    <div class="container">
        <div class="row">
             <div class="col-md-12">
                <div class="team-heading">
                    <?php if( isset($blog_heading) && $blog_heading != '' ){ ?>
                        <h2><?php echo $blog_heading; ?></h2>
                    <?php }else{ ?>
                        <h2><?php _e( 'Recent Blogs','orbitr'); ?></h2>
                    <?php } ?>
                </div>
            </div>
            <!-- Start the Loop. -->

            <div class="blog-outer">
            <?php
              $args = array(
 	              'type'            => 'post',
                  'orderby'         => 'post_date',
                  'order'           => 'DESC',
                  'post_status'     => 'publish',
	              'ignore_sticky_posts'=> 1,
	              'posts_per_page'  => 6,
	              'suppress_filters' => true );
              $the_query = new WP_Query( $args ); 
              if ( $the_query->have_posts() ) : 
              while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>

                <div class="col-md-4 col-sm-4">
                    <div id="blog-<?php the_ID(); ?>" class="blog_post wow zoomIn">
                        
                        <div class="thumb_meta">
                            <div class="thumb clear">
                                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 360, 200); ?></a>
                                <?php  }else {  ?>
                                    <a href="<?php the_permalink(); ?>"><img src='<?php echo get_template_directory_uri(); ?>/images/journey-compress.jpg' alt='feature3' width='360px' height="210px !important" ></a>
                                <?php } ?>
                                
                                <a href="<?php the_permalink(); ?>"><div class="member-image-hover"><i class="fa fa-file-text"></i></div></a>
                                
                            </div>
                            
                            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            
                            
                            <div class="post-content clear">
                                <?php 
						if(has_excerpt()){
							echo get_the_excerpt();
						}else{
							echo orbitr_excerpt( get_the_content() , 190 );
						}
						?>
                                <p class="readmore">
                                    <a href="<?php the_permalink() ?>" class="wpanch">
                                        <?php echo sprintf( esc_html__( 'Read More %s', 'orbitr' ), the_title( '<span class="screen-reader-text">', '</span>', false ) ) ; ?>
                                    </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>