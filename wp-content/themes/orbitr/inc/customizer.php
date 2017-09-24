<?php
     //  =============================
     //  = Default Theme Customizer Settings  =
     //  @ orbitr Theme
     //  =============================


function orbitr_th_customize_control_enqueue_scripts() {
    //wp_enqueue_script( 'th-customize-controls', get_template_directory_uri(). '/js/customize-script.js', array( 'customize-controls' ) );
    //wp_register_style( 'ctypo-customize-controls', get_template_directory_uri(). '/css/customize-control.css');
}
add_action( 'customize_controls_enqueue_scripts', 'orbitr_th_customize_control_enqueue_scripts');

/*theme customizer*/
function orbitr_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
 
    //  ==============================
    //  ====== General Settings ======
    //  ==============================

    $wp_customize->get_section('title_tagline')->title = esc_html__('General Settings', 'orbitr');
    $wp_customize->get_section('title_tagline')->priority = 3; 
    //___Header Settings___//
    $wp_customize->add_section('header-settings', array(
            'title' => __('Parts Settings', 'orbitr'),
            'priority' => 9,
   ));
		/* show/hide */
		$wp_customize->add_setting( 'orbitr_homeslider_show', array(
			'sanitize_callback' => 'orbitr_sanitize_checkbox',
			'default' => 0,
			'capability' => 'edit_theme_options'
			));

		$wp_customize->add_control( 'orbitr_homeslider_show', array(
			'type' => 'checkbox',
			'label' => __('Enable slider section?','orbitr'),
			'section' => 'header-settings',
			'priority'    => 1,
		));



		/* our counter show/hide */
		$wp_customize->add_setting( 'orbitr_ourcounter_show', array(
			'sanitize_callback' => 'orbitr_sanitize_checkbox',
			'default' => 0,
			'capability' => 'edit_theme_options'
		));

		$wp_customize->add_control( 'orbitr_ourcounter_show', array(
			'type' => 'checkbox',
			'label' => __('Enable our counter section?','orbitr'),
			'section' => 'header-settings',
			'priority'    => 7,
		));






		/* our team show/hide */
		$wp_customize->add_setting( 'orbitr_ourteam_show', array(
			'sanitize_callback' => 'orbitr_sanitize_checkbox',
			'default' => 0,
			'capability' => 'edit_theme_options'
		));

		$wp_customize->add_control( 'orbitr_ourteam_show', array(
			'type' => 'checkbox',
			'label' => __('Enable our team section?','orbitr'),
			'section' => 'header-settings',
			'priority'    => 6,
		));
		/* pricess show/hide */
		$wp_customize->add_setting( 'orbitr_prices_show', array(
			'sanitize_callback' => 'orbitr_sanitize_checkbox',
			'default' => 0,
			'capability' => 'edit_theme_options'
		));

		$wp_customize->add_control( 'orbitr_prices_show', array(
			'type' => 'checkbox',
			'label' => __('Enable price tables section?','orbitr'),
			'section' => 'header-settings',
			'priority'    => 4,
		));
		/* blog show/hide */
		$wp_customize->add_setting( 'orbitr_blog_show', array(
			'sanitize_callback' => 'orbitr_sanitize_checkbox',
			'default' => 0,
			'capability' => 'edit_theme_options'
		));

		$wp_customize->add_control( 'orbitr_blog_show', array(
			'type' => 'checkbox',
			'label' => __('Enable Blog section?','orbitr'),
			'section' => 'header-settings',
			'priority'    => 5,
		));
		/* description show/hide */
		$wp_customize->add_setting( 'orbitr_descript_show', array(
			'sanitize_callback' => 'orbitr_sanitize_checkbox',
			'default' => 0,
			'capability' => 'edit_theme_options'
		));

		$wp_customize->add_control( 'orbitr_descript_show', array(
			'type' => 'checkbox',
			'label' => __('Enable description section?','orbitr'),
			'section' => 'header-settings',
			'priority'    => 1,
		));
	/******************************************/
    /**********	OUR TEAM SECTION **************/
	/******************************************/
	if ( class_exists( 'WP_Customize_Panel' ) ):

		$wp_customize->add_panel( 'panel_ourteam', array(
			'priority' => 8,
			'capability' => 'edit_theme_options',
			'title' => __( 'Our team section', 'orbitr' )
		));

		$wp_customize->add_section( 'orbitr_ourteam_section' , array(
			'title'       => __( 'Content', 'orbitr' ),
			'priority'    => 1,
			'panel'       => 'panel_ourteam'
		));



		/* our team title */
		$wp_customize->add_setting( 'orbitr_ourteam_title', array(
			'sanitize_callback' => 'orbitr_sanitize_input',
			'default' => __('YOUR TEAM','orbitr'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( 'orbitr_ourteam_title', array(
			'label'    => __( 'Title', 'orbitr' ),
			'section'  => 'orbitr_ourteam_section',
			'priority'    => 2,
		));

		/* our team subtitle */
		$wp_customize->add_setting( 'orbitr_ourteam_subtitle', array(
			'sanitize_callback' => 'orbitr_sanitize_input',
			'default' => __('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.','orbitr'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( 'orbitr_ourteam_subtitle', array(
			'label'    => __( 'Our team subtitle', 'orbitr' ),
			'section'  => 'orbitr_ourteam_section',
			'priority'    => 3,
		));

	else:

		$wp_customize->add_section( 'orbitr_ourteam_section' , array(
			'title'       => __( 'Our team section', 'orbitr' ),
			'priority'    => 35,
			'description' => __( 'The main content of this section is customizable in: Dashboard -> Appearance -> Widgets -> Our team section. There you must add the "Orbitr - Team member widget"', 'orbitr' )
		));



		/* our team title */
		$wp_customize->add_setting( 'orbitr_ourteam_title', array(
			'sanitize_callback' => 'orbitr_sanitize_input',
			'default' => __('YOUR TEAM','orbitr'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( 'orbitr_ourteam_title', array(
			'label'    => __( 'Title', 'orbitr' ),
			'section'  => 'orbitr_ourteam_section',
			'priority'    => 2,
		));

		/* our team subtitle */
		$wp_customize->add_setting( 'orbitr_ourteam_subtitle', array(
			'sanitize_callback' => 'orbitr_sanitize_input',
			'default' => __('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.','orbitr'),
			'transport' => 'postMessage'
		));

		$wp_customize->add_control( 'orbitr_ourteam_subtitle', array(
			'label'    => __( 'Our team subtitle', 'orbitr' ),
			'section'  => 'orbitr_ourteam_section',
			'priority'    => 3,
		));

	endif;
    //  =============================
    //  ==== Slider Image Option ====
    //  =============================
    $wp_customize->add_panel( 'slider_panel', array(
        'priority'       => 4,
        'capability'     => 'edit_theme_options',
        'title'          => __('Slider Options', 'orbitr'),
    ) );

    /* First Slider Settings */
    $wp_customize->add_section('first_slider_section', array(
        'title'    => __('First Slider', 'orbitr'),
        'priority' => 12,
        'panel'  => 'slider_panel',
    ));

    $wp_customize->add_setting('first_slider_image', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_slider_image', array(
        'label'    => __('Slider Image', 'orbitr'),
        'section'  => 'first_slider_section',
        'settings' => 'first_slider_image',
    )));

    $wp_customize->add_setting('first_slider_title', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('first_slider_title', array(
        'label'    => __('Slider Title', 'orbitr'),
        'settings' => 'first_slider_title',
        'section'  => 'first_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_slider_des', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('first_slider_des', array(
        'label'    => __('Slider Description', 'orbitr'),
        'settings' => 'first_slider_des',
        'section'  => 'first_slider_section',
        'type'     => 'textarea',
    ));
    $wp_customize->add_setting('first_slider_first_button_text', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('first_slider_first_button_text', array(
        'label'    => __('First Button Text', 'orbitr'),
        'settings' => 'first_slider_first_button_text',
        'section'  => 'first_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_slider_first_button_link', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('first_slider_first_button_link', array(
        'label'    => __('First Button Link URL', 'orbitr'),
        'settings' => 'first_slider_first_button_link',
        'section'  => 'first_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_slider_second_button_text', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('first_slider_second_button_text', array(
        'label'    => __('Second Button Text', 'orbitr'),
        'settings' => 'first_slider_second_button_text',
        'section'  => 'first_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_slider_second_button_link', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('first_slider_second_button_link', array(
        'label'    => __('Second Button Link URL', 'orbitr'),
        'settings' => 'first_slider_second_button_link',
        'section'  => 'first_slider_section',
        'type'     => 'text',
    ));


    /* Second Slider Settings */
    $wp_customize->add_section('second_slider_section', array(
        'title'    => __('Second Slider', 'orbitr'),
        'priority' => 12,
        'panel'  => 'slider_panel',
    ));

    $wp_customize->add_setting('second_slider_image', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'second_slider_image', array(
        'label'    => __('Slider Image', 'orbitr'),
        'section'  => 'second_slider_section',
        'settings' => 'second_slider_image',
    )));

    $wp_customize->add_setting('second_slider_title', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('second_slider_title', array(
        'label'    => __('Slider Title', 'orbitr'),
        'settings' => 'second_slider_title',
        'section'  => 'second_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_slider_des', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('second_slider_des', array(
        'label'    => __('Slider Description', 'orbitr'),
        'settings' => 'second_slider_des',
        'section'  => 'second_slider_section',
        'type'     => 'textarea',
    ));
    $wp_customize->add_setting('second_slider_first_button_text', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('second_slider_first_button_text', array(
        'label'    => __('First Button Text', 'orbitr'),
        'settings' => 'second_slider_first_button_text',
        'section'  => 'second_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_slider_first_button_link', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('second_slider_first_button_link', array(
        'label'    => __('First Button Link URL', 'orbitr'),
        'settings' => 'second_slider_first_button_link',
        'section'  => 'second_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_slider_second_button_text', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('second_slider_second_button_text', array(
        'label'    => __('Second Button Text', 'orbitr'),
        'settings' => 'second_slider_second_button_text',
        'section'  => 'second_slider_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_slider_second_button_link', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('second_slider_second_button_link', array(
        'label'    => __('Second Button Link URL', 'orbitr'),
        'settings' => 'second_slider_second_button_link',
        'section'  => 'second_slider_section',
        'type'     => 'text',
    ));
    //  ===================================
    //  ==== Counter Section Settings ====
    //  ===================================
$wp_customize->add_section( 'orbitr_counter_general' ,
    array(
        'priority'      => 107,
        'title'         => __( 'Counter Section', 'orbitr' ),
        'description'   => __( '*In order to get this section to show up on the front-page, make sure you have: 1) enabled static front-page & 2) have a widget placed in this sidebar. More specifically go to Widgets -> Front page - counter sidebar & place the Orbitr - Counter widget in here.', 'orbitr' ),
    )
);

// Type of Background
$wp_customize->add_setting( 'orbitr_counter_background_type', array(
    'default'           => 'image',
    'sanitize_callback' => 'orbitr_sanitize_radio_buttons'
) );
$wp_customize->add_control( 'orbitr_counter_background_type', array(
    'label'     => __( 'Type of Background', 'orbitr' ),
    'section'   => 'orbitr_counter_general',
    'settings'  => 'orbitr_counter_background_type',
    'type'      => 'radio',
    'choices'   => array(
        'image'     => __( 'Image', 'orbitr' ),
        'color'     => __( 'Color', 'orbitr' )
    ),
    'priority'  => 1
) );

// Image
$wp_customize->add_setting('orbitr_counter_background_image', array(
        'sanitize_callback' => 'esc_url_raw',
        'default'           => esc_url( get_template_directory_uri() . '/images/front-page-counter.jpg' )
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'orbitr_counter_background_image',
        array(
            'label'     => __( 'Image', 'orbitr' ),
            'section'   => 'orbitr_counter_general',
            'settings'  => 'orbitr_counter_background_image',
            'priority'  => 2
        )
    )
);

// Color
$wp_customize->add_setting( 'orbitr_counter_background_color',array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default'           => '#000000'
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'orbitr_counter_background_color',
    array(
        'label'     => __( 'Color', 'orbitr' ),
        'section'   => 'orbitr_counter_general',
        'settings'  => 'orbitr_counter_background_color',
        'priority'  => 3
    ) ) 
);

    //  ===================================
    //  ==== Pricing Section Settings ====
    //  ===================================

        $wp_customize->add_panel('pricing_setting_panel', array(
            'title' => __('Pricing Section', 'orbitr'),
            'description' => __('Allows you to set up pricing section for Orbitr Theme.', 'orbitr'), //Descriptive tooltip
           'priority' => '6',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Pricing color section
         */
        $wp_customize->add_section('pricing_section_color_setting', array(
            'title' => __('Color Settings', 'orbitr'),
            'description' => __('Allows you to set up pricing section color for Orbitr Theme.', 'orbitr'), //Descriptive tooltip
            'panel' => 'pricing_setting_panel',
            'priority' => '1',
            'capability' => 'edit_theme_options'
                )
        );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_bg_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#f8a841'
		));

		    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_bg_color', array(
			'label'    => __( 'Set background color for the section', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );
		/* Main Heading Color */
		$wp_customize->add_setting( 'orbitr_pricing_section_heading_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#ffffff'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_section_heading_color', array(
			'label'    => __( 'Main Heading Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_section_sub_heading_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#ffffff'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_section_sub_heading_color', array(
			'label'    => __( 'Sub-heading color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box1_bg_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#1bbc9b'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box1_bg_color', array(
			'label'    => __( 'Pricing box #1 Background Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box1_icon_border_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#3BD9BC'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box1_icon_border_color', array(
			'label'    => __( 'Pricing Box #1 Icon Border Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_bg_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#f47264'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box2_bg_color', array(
			'label'    => __( 'Pricing Box #2 Background Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_icon_border_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#fc9387'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box2_icon_border_color', array(
			'label'    => __( 'Pricing box #2 Icon Border Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_bg_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#1bbc9b'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box3_bg_color', array(
			'label'    => __( 'Pricing box #2 Icon Border Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_icon_border_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#3BD9BC'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box3_icon_border_color', array(
			'label'    => __( 'Pricing Box #3 Icon Border Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box_icon_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#272727'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box_icon_color', array(
			'label'    => __( 'Pricing Box #3 Icon Border Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box_heading_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#fff'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box_heading_color', array(
			'label'    => __( 'Pricing Box Heading Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box_pricing_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#fff'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box_pricing_color', array(
			'label'    => __( 'Pricing Box Price Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            
            )
        )
    );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box_pricing_bottom_border_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#F8C841'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box_pricing_bottom_border_color', array(
			'label'    => __( 'Pricing Box Bottom Border Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    ); 
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box_list_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#fff'
	            
		));


		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box_list_color', array(
			'label'    => __( 'Pricing Box Feature Text Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box_button_color', array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#dfae45'
		));

		$wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,'orbitr_pricing_box_button_color', array(
			'label'    => __( 'Pricing Box Buttons Color', 'orbitr' ),
			'section'  => 'pricing_section_color_setting',
			'priority' => 4,
            )
        )
    );


        /**
         * Pricing heading section
         */
        $wp_customize->add_section('pricing_heading_setting_section', array(
            'title' => __('Heading Settings', 'orbitr'),
            'description' => __('Allows you to set up pricing headings for Orbitr Theme.', 'orbitr'), //Descriptive tooltip
            'panel' => 'pricing_setting_panel',
            'priority' => '10',
            'capability' => 'edit_theme_options'
                )
        );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_main_heading', array(
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control( 'orbitr_pricing_main_heading', array(
			'label'    => __( 'Write main heading for the pricing section', 'orbitr' ),
			'section'  => 'pricing_heading_setting_section',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_sub_heading', array(
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control( 'orbitr_pricing_sub_heading', array(
			'label'    => __( 'Write sub-heading for the pricing section', 'orbitr' ),
			'section'  => 'pricing_heading_setting_section',
			'priority' => 4,
            
		));

        /**
         * Pricing Box#1
         */
        $wp_customize->add_section('pricing_box1', array(
            'title' => __('Pricing Box #1', 'orbitr'),
            'description' => __('Allows you to set up pricing box #1.', 'orbitr'), //Descriptive tooltip
            'panel' => 'pricing_setting_panel',
            'priority' => '11',
            'capability' => 'edit_theme_options'
                )
        );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box1_icon', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'fa-camera-retro'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_icon', array(
			'label'    => __( 'Pricing Box #1 Icon Code', 'orbitr' ),
			'section'  => 'pricing_box1',
			'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'orbitr') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box1_heading', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Single Plan'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_heading', array(
			'label'    => __( 'Pricing Box #1 Heading', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_price', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '$59'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_price', array(
			'label'    => __( 'Pricing Box #1 Price', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_feature1', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Unlimited Access'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_feature1', array(
			'label'    => __( 'Pricing Box #1 Feature1', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_feature2', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '20 GB Storage'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_feature2', array(
			'label'    => __( 'Pricing Box #1 Feature2', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_feature3', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '200 Cups of Coffee Free'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_feature3', array(
			'label'    => __( 'Pricing Box #1 Feature3', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_feature4', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '6 Months Support'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_feature4', array(
			'label'    => __( 'Pricing Box #1 Feature4', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_feature5', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Full Theme Access'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_feature5', array(
			'label'    => __( 'Pricing Box #1 Feature5', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_button_text', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => __('View Theme', 'orbitr')
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_button_text', array(
			'label'    => __( 'Pricing Box #1 Button Text', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box1_button_link', array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		));

		$wp_customize->add_control( 'orbitr_pricing_box1_button_link', array(
			'label'    => __( 'Pricing Box #1 Button Link', 'orbitr' ),
			'section'  => 'pricing_box1',
			'priority' => 4,
            
		));



        /**
         * Pricing Box#2
         */
        $wp_customize->add_section('pricing_box2', array(
            'title' => __('Pricing Box #2', 'orbitr'),
            'description' => __('Allows you to set up pricing box #2.', 'orbitr'), //Descriptive tooltip
            'panel' => 'pricing_setting_panel',
            'priority' => '12',
            'capability' => 'edit_theme_options'
                )
        );

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_icon', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'fa-coffee'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_icon', array(
			'label'    => __( 'Pricing Box #2 Icon Code', 'orbitr' ),
			'section'  => 'pricing_box2',
			'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'orbitr') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_heading', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Multiple Plan'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_heading', array(
			'label'    => __( 'Pricing Box #2 Heading', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_price', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '$99'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_price', array(
			'label'    => __( 'Pricing Box #2 Price', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_feature1', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Unlimited Access'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_feature1', array(
			'label'    => __( 'Pricing Box #2 Feature1', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_feature2', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '20 GB Storage'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_feature2', array(
			'label'    => __( 'Pricing Box #2 Feature2', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_feature3', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '200 Cups of Coffee Free'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_feature3', array(
			'label'    => __( 'Pricing Box #2 Feature3', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_feature4', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '6 Months Support'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_feature4', array(
			'label'    => __( 'Pricing Box #2 Feature4', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_feature5', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Full Theme Access'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_feature5', array(
			'label'    => __( 'Pricing Box #2 Feature5', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box2_button_text', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => __('View Theme', 'orbitr')
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_button_text', array(
			'label'    => __( 'Pricing Box#2 Button Text', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box2_button_link', array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		));

		$wp_customize->add_control( 'orbitr_pricing_box2_button_link', array(
			'label'    => __( 'Pricing Box #2 Button Link', 'orbitr' ),
			'section'  => 'pricing_box2',
			'priority' => 4,
            
		));


        /**
         * Pricing Box#3
         */
        $wp_customize->add_section('pricing_box3', array(
            'title' => __('Pricing Box #3', 'orbitr'),
            'description' => __('Allows you to set up pricing box #3.', 'orbitr'), //Descriptive tooltip
            'panel' => 'pricing_setting_panel',
            'priority' => '13',
            'capability' => 'edit_theme_options'
                )
        );


		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_icon', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'fa-tachometer'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_icon', array(
			'label'    => __( 'Pricing Box #3 Icon Code', 'orbitr' ),
			'section'  => 'pricing_box3',
			'description' => sprintf(__('To display icons, Use bootstrap or font awesome icon code.
You can refer the codes from links below. %s', 'orbitr') . '<br>' . esc_attr('Write icon class only. e.g, for bootstrap glyphicon&nbsp;write&nbsp;"glyphicon-eye-open" & for font awesome&nbsp;write&nbsp;"fa fa-book"'), '<a href="https://fortawesome.github.io/Font-Awesome/icons/">https://fortawesome.github.io/Font-Awesome/icons/</a>,<br/><a href="http://getbootstrap.com/components/">http://getbootstrap.com/components/</a>'),
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_heading', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Full Member'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_heading', array(
			'label'    => __( 'Pricing Box #3 Heading', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_price', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '$250'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_price', array(
			'label'    => __( 'Pricing Box #3 Price', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_feature1', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Unlimited Access'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_feature1', array(
			'label'    => __( 'Pricing Box #3 Feature1', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_feature2', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '20 GB Storage'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_feature2', array(
			'label'    => __( 'Pricing Box #3 Feature2', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_feature3', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '200 Cups of Coffee Free'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_feature3', array(
			'label'    => __( 'Pricing Box #3 Feature3', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));

		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_feature4', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => '6 Months Support'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_feature4', array(
			'label'    => __( 'Pricing Box #3 Feature4', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_feature5', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Full Theme Access'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_feature5', array(
			'label'    => __( 'Pricing Box #3 Feature5', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));
		/* background color */
		$wp_customize->add_setting( 'orbitr_pricing_box3_button_text', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => __('View Theme', 'orbitr')
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_button_text', array(
			'label'    => __( 'Pricing Box#3 Button Text', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));
		/* Pricing Box #1 Price */
		$wp_customize->add_setting( 'orbitr_pricing_box3_button_link', array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#'
		));

		$wp_customize->add_control( 'orbitr_pricing_box3_button_link', array(
			'label'    => __( 'Pricing Box #3 Button Link', 'orbitr' ),
			'section'  => 'pricing_box3',
			'priority' => 4,
            
		));
	
    //  ===================================
    //  ==== About Us Section Settings ====
    //  ===================================
    $wp_customize->add_section('parallax_section', array(
        'title'    => __('Description Section', 'orbitr'),
        'priority' => 5,
    ));

    $wp_customize->add_setting('parallax_section_title', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('parallax_section_title', array(
        'label'    => __('About Us Title', 'orbitr'),
        'settings' => 'parallax_section_title',
        'section'  => 'parallax_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('parallax_section_desc', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('parallax_section_desc', array(
        'label'    => __('About Us Description', 'orbitr'),
        'settings' => 'parallax_section_desc',
        'section'  => 'parallax_section',
        'type'     => 'textarea',
    ));
	$wp_customize->add_setting('parallax_section_button_text', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('parallax_section_button_text', array(
        'label'    => __('Parallax Button Text', 'orbitr'),
        'settings' => 'parallax_section_button_text',
        'section'  => 'parallax_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('parallax_section_button_link', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('parallax_section_button_link', array(
        'label'    => __('Parallax Button Link URL', 'orbitr'),
        'settings' => 'parallax_section_button_link',
        'section'  => 'parallax_section',
        'type'     => 'text',
    ));
    //  =============================
    //  ====  Blogs On HomePage  ====
    //  =============================

    $wp_customize->add_section('blog_area', array(
        'title'    => __('Blog Area Options', 'orbitr'),
        'priority' => 7,
    ));

    $wp_customize->add_setting('blog_heading', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('blog_heading', array(
        'label'    => __('Heading For Blogs', 'orbitr'),
        'settings' => 'blog_heading',
        'section'  => 'blog_area',
        'type'     => 'text',
    ));


    //  =============================
    //  ==== Footer Text Setting ====
    //  =============================

    $wp_customize->add_section('footer_text', array(
        'title'    => __('Footer Text', 'orbitr'),
        'priority' => 45,
    ));
    $wp_customize->add_setting('footer_credits', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('footer_credits', array(
        'label'    => __('Footer Credit Text', 'orbitr'),
        'section'  => 'footer_text',
        'settings' => 'footer_credits',
        'type'     => 'textarea',
    ));

    //  =============================
    //  ==== Social Media URL's ====
    //  =============================
    $wp_customize->add_section('social_section', array(
        'title'    => __('Scoial Media Options', 'orbitr'),
        'priority' => 48,
    ));

    $wp_customize->add_setting('social_facebook', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Facebook url'
    ));
    $wp_customize->add_control('social_facebook', array(
        'label'    => __('Facebook Page URL', 'orbitr'),
        'section'  => 'social_section',
        'settings' => 'social_facebook',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_twitter', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Twitter url'
    ));
    $wp_customize->add_control('social_twitter', array(
        'label'    => __('Twitter Page URL', 'orbitr'),
        'section'  => 'social_section',
        'settings' => 'social_twitter',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_google_plus', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'G+ url'
    ));
    $wp_customize->add_control('social_google_plus', array(
        'label'    => __('Google Plus Page URL', 'orbitr'),
        'section'  => 'social_section',
        'settings' => 'social_google_plus',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_rss', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Rss url'
    ));
    $wp_customize->add_control('social_rss', array(
        'label'    => __('RSS Page URL', 'orbitr'),
        'section'  => 'social_section',
        'settings' => 'social_rss',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_pinterest', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Pinterest url'
    ));
    $wp_customize->add_control('social_pinterest', array(
        'label'    => __('Pinterest Page URL', 'orbitr'),
        'section'  => 'social_section',
        'settings' => 'social_pinterest',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_linkedin', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => 'Linkedin url'
    ));
    $wp_customize->add_control('social_linkedin', array(
        'label'    => __('Linkedin Page URL', 'orbitr'),
        'section'  => 'social_section',
        'settings' => 'social_linkedin',
        'type'     => 'text',
    ));

    /* Custom CSS options */
    $wp_customize->get_section('colors')->title = esc_html__('Custom Style', 'orbitr');
    $wp_customize->add_setting('custom_css', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'orbitr_sanitize_textarea'
    ));
    $wp_customize->add_control('custom_css', array(
        'label'    => __('Custom CSS', 'orbitr'),
        'section'  => 'colors',
        'settings' => 'custom_css',
        'type'     => 'textarea',
    ));
    //Menu bg
    $wp_customize->add_setting(
        'menu_bg_color',
        array(
            'default'           => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'menu_bg_color',
            array(
                'label' => __('Menu background', 'orbitr'),
                'section' => 'colors',
                'priority' => 12
            )
        )
    );  
}
add_action('customize_register','orbitr_customize_register');