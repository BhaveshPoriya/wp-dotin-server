<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?>>
	
	<header id="masthead" class="site-header" role="banner">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-8 col-xs-12">
				<div class="logo" itemprop="headline">
					<?php if ( has_custom_logo() ) {
					  
							orbitr_the_custom_logo(); ?>
					<?php } else { ?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" class="plain"><?php bloginfo( 'name' ); ?></a>
					<?php } ?>
				</div>		
                  </div>
				  <div class="col-md-8 col-sm-4 col-xs-12">
                            <div class="toggle"></div> <!-- toggle -->
                    <div class="sitenav">
                          <?php wp_nav_menu(array(
						  'theme_location' => 'primary-menu',
						  'echo' => true, 
						  'fallback_cb' => 'orbitr_nav_fallback')); ?>
                    </div><!-- site-nav -->
                       <div class="clear"></div>
                  </div><!-- col-md-8 col-sm-4 col-xs-12 -->
                </div><!-- row -->				
            </div><!-- container -->
        </div><!-- header-wrapper -->
	</header><!-- #masthead -->


    <!-- this code is used for a button that go to top of website -->
        <div class="container">    
            <div class="row">
                <p id="back-top" style="display: block;">
                    <a href="#top"><span><i class="fa fa-angle-up"><span><?php esc_html_e( 'Back to Top', 'orbitr' ); ?></span></i></span></a>
                </p>
            </div>
        </div>        