<?php
/**
 * STLPAK Child Theme functions and definitions
 * Optimized CSS loading - Final version
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package STLPAK Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_STLPAK_VERSION', '1.0.5' );

/**
 * Enqueue styles - Smart CSS Loading
 */
function stlpak_enqueue_styles() {
    $theme_dir = get_stylesheet_directory_uri();

    // Always load base styles
    wp_enqueue_style( 'stlpak-base-css', $theme_dir . '/css/base.css', array('astra-theme-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    wp_enqueue_style( 'stlpak-components-css', $theme_dir . '/css/components.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    wp_enqueue_style( 'stlpak-header-css', $theme_dir . '/css/header.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    wp_enqueue_style( 'stlpak-footer-css', $theme_dir . '/css/footer.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );

    // Scroll to Top Button styling - 符合首页设计风格
    wp_enqueue_style( 'stlpak-scroll-top-css', $theme_dir . '/css/scroll-top.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );

    // Smart Home CSS loading - only load what's needed
    if (is_page_template('template-home.php') || is_page_template('template-home2.php') ||
        is_page_template('template-home3.php') || is_front_page()) {
        // Basic home layouts
        wp_enqueue_style( 'stlpak-home-base-css', $theme_dir . '/css/home-base.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-home4.php') || is_page_template('template-home7.php') ||
        is_page_template('template-home8.php')) {
        // Medium complexity layouts
        wp_enqueue_style( 'stlpak-home-medium-css', $theme_dir . '/css/home-medium.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-home9.php') || is_page_template('template-home10.php') ||
        is_page_template('template-home11.php') || is_page_template('template-home12.php')) {
        // Complex layouts
        wp_enqueue_style( 'stlpak-home-complex-css', $theme_dir . '/css/home-complex.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
        wp_enqueue_style( 'stlpak-customer-stories-css', $theme_dir . '/css/customer-stories.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-home13.php') || is_page_template('template-home14.php') ||
        is_page_template('template-home6.php')) {
        // Landing page style homes
        wp_enqueue_style( 'stlpak-home-landing-css', $theme_dir . '/css/home-landing.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-home15.php') || is_page_template('template-home16.php')) {
        // Special designs
        wp_enqueue_style( 'stlpak-home-special-css', $theme_dir . '/css/home-special.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-home5.php')) {
        // Fallback for any other home template
        wp_enqueue_style( 'stlpak-home-base-css', $theme_dir . '/css/home-base.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    // Load page-specific CSS based on page template or page type
    if (is_page_template('template-about.php') || is_page('about') || is_page('about-us') ||
        is_page('about-stlpak') || is_page_template('template-about2.php') ||
        is_page_template('template-about3.php')) {
        wp_enqueue_style( 'stlpak-about-css', $theme_dir . '/css/about.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-category.php') || is_tax('product-category') ||
        is_post_type_archive('product') || is_page_template('template-simple-product-category.php') ||
        is_page_template('template-product-category2.php') || is_page_template('template-product-category3.php') ||
        is_page_template('template-product-category5.php') || is_page_template('template-product-category6.php') ||
        is_page_template('template-product-category7.php')) {
        wp_enqueue_style( 'stlpak-category-css', $theme_dir . '/css/category.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_singular('product') || is_page_template('template-detail.php') ||
        is_page_template('template-product-detail2.php') || is_page_template('template-product-details6.php') ||
        is_page_template('template-product-details7.php')) {
        wp_enqueue_style( 'stlpak-detail-css', $theme_dir . '/css/detail.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    if (is_page_template('template-contact.php') || is_page('contact') ||
        is_page('contact-us') || is_page_template('template-contact2.php')) {
        wp_enqueue_style( 'stlpak-contact-css', $theme_dir . '/css/contact.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    // Load landing page styles for various landing pages
    if (is_page_template('template-landing-page2.php') || is_page_template('template-landing-page4.php') ||
        is_page_template('template-landing-page5.php') || is_page_template('template-landing-page6.php') ||
        is_page_template('template-landing-page7.php') || is_page_template('template-blog.php') ||
        is_singular('post') || is_page_template('template-why-us.php') || is_page_template('template-video-page.php')) {
        wp_enqueue_style( 'stlpak-landing-css', $theme_dir . '/css/landing.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

  
    // Load Resource Center homepage styles
    if (is_page_template('template-home10.php') || is_front_page()) {
        wp_enqueue_style( 'stlpak-resource-home-css', $theme_dir . '/css/resource-home.css', array('stlpak-base-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    // Slick slider CSS (if exists)
    if (file_exists(get_stylesheet_directory() . '/css/slick.css')) {
        wp_enqueue_style( 'stlpak-slick-css', $theme_dir . '/css/slick.css', array(), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    // Slick slider supplemental CSS
    if (file_exists(get_stylesheet_directory() . '/css/slick-supplement.css')) {
        wp_enqueue_style( 'stlpak-slick-supplement-css', $theme_dir . '/css/slick-supplement.css', array('stlpak-slick-css'), CHILD_THEME_STLPAK_VERSION, 'all' );
    }

    // Navigation JS
    wp_enqueue_script( 'stlpak-navigation-js', $theme_dir . '/js/navigation.js', array(), CHILD_THEME_STLPAK_VERSION, true );

    }
add_action( 'wp_enqueue_scripts', 'stlpak_enqueue_styles', 15 );

// Disable comments
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' || $post->post_type == 'post') {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

// Limit Text
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}