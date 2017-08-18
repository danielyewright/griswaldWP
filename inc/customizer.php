<?php
/**
 * griswald Theme Customizer
 *
 * @package griswald
 */

/**
 * Add custom settings/controls to Customizer for the footer icons
 */
function griswald_customizer_footer_settings( $wp_customize ) {
    // Add Social Section
    $wp_customize->add_section( 'griswald_footer_options', array(
        'title' => __( 'Footer Options', 'griswald' ),
        'description' => __( 'Customize footer options and links to social profiles', 'griswald' ),
        'priority' => 120
    ) );

    $wp_customize->add_setting( 'footer_options_twitter', array(
        'default' => _e( '', 'griswald' ),
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'footer_options_twitter', array(
        'label'    => __( 'Twitter', 'griswald' ),
        'section'  => 'griswald_footer_options',
        'settings' => 'footer_options_twitter',
        'priority' => 1,
    ) );

    $wp_customize->add_setting( 'footer_options_facebook', array(
        'default' => _e( '', 'griswald' ),
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'footer_options_facebook', array(
        'label'    => __( 'Facebook', 'griswald' ),
        'section'  => 'griswald_footer_options',
        'settings' => 'footer_options_facebook',
        'priority' => 2,
    ) );

    $wp_customize->add_setting( 'footer_options_linkedin', array(
        'default' => _e( '', 'griswald' ),
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'footer_options_linkedin', array(
        'label'    => __( 'LinkedIn', 'griswald' ),
        'section'  => 'griswald_footer_options',
        'settings' => 'footer_options_linkedin',
        'priority' => 3,
    ) );

    $wp_customize->add_setting( 'footer_options_dribbble', array(
        'default' => _e( '', 'griswald' ),
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'footer_options_dribbble', array(
        'label'    => __( 'Dribbble', 'griswald' ),
        'section'  => 'griswald_footer_options',
        'settings' => 'footer_options_dribbble',
        'priority' => 4,
    ) );

    $wp_customize->add_setting( 'footer_options_instagram', array(
        'default' => _e( '', 'griswald' ),
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'footer_options_instagram', array(
        'label'    => __( 'Instagram', 'griswald' ),
        'section'  => 'griswald_footer_options',
        'settings' => 'footer_options_instagram',
        'priority' => 5,
    ) );

    $wp_customize->add_setting( 'footer_options_contact_email', array(
        'default' => _e( '', 'griswald' ),
        'type' => 'theme_mod'
    ) );

    $wp_customize->add_control( 'footer_options_contact_email', array(
        'label'    => __( 'Contact Email', 'griswald' ),
        'section'  => 'griswald_footer_options',
        'settings' => 'footer_options_contact_email',
        'priority' => 6,
    ) );
}
add_action( 'customize_register', 'griswald_customizer_footer_settings' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function griswald_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'griswald_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'griswald_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'griswald_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function griswald_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function griswald_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function griswald_customize_preview_js() {
	wp_enqueue_script( 'griswald-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'griswald_customize_preview_js' );
