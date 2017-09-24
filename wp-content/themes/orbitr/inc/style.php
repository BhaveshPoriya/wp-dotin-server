<?php
/**
 * @package orbitr
 */

//Converts hex colors to rgba for the menu background color
function orbitr_hex2rgba($color, $opacity = false) {

        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        $rgb =  array_map('hexdec', $hex);
        $opacity = 0.9;
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';

        return $output;
}

//Dynamic styles
function orbitr_custom_styles($custom) {

	$custom = '';
	//Header
	if  ( !is_home() && !is_front_page() )  {
		$menu_bg_color = get_theme_mod( 'menu_bg_color', '#000000' );
		$rgba 	= orbitr_hex2rgba($menu_bg_color, 0.9);
		$custom .= ".site-header { position:relative;background-color:" . esc_attr($rgba) . ";}" . "\n";
		$custom .= ".admin-bar .site-header,.admin-bar .site-header.float-header { top:0;}"."\n";
		$custom .= ".site-header.fixed {position:relative;}"."\n";
		$custom .= ".fa.search-top { display: none !important;}"."\n";
		$custom .= ".site-header.float-header {padding:20px 0;}"."\n";
	}


	//Output all the styles
	wp_add_inline_style( 'orbitr-style', $custom );	
}
add_action( 'wp_enqueue_scripts', 'orbitr_custom_styles' );