<?php 
    $parallax_section_title = esc_attr( get_theme_mod('parallax_section_title') ); 
    $parallax_section_desc = esc_attr( get_theme_mod('parallax_section_desc') );
    $parallax_section_button_text = esc_attr( get_theme_mod('parallax_section_button_text') );
    $parallax_section_button_link = esc_url( get_theme_mod('parallax_section_button_link') );
?>
<!-- slider Description start here --> 
<section id="slidescrip">
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class='slider-content'>
					<?php if ( isset($parallax_section_title) && $parallax_section_title != '') { ?>
						<h2 class="wow pulse"><?php echo $parallax_section_title; ?></h2>
					<?php } else { ?>
						<h2 class="wow pulse">
						<?php _e( 'Build Your Clean & Optimized Website Within Few Clicks','orbitr'); ?>
						</h2> 
					<?php } ?>

					<?php if ( isset($parallax_section_desc) && $parallax_section_desc != '') { ?>
						<p class="wow pulse"><?php echo $parallax_section_desc; ?></p>
					<?php } else { ?>
						<p class="wow pulse">
							<?php _e( 'Creating your website with orbitr is completely easy. You just need to perform few tweaks in the theme option panel and your website will be ready to use. You can showcase all important aspects of your business here on home page.','orbitr'); ?>
						</p> 
					<?php } ?>
					    
					<p class="slider_buttons">
                        <?php if ( isset($parallax_section_button_text) && $parallax_section_button_text != '') { ?>
                            <a href="<?php echo $parallax_section_button_link; ?>" class="btn btn-sm animated-button victoria-four orange not-first wow flipInX">  <?php echo $parallax_section_button_text; ?> </a>
                        <?php } else { ?> 
                            <a href="#" class="btn btn-sm animated-button victoria-four orange not-first wow flipInX">
                                <?php _e( 'Featured','orbitr'); ?>
                            </a>
                        <?php } ?>
                    </p>
				</div>

			</div>
		</div>
   </div>
</section>