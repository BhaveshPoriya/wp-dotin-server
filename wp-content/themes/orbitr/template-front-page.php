<?php
/*
 * Template Name: Front Page
 *
 *
 * The template for displaying the front page
 *
 *
 * @package Orbitr
 */
?>
<?php get_header(); ?>

  <?php 
	$orbitr_homeslider_show = get_theme_mod('orbitr_homeslider_show');

	if( isset($orbitr_homeslider_show) && $orbitr_homeslider_show != 0 ):

    get_template_part( 'sections/home-slider' );

	endif;

 
	$orbitr_descript_show = get_theme_mod('orbitr_descript_show');

	if( isset($orbitr_descript_show) && $orbitr_descript_show != 0 ):

     get_template_part( 'sections/descript' );

    endif;


	$orbitr_prices_show = get_theme_mod('orbitr_prices_show');

	if( isset($orbitr_prices_show) && $orbitr_prices_show != 0 ):

    get_template_part( 'sections/our-prices' );

    endif;


	$orbitr_blog_show = get_theme_mod('orbitr_blog_show');

	if( isset($orbitr_blog_show) && $orbitr_blog_show != 0 ):

    get_template_part( 'sections/our-blog' );

    endif;


	$orbitr_ourteam_show = get_theme_mod('orbitr_ourteam_show');

	if( isset($orbitr_ourteam_show) && $orbitr_ourteam_show != 0 ):

    get_template_part( 'sections/our-team' );

    endif;


	$orbitr_ourcounter_show = get_theme_mod('orbitr_ourcounter_show');

	if( isset($orbitr_ourcounter_show) && $orbitr_ourcounter_show != 0 ):

    get_template_part( 'sections/our-counter' );

    endif;
?>
<?php get_footer();?>