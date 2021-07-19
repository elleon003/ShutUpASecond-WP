<?php
if ( ! function_exists( 'shutupasecond_setup' ) ) :

function shutupasecond_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'shutupasecond', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'shutupasecond' ),
        'social'  => __( 'Social Links Menu', 'shutupasecond' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // shutupasecond_setup

add_action( 'after_setup_theme', 'shutupasecond_setup' );


if ( ! function_exists( 'shutupasecond_init' ) ) :

function shutupasecond_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // shutupasecond_setup

add_action( 'init', 'shutupasecond_init' );


if ( ! function_exists( 'shutupasecond_custom_image_sizes_names' ) ) :

function shutupasecond_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'shutupasecond_custom_image_sizes_names' );
endif;// shutupasecond_custom_image_sizes_names



if ( ! function_exists( 'shutupasecond_widgets_init' ) ) :

function shutupasecond_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'shutupasecond_widgets_init' );
endif;// shutupasecond_widgets_init



if ( ! function_exists( 'shutupasecond_customize_register' ) ) :

function shutupasecond_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'home_content', array(
		'title' => __( 'Home Content', 'shutupasecond' )
	));

    $wp_customize->add_section( 'home_content', array(
		'title' => __( 'Home Content', 'shutupasecond' )
	));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'Home Image', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'Home Image', array(
		'label' => __( 'Home Image', 'shutupasecond' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'home_content'
	) ) );

    $wp_customize->add_setting( 'Intro', array(
		'type' => 'theme_mod',
		'default' => __( 'I tell other people&apos;s stories for a living. Here, I tell mine.', 'shutupasecond' ),
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'Intro', array(
		'label' => __( 'intro', 'shutupasecond' ),
		'type' => 'text',
		'section' => 'home_content'
	));

    $wp_customize->add_setting( 'Intro Paragraph', array(
		'type' => 'theme_mod',
		'default' => __( 'Stay a while, read a couple.', 'shutupasecond' ),
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'Intro Paragraph', array(
		'label' => __( 'Intro Paragraph', 'shutupasecond' ),
		'type' => 'text',
		'section' => 'home_content'
	));

    $wp_customize->add_setting( 'About Button Text', array(
		'type' => 'theme_mod',
		'default' => __( 'Who\'s this guy?', 'shutupasecond' ),
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'About Button Text', array(
		'label' => __( 'About  Button Text', 'shutupasecond' ),
		'type' => 'text',
		'section' => 'home_content'
	));

    $wp_customize->add_setting( 'About Link', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'About Link', array(
		'label' => __( 'about_link', 'shutupasecond' ),
		'type' => 'url',
		'section' => 'home_content'
	));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'shutupasecond_customize_register' );
endif;// shutupasecond_customize_register


if ( ! function_exists( 'shutupasecond_enqueue_scripts' ) ) :
    function shutupasecond_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '/* Pinegrow Interactions, do not remove */ (function(){try{if(!document.documentElement.hasAttribute(\'data-pg-ia-disabled\')) { window.pgia_small_mq=typeof pgia_small_mq==\'string\'?pgia_small_mq:\'(max-width:767px)\';window.pgia_large_mq=typeof pgia_large_mq==\'string\'?pgia_large_mq:\'(min-width:768px)\';var style = document.createElement(\'style\');var pgcss=\'html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}\';if(document.documentElement.hasAttribute(\'data-pg-id\') && document.documentElement.hasAttribute(\'data-pg-mobile\')) {pgia_small_mq=\'(min-width:0)\';pgia_large_mq=\'(min-width:99999px)\'} pgcss+=\'@media \' + pgia_small_mq + \'{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}\';pgcss+=\'@media \' + pgia_large_mq + \'{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}\';style.innerHTML=pgcss;document.querySelector(\'head\').appendChild(style);}}catch(e){console&&console.log(e);}})()');

    wp_deregister_script( 'shutupasecond-pgia' );
    wp_enqueue_script( 'shutupasecond-pgia', get_template_directory_uri() . '/pgia/lib/pgia.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'shutupasecond-tailwind' );
    wp_enqueue_style( 'shutupasecond-tailwind', get_template_directory_uri() . '/tailwind.css', false, null, 'all');

    wp_deregister_style( 'shutupasecond-style' );
    wp_enqueue_style( 'shutupasecond-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'shutupasecond_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>