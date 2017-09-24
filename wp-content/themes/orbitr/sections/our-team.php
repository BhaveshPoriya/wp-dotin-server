<?php
			
global $wp_customize;

			echo '<section class="our-team" id="team">';

				echo '<div class="container">';

					echo '<div class="slider-content">';

						$orbitr_ourteam_title = get_theme_mod('orbitr_ourteam_title',__('YOUR TEAM','orbitr'));
					
						if( !empty($orbitr_ourteam_title) ):
echo '<h2 class="wow pulse">'.wp_kses_post( $orbitr_ourteam_title ).'</h2>';

						elseif ( isset( $wp_customize ) ):

							echo '<h2 class="wow pulse orbitr_hidden_if_not_customizer"></h2>';

						endif;

$orbitr_ourteam_subtitle = get_theme_mod('orbitr_ourteam_subtitle',__('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.','orbitr'));

						if( !empty($orbitr_ourteam_subtitle) ):

							echo '<p class="wow pulse">'.wp_kses_post( $orbitr_ourteam_subtitle ).'</p>';

						elseif ( isset( $wp_customize ) ):
echo '<p class="wow pulse orbitr_hidden_if_not_customizer"></p>';
endif;

echo '</div>';

					if(is_active_sidebar( 'sidebar-ourteam' )):
echo '<div class="row wow fadeInRight" data-wow-offset="10"  >';
dynamic_sidebar( 'sidebar-ourteam' );

echo '</div> ';

else:

echo '<div class="row wow fadeInRight" data-wow-offset="10"  >';

the_widget( 'orbitr_team_widget','name=ASHLEY SIMMONS&position=Project Manager&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team1.png', array('before_widget' => '', 'after_widget' => '') );
the_widget( 'orbitr_team_widget','name=TIMOTHY SPRAY&position=Art Director&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team2.png', array('before_widget' => '', 'after_widget' => '') );
						
the_widget( 'orbitr_team_widget','name=TONYA GARCIA&position=Account Manager&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team3.png', array('before_widget' => '', 'after_widget' => '') );
						
the_widget( 'orbitr_team_widget','name=JASON LANE&position=Business Development&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/team4.png', array('before_widget' => '', 'after_widget' => '') );
echo '</div>';
					endif;

				
echo '</div>';

			
echo '</section>';

?>