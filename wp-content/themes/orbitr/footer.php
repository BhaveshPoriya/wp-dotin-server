<?php
/**
 * The template for displaying the footer
 *
 * @package Orbitr
 */

?>

        <!--foter sidebar start here --> 
        <div class="footer-sidebar-wrapper">
            <div class="container">
            <div class="row">
                <div class="col-md-3 first">
                    <div class="fsidebar wow fadeInLeft" data-wow-offset="10"  >
                        <?php if (is_active_sidebar('first-footer-widget')) : ?>
                            <?php dynamic_sidebar('first-footer-widget'); ?>
                        <?php endif; ?>
                    </div>    
                </div>
                    
                <div class="col-md-3 second">
                    <div class="fsidebar wow fadeInLeft" data-wow-offset="10"  >
                        <?php if (is_active_sidebar('second-footer-widget')) : ?>
                            <?php dynamic_sidebar('second-footer-widget'); ?>
                        <?php endif; ?>
                    </div>    
                </div>
                    
                <div class="col-md-3 third">
                    <div class="fsidebar wow fadeInLeft" data-wow-offset="10"  >
                        <?php if (is_active_sidebar('third-footer-widget')) : ?>
                            <?php dynamic_sidebar('third-footer-widget'); ?>
                        <?php endif; ?>
                    </div>    
                </div>
                    
                <div class="col-md-3 fourth">
                    <div class="fsidebar wow fadeInLeft" data-wow-offset="10"  >
                        <?php if (is_active_sidebar('fourth-footer-widget')) : ?>
                            <?php dynamic_sidebar('fourth-footer-widget'); ?>
                        <?php endif; ?>
                    </div>    
                </div>
            </div>
           </div>     
        </div>
        <!-- footer sidebar end here -->  

        <!--foter sidebar start here --> 
        <?php 
            $footer_credits = esc_attr( get_theme_mod('footer_credits') ); 
        ?>
        <div class="footer-wrapper">
            <div class="container">
            <div class="row">
                <div class="footer">
                <div class="col-md-6 col-sm-6">
                    <div class='footer-left'>
                        <?php if ( isset($footer_credits) && $footer_credits != '') { ?>
                            <p><?php echo $footer_credits; ?></p>
                        <?php } else { ?>   
                            <p><?php printf( esc_html__( 'Theme Design and Develop by %s', 'orbitr' ), '<a href="https://retina-theme.com">Retina Theme</a>' ); ?></p>
                        <?php } ?>  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class='social-icons wow bounceIn'>
                        <ul>
                            <?php if ( '' !== get_theme_mod( 'social_facebook' ) ) { ?>
                                <li>
                                    <div class="circle">
                                        <a href="<?php echo esc_url(get_theme_mod('social_facebook','Facebook url')); ?>"title="Facebook">
                                            <i class="fa fa-facebook">
                                                <span><?php _e( 'Facebook','orbitr'); ?></span>
                                            </i>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ( '' !== get_theme_mod( 'social_twitter' ) ) { ?>
                                <li>
                                    <div class="circle">
                                        <a href="<?php echo esc_url(get_theme_mod('social_twitter','Twitter url')); ?>"title="Twitter">
                                            <i class="fa fa-twitter">
                                                <span><?php _e( 'Twitter','orbitr'); ?></span>
                                            </i>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ( '' !== get_theme_mod('social_google_plus') ) { ?>
                                <li>
                                    <div class="circle">
                                        <a href="<?php echo esc_url(get_theme_mod('social_google_plus','G+ url')); ?>"title="Google+">
                                            <i class="fa fa-google-plus">
                                                <span><?php _e( 'Google+','orbitr'); ?></span>
                                            </i>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ( '' !== get_theme_mod( 'social_rss' ) ) { ?>
                                <li>
                                    <div class="circle">
                                        <a href="<?php echo esc_url(get_theme_mod('social_rss','Rss url')); ?>"title="RSS Feed">
                                            <i class="fa fa-rss">
                                                <span><?php _e( 'RSS','orbitr'); ?></span>
                                            </i>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ( '' !== get_theme_mod('social_pinterest') ) { ?>
                                <li>
                                    <div class="circle">
                                        <a href="<?php echo esc_url(get_theme_mod('social_pinterest','Pinterest url')); ?>"title="Pinterest">
                                            <i class="fa fa-pinterest">
                                                <span><?php _e( 'Pinterest','orbitr'); ?></span>
                                            </i>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php if ( '' !== get_theme_mod('social_linkedin') ) { ?>
                                <li>
                                    <div class="circle">
                                        <a href="<?php echo esc_url(get_theme_mod('social_linkedin','Linkedin url')); ?>"title="Pinterest">
                                            <i class="fa fa-linkedin">
                                                <span><?php _e( 'Linkedin','orbitr'); ?></span>
                                            </i>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
           </div>
        </div>        
        </div>
        <!-- footer sidebar end here -->  
        </div>
         <?php wp_footer(); ?>
    </body>
</html>