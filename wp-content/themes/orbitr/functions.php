<?php
/**
 * orbitr functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package orbitr
 */

if ( ! function_exists( 'orbitr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function orbitr_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on orbitr, use a find and replace
     * to change 'orbitr' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'orbitr', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
	add_image_size( 'orbitr-featured-single', 730, 340, true );
	/*
	 * This theme styles the visual editor to resemble the theme style.
	 */
    add_editor_style( array( 'css/editor-style.css', orbitr_fonts_url() ) );
    /*
     * This function id used for Logo upload.
     */
    add_theme_support( 'custom-logo' );

    /*
     * This theme uses wp_nav_menu() in one location.
     * This menu is used only for Front Page.
     */
		register_nav_menus( array(
			'primary-menu' => __( 'Primary Menu', 'orbitr' ),
		) );
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_image_size( 'orbitr-large', 720, 9999 );
    add_image_size( 'orbitr-medium', 575, 9999 );

    //Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'orbitr_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif;

add_action( 'after_setup_theme', 'orbitr_setup' );
if( !function_exists( 'orbitr_excerpt' ) ){
	function orbitr_excerpt( $content , $letter_count ){
		$content = strip_shortcodes( $content );
		$content = strip_tags( $content );
		$content = mb_substr( $content, 0 , $letter_count );

		if( strlen( $content ) == $letter_count ){
			$content .= "...";
		}
		return $content;
	}
}
if ( ! function_exists( 'orbitr_fonts_url' ) ) :
	/**
	 * Register default Google fonts
	 */
	function orbitr_fonts_url() {
	    $fonts_url = '';

	 	/* Translators: If there are characters in your language that are not
	    * supported by Open Sans, translate this to 'off'. Do not translate
	    * into your own language.
	    */
	    $open_sans = _x( 'on', 'Open Sans font: on or off', 'orbitr' );

	    /* Translators: If there are characters in your language that are not
	    * supported by Raleway, translate this to 'off'. Do not translate
	    * into your own language.
	    */
	    $raleway = _x( 'on', 'Raleway font: on or off', 'orbitr' );

	    if ( 'off' !== $raleway || 'off' !== $open_sans ) {
	        $font_families = array();

	        if ( 'off' !== $raleway ) {
	            $font_families[] = 'Raleway:400,500,600,700,300,100,800,900';
	        }

	        if ( 'off' !== $open_sans ) {
	            $font_families[] = 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic';
	        }

	        $query_args = array(
	            'family' => urlencode( implode( '|', $font_families ) ),
	            'subset' => urlencode( 'latin,latin-ext' ),
	        );

	        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	    }

	    return esc_url_raw( $fonts_url );
	}
endif;

function orbitr_nav_fallback(){
	echo '<div class="menu-alert">' . __('Use WordPress Menu builder OR Customizer to Manage Menus', 'orbitr') . '</div>';
}

if ( ! function_exists( 'orbitr_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since orbitr 1.0
 */
function orbitr_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {

		the_custom_logo();
	}
}
endif;
/*****************************************/

/******          WIDGETS     *************/
/*****************************************/

add_action('widgets_init', 'orbitr_register_widgets');

function orbitr_register_widgets() {    


    register_widget('orbitr_team_widget');
	
	
	$orbitr_sidebars = array ( 
		'sidebar-ourteam' => 'sidebar-ourteam' );
	
	/* Register sidebars */
	foreach ( $orbitr_sidebars as $orbitr_sidebar ):
	
		if( $orbitr_sidebar == 'sidebar-ourteam' ):
		
			$orbitr_name = __('Our team section widgets', 'orbitr');
			
		else:
		
			$orbitr_name = $orbitr_sidebar;
			
		endif;
		
        register_sidebar(
            array (
                'name'          => $orbitr_name,
                'id'            => $orbitr_sidebar,
                'before_widget' => '',
                'after_widget'  => ''
            )
        );
		
    endforeach;
	
}

add_action('admin_enqueue_scripts', 'orbitr_team_widget_scripts');

function orbitr_team_widget_scripts() {    

	wp_enqueue_media();

    wp_enqueue_script('orbitr_team_widget_script', get_template_directory_uri() . '/js/widget-team.js', false, '1.0', true);

}

class orbitr_team_widget extends WP_Widget{	

	public function __construct() {
		parent::__construct(
			'orbitr_team-widget',
			__( 'Orbitr - Team member widget', 'orbitr' )
		);
	}

    function widget($args, $instance) {

        extract($args);

        echo $before_widget;

        ?>

        <div class="col-lg-3 col-sm-3 team-box">

            <div class="team-member">

				<?php if( !empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image') ) { ?>
				
					<figure class="profile-pic">

						<img src="<?php echo esc_url($instance['image_uri']); ?>" alt="<?php _e( 'Uploaded image', 'orbitr' ); ?>" />

					</figure>
				<?php
					} elseif( !empty($instance['custom_media_id']) ) {
			
						$orbitr_team_custom_media_id = wp_get_attachment_image_src($instance["custom_media_id"] );
						if( !empty($orbitr_team_custom_media_id) && !empty($orbitr_team_custom_media_id[0]) ) {
							?>

								<figure class="profile-pic">

									<img src="<?php echo esc_url($orbitr_team_custom_media_id[0]); ?>" alt="<?php _e( 'Uploaded image', 'orbitr' ); ?>" />

								</figure>
					
							<?php
						}
					} 
				?>

                <div class="member-details">

					<?php if( !empty($instance['name']) ): ?>
					
						<h3 class="dark-text red-border-bottom"><?php echo apply_filters('widget_title', $instance['name']); ?></h3>
						
					<?php endif; ?>	

					<?php if( !empty($instance['position']) ): ?>
					
						<div class="position"><?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['position'])); ?></div>
				
					<?php endif; ?>

                </div>

                <div class="social-ico">

                    <ul>
                        <?php
                            $orbitr_team_target = '_self';
                            if( !empty($instance['open_new_window']) ):
                                $orbitr_team_target = '_blank';
                            endif;
                        ?>

                        <?php if ( !empty($instance['fb_link']) ): ?>
                            <li><a href="<?php echo apply_filters('widget_title', $instance['fb_link']); ?>" target="<?php echo $orbitr_team_target; ?>"><i
                                        class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>

                        <?php if ( !empty($instance['tw_link']) ): ?>
                            <li><a href="<?php echo apply_filters('widget_title', $instance['tw_link']); ?>" target="<?php echo $orbitr_team_target; ?>"><i
                                        class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>

                        <?php if ( !empty($instance['bh_link']) ): ?>
                            <li><a href="<?php echo apply_filters('widget_title', $instance['bh_link']); ?>" target="<?php echo $orbitr_team_target; ?>"><i
                                        class="fa fa-behance"></i></a></li>
                        <?php endif; ?>

                        <?php if ( !empty($instance['db_link']) ): ?>
                            <li><a href="<?php echo apply_filters('widget_title', $instance['db_link']); ?>" target="<?php echo $orbitr_team_target; ?>"><i
                                        class="fa fa-dribbble"></i></a></li>
                        <?php endif; ?>
						
						<?php if ( !empty($instance['ln_link']) ): ?>
                            <li><a href="<?php echo apply_filters('widget_title', $instance['ln_link']); ?>" target="<?php echo $orbitr_team_target; ?>"><i
                                        class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>

                    </ul>

                </div>

				<?php if( !empty($instance['description']) ): ?>
                <div class="details">

                    <?php echo htmlspecialchars_decode(apply_filters('widget_title', $instance['description'])); ?>

                </div>
				<?php endif; ?>

            </div>

        </div>

        <?php

        echo $after_widget;

    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['name'] = strip_tags($new_instance['name']);
        $instance['position'] = stripslashes(wp_filter_post_kses($new_instance['position']));
        $instance['description'] = stripslashes(wp_filter_post_kses($new_instance['description']));
        $instance['fb_link'] = strip_tags($new_instance['fb_link']);
        $instance['tw_link'] = strip_tags($new_instance['tw_link']);
        $instance['bh_link'] = strip_tags($new_instance['bh_link']);
        $instance['db_link'] = strip_tags($new_instance['db_link']);
		$instance['ln_link'] = strip_tags($new_instance['ln_link']);
        $instance['image_uri'] = strip_tags($new_instance['image_uri']);
        $instance['open_new_window'] = strip_tags($new_instance['open_new_window']);
		$instance['custom_media_id'] = strip_tags($new_instance['custom_media_id']);

        return $instance;

    }

    function form($instance) {

        ?>

        <p>
            <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'orbitr'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('name'); ?>" id="<?php echo $this->get_field_id('name'); ?>" value="<?php if( !empty($instance['name']) ): echo $instance['name']; endif; ?>" class="widefat"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('position'); ?>"><?php _e('Position', 'orbitr'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('position'); ?>" id="<?php echo $this->get_field_id('position'); ?>"><?php if( !empty($instance['position']) ): echo htmlspecialchars_decode($instance['position']); endif; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Description', 'orbitr'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('description'); ?>"
                      id="<?php echo $this->get_field_id('description'); ?>"><?php
                if( !empty($instance['description']) ): echo htmlspecialchars_decode($instance['description']); endif;
            ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('fb_link'); ?>"><?php _e('Facebook link', 'orbitr'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('fb_link'); ?>" id="<?php echo $this->get_field_id('fb_link'); ?>" value="<?php if( !empty($instance['fb_link']) ): echo $instance['fb_link']; endif; ?>" class="widefat">

        </p>
        <p>
            <label for="<?php echo $this->get_field_id('tw_link'); ?>"><?php _e('Twitter link', 'orbitr'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('tw_link'); ?>" id="<?php echo $this->get_field_id('tw_link'); ?>" value="<?php if( !empty($instance['tw_link']) ): echo $instance['tw_link']; endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('bh_link'); ?>"><?php _e('Behance link', 'orbitr'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('bh_link'); ?>" id="<?php echo $this->get_field_id('bh_link'); ?>" value="<?php if( !empty($instance['bh_link']) ): echo $instance['bh_link']; endif; ?>" class="widefat">

        </p>
        <p>
            <label for="<?php echo $this->get_field_id('db_link'); ?>"><?php _e('Dribble link', 'orbitr'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('db_link'); ?>" id="<?php echo $this->get_field_id('db_link'); ?>" value="<?php if( !empty($instance['db_link']) ): echo $instance['db_link']; endif; ?>" class="widefat">
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('ln_link'); ?>"><?php _e('Linkedin link', 'orbitr'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('ln_link'); ?>" id="<?php echo $this->get_field_id('ln_link'); ?>" value="<?php if( !empty($instance['ln_link']) ): echo $instance['ln_link']; endif; ?>" class="widefat">
        </p>
        <p>
            <input type="checkbox" name="<?php echo $this->get_field_name('open_new_window'); ?>" id="<?php echo $this->get_field_id('open_new_window'); ?>" <?php if( !empty($instance['open_new_window']) ): checked( (bool) $instance['open_new_window'], true ); endif; ?> ><?php _e( 'Open links in new window?','orbitr' ); ?><br>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Image', 'orbitr'); ?></label><br/>

            <?php

            if ( !empty($instance['image_uri']) ) :

                echo '<img class="custom_media_image_team" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="'.__( 'Uploaded image', 'orbitr' ).'" /><br />';

            endif;

            ?>

            <input type="text" class="widefat custom_media_url_team" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php if( !empty($instance['image_uri']) ): echo $instance['image_uri']; endif; ?>" style="margin-top:5px;">
            <input type="button" class="button button-primary custom_media_button_team" id="custom_media_button_clients" name="<?php echo $this->get_field_name('image_uri'); ?>" value="<?php _e('Upload Image','orbitr'); ?>" style="margin-top:5px;">
        </p>
		
		<input class="custom_media_id" id="<?php echo $this->get_field_id( 'custom_media_id' ); ?>" name="<?php echo $this->get_field_name( 'custom_media_id' ); ?>" type="hidden" value="<?php if( !empty($instance["custom_media_id"]) ): echo $instance["custom_media_id"]; endif; ?>" />

    <?php

    }

}

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function orbitr_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'orbitr_add_excerpt_support_for_pages' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function orbitr_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'orbitr_content_width', 640 );
}
add_action( 'after_setup_theme', 'orbitr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function orbitr_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'orbitr' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'orbitr' ),
        'before_widget' => '<div id="%1$s" class="sidebar_widget wow widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // First Footer Widget
    register_sidebar( array(
        'name'          => esc_html__( 'First Footer Widget', 'orbitr' ),
        'id'            => 'first-footer-widget',
        'description'   => esc_html__( 'Add widgets here.', 'orbitr' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Second Footer Widget
    register_sidebar( array(
        'name'          => esc_html__( 'Second Footer Widget', 'orbitr' ),
        'id'            => 'second-footer-widget',
        'description'   => esc_html__( 'Add widgets here.', 'orbitr' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Third Footer Widget
    register_sidebar( array(
        'name'          => esc_html__( 'Third Footer Widget', 'orbitr' ),
        'id'            => 'third-footer-widget',
        'description'   => esc_html__( 'Add widgets here.', 'orbitr' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Fourth Footer Widget
    register_sidebar( array(
        'name'          => esc_html__( 'Fourth Footer Widget', 'orbitr' ),
        'id'            => 'fourth-footer-widget',
        'description'   => esc_html__( 'Add widgets here.', 'orbitr' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
		// Counter Sidebar
		register_sidebar( array(
			'name'          => __( 'Front page - Counter Sidebar', 'orbitr' ),
			'id'            => 'front-page-counter-sidebar',
			'description'   => __( 'The widgets added in this sidebar will appear in counter section from front page.', 'orbitr' ),
			'before_widget' => '<div id="%1$s" class="col-sm-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		) );
}
add_action( 'widgets_init', 'orbitr_widgets_init' );


/**
 * Enqueue styles.
 */
function orbitr_styles() {
    wp_enqueue_style('orbitr-fonts', orbitr_fonts_url(), array());
    wp_enqueue_style('orbitr-flexslider-css', get_template_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style('orbitr-font-awesome-css', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('orbitr-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('orbitr-animate-css', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('orbitr-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'orbitr_styles' );

/**
 * Enqueue scripts.
 */
function orbitr_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('orbitr-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'));
    wp_enqueue_script('orbitr-superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'));
    wp_enqueue_script('orbitr-counter', get_template_directory_uri() . '/js/counter.js', array('jquery'));	
    wp_enqueue_script('orbitr-countto', get_template_directory_uri() . '/js/count-to.js', array('jquery'));	
    wp_enqueue_script('orbitr-visible', get_template_directory_uri() . '/js/visible.js', array('jquery'));
	wp_enqueue_script('header-fix', get_template_directory_uri() . '/js/header-fix.js', array('jquery'));
    wp_enqueue_script('orbitr-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
    wp_enqueue_script('orbitr-menu', get_template_directory_uri() . '/js/menu.js', array('jquery'));
    wp_enqueue_script('orbitr-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
    wp_enqueue_script('orbitr-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'));
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'orbitr_scripts' );

require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom-Customizer additions.
 */
require get_template_directory() . '/inc/custom-customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/define_template.php';

require get_template_directory() . '/inc/style.php';


function orbitr_get_excerpt($count){
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  return $excerpt.'[...]';
}

function orbitr_excerpt_length( $length ) {
    return 60;
}
add_filter( 'excerpt_length', 'orbitr_excerpt_length', 999 );


function orbitr_custom_css(){
    $custom_css = esc_attr( get_theme_mod('custom_css') );
    echo '<style type="text/css">'.$custom_css.'</style>';
}
add_action('wp_head', 'orbitr_custom_css');