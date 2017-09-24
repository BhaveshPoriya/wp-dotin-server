  <?php 
    $first_slider_image = esc_url( get_theme_mod('first_slider_image') );
    $first_slider_title = esc_attr( get_theme_mod('first_slider_title') ); 
    $first_slider_des = esc_attr( get_theme_mod('first_slider_des') );
    $first_slider_first_button_text = esc_attr( get_theme_mod('first_slider_first_button_text') );
    $first_slider_first_button_link = esc_url( get_theme_mod('first_slider_first_button_link') );
    $first_slider_second_button_text = esc_attr( get_theme_mod('first_slider_second_button_text') );
    $first_slider_second_button_link = esc_url( get_theme_mod('first_slider_second_button_link') );
  ?>

<!-- slider start here --> 
<div class="slider slider-wrapper">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <?php if ( isset($first_slider_image) && $first_slider_image != '') { ?>
                    <img src="<?php echo esc_url($first_slider_image); ?>" />
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider.jpg" alt="" title="" />
                <?php } ?>
                
                    <div class="awe-overlay"></div>

                <div class="flex-caption">
                    <div class="container">
                    <!-- ***Slide 1 Text start *** -->
                    <?php if ( isset($first_slider_title) && $first_slider_title != '') { ?>
                        <h1 class="wow fadeInDown"><?php echo $first_slider_title; ?></h1>
                    <?php } else { ?> 
                        <h1 class="wow fadeInDown">
                            <?php _e( 'Elegant & Stylish Theme','orbitr'); ?>
                        </h1>
                    <?php } ?>
                        
                    <?php if ( isset($first_slider_des) && $first_slider_des != '') { ?>
                        <h3 class="wow fadeInLeft"><?php echo $first_slider_des; ?></h3>
                    <?php } else { ?>
                        <h3 class="wow fadeInLeft">
                            <?php _e( 'Orbitr Theme is based on Bootstrap and it is fully functional and Responsive for all screens.','orbitr'); ?>
                        </h3>
                    <?php } ?> 

                    <p class="slider_buttons">
                        <?php if ( isset($first_slider_first_button_text) && $first_slider_first_button_text != '') { ?>
                            <a href="<?php echo $first_slider_first_button_link; ?>" class="btn btn-sm animated-button victoria-four grey wow fadeInLeft">  <?php echo $first_slider_first_button_text; ?> </a>
                        <?php } else { ?> 
                            <a href="#" class="btn btn-sm animated-button victoria-four grey wow fadeInLeft">
                                <?php _e( 'Demo Here','orbitr'); ?>
                            </a>
                        <?php } ?>
                            
                        <?php if ( isset($first_slider_second_button_text) && $first_slider_second_button_text != '') { ?>
                            <a href="<?php echo $first_slider_second_button_link; ?>" class="btn btn-sm animated-button victoria-four orange not-first wow fadeInRight">  <?php echo $first_slider_second_button_text; ?> </a>
                        <?php } else { ?> 
                            <a href="#" class="btn btn-sm animated-button victoria-four orange not-first wow fadeInRight">
                                <?php _e( 'Download','orbitr'); ?> 
                            </a>
                        <?php } ?>
                    </p>
                    <!-- ***Slide 1 Text end *** -->
                    </div> 
                </div>
            </li>

              <?php 
                $second_slider_image = esc_url( get_theme_mod('second_slider_image') );
                $second_slider_title = esc_attr( get_theme_mod('second_slider_title') ); 
                $second_slider_des = esc_attr( get_theme_mod('second_slider_des') );
                $second_slider_first_button_text = esc_attr( get_theme_mod('second_slider_first_button_text') );
                $second_slider_first_button_link = esc_url( get_theme_mod('second_slider_first_button_link') );
                $second_slider_second_button_text = esc_attr( get_theme_mod('second_slider_second_button_text') );
                $second_slider_second_button_link = esc_url( get_theme_mod('second_slider_second_button_link') );
              ?>

            <?php if( $second_slider_image != '' || $second_slider_title != '' || $second_slider_des != '' ){ ?>
                <li>
                    <?php if ( isset($second_slider_image) && $second_slider_image != '') { ?>
                        <img src="<?php echo esc_url($second_slider_image); ?>" />
                    <?php } ?>
                    <div class="awe-overlay"></div>
                    
                    <div class="flex-caption">
                        <div class="container">
                        <!-- ***Slide 2 Text start *** -->
                        <?php if ( isset($second_slider_title) && $second_slider_title != '') { ?>
                            <h1 class="wow fadeInLeft"><?php echo $second_slider_title; ?></h1>
                        <?php } ?>
                            
                        <?php if ( isset($second_slider_des) && $second_slider_des != '') { ?>
                            <h3 class="wow fadeInLeft"><?php echo $second_slider_des; ?></h3>
                        <?php } ?>
                        
                        <p class="slider_buttons">
                            <?php if ( isset($second_slider_first_button_text) && $second_slider_first_button_text != '') { ?>
                                <a href="<?php echo $second_slider_first_button_link; ?>" class="btn btn-sm animated-button victoria-four grey">  <?php echo $second_slider_first_button_text; ?> </a>
                            <?php } ?>
                                
                            <?php if ( isset($second_slider_second_button_text) && $second_slider_second_button_text != '') { ?>
                                <a href="<?php echo $second_slider_second_button_link; ?>" class="btn btn-sm animated-button victoria-four orange not-first">  <?php echo $second_slider_second_button_text; ?> </a>
                            <?php } ?>
                        </p>

                        <div class="clearfix"></div>
                        </div>
                        <!-- ***Slide 2 Text end *** -->
                    </div>
                </li> 
            <?php } ?>
        </ul>
    </div>    
</div>
<!-- slider end here -->