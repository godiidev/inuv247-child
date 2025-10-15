<?php

/**
 * Mantop Child Theme Functions
 * 
 * @package Mantop-Child
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/* include parent theme init file */
require get_stylesheet_directory() . '/inc/init.php';

/**
 * Initialize child theme
 */
function inuv_child_init()
{
    // Any initialization code goes here
    do_action('inuv_child_loaded');
}
add_action('init', 'inuv_child_init');

// Theme constants
define('INUV_CHILD_VERSION', '1.0.0');
define('INUV_CHILD_DIR', get_stylesheet_directory());
define('INUV_CHILD_URI', get_stylesheet_directory_uri());

/**
 * Enqueue parent and child theme styles
 */
function inuv_child_enqueue_styles()
{
    // Enqueue parent theme style
    wp_enqueue_style(
        'coblog-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue child theme style
    wp_enqueue_style(
        'inuv-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('coblog-style'),
        INUV_CHILD_VERSION
    );

    // Enqueue custom CSS files
    wp_enqueue_style(
        'inuv-custom-css',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array('inuv-child-style'),
        INUV_CHILD_VERSION
    );

    // Enqueue custom CSS files
    wp_enqueue_style(
        'inuv-page-css',
        get_stylesheet_directory_uri() . '/assets/css/page-template.css',
        array('inuv-child-style'),
        INUV_CHILD_VERSION
    );

    // Enqueue Font Awesome
    wp_enqueue_style(
        'inuv-awesome-css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
        array(),
        '6.7.2'
    );

    // WooCommerce styles
    if (class_exists('WooCommerce')) {
        wp_enqueue_style(
            'inuv-woocommerce-css',
            get_stylesheet_directory_uri() . '/assets/css/woocommerce.css',
            array('inuv-child-style'),
            INUV_CHILD_VERSION
        );
    }

    // Responsive styles
    wp_enqueue_style(
        'inuv-responsive-css',
        get_stylesheet_directory_uri() . '/assets/css/responsive.css',
        array('inuv-child-style'),
        INUV_CHILD_VERSION
    );
}
add_action('wp_enqueue_scripts', 'inuv_child_enqueue_styles');

/**
 * Add Google Fonts with preconnect for better performance
 */
function inuv_child_enqueue_google_fonts()
{
    // Preconnect to Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    // Enqueue Inter font
    wp_enqueue_style(
        'inuv-google-font-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );
}
add_action('wp_head', 'inuv_child_enqueue_google_fonts', 1);


/**
 * Enqueue child theme scripts
 */
function inuv_child_enqueue_scripts()
{
    // Main custom script
    wp_enqueue_script(
        'inuv-custom-js',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        INUV_CHILD_VERSION,
        true
    );

    // Main customizer controls script
    wp_enqueue_script(
        'inuv-customizer-controls-js',
        get_stylesheet_directory_uri() . '/assets/js/customizer-controls.js',
        array('jquery'),
        INUV_CHILD_VERSION,
        true
    );

    // Main view script
    wp_enqueue_script(
        'inuv-view-js',
        get_stylesheet_directory_uri() . '/assets/js/view.js',
        array('jquery'),
        INUV_CHILD_VERSION,
        true
    );
    // Main view script
    wp_enqueue_script(
        'inuv-video-modal-js',
        get_stylesheet_directory_uri() . '/assets/js/video-modal.js',
        array('jquery'),
        INUV_CHILD_VERSION,
        true
    );
    // Main AJAX object cho custom.js
    wp_localize_script('inuv-custom-js', 'inuv_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('inuv_nonce'),
    ));

    wp_localize_script('inuv-view-js', 'customViewAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'post_id' => get_the_ID(),
        'security' => wp_create_nonce('post-view-nonce')
    ));
    // WooCommerce scripts
    if (class_exists('WooCommerce')) {
        // Main WooCommerce script
        wp_enqueue_script(
            'inuv-woocommerce',
            get_stylesheet_directory_uri() . '/assets/js/woocommerce.js',
            array('jquery'),
            INUV_CHILD_VERSION,
            true
        );

        // Order management script (only on account pages)
        if (is_account_page()) {
            wp_enqueue_script(
                'inuv-order',
                get_stylesheet_directory_uri() . '/assets/js/order.js',
                array('jquery'),
                INUV_CHILD_VERSION,
                true
            );
            wp_localize_script('inuv-order', 'orderParams', array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'current_status' => isset($_GET['status']) ? sanitize_text_field($_GET['status']) : 'all',
                'nonces' => array(
                    'load_more_orders' => wp_create_nonce('load_more_orders_nonce'),
                    'update_order_status' => wp_create_nonce('update_order_status_nonce'),
                    'submit_product_review' => wp_create_nonce('submit_product_review_nonce'),
                    'rebuy_order' => wp_create_nonce('rebuy_order_nonce'),
                    'get_order_review' => wp_create_nonce('get_order_review_nonce'),
                ),
                'messages' => array(
                    'confirm_received' => __('Xác nhận đã nhận được hàng?', 'mantop-child'),
                    'loading' => __('Đang xử lý...', 'mantop-child'),
                    'error' => __('Có lỗi xảy ra. Vui lòng thử lại.', 'mantop-child'),
                    'success' => __('Thành công!', 'mantop-child'),
                ),
            ));
        }
    }

    // Enqueue jQuery UI CSS & JS
    wp_enqueue_style('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), null);
    wp_enqueue_script('jquery-ui-dialog');
}
add_action('wp_enqueue_scripts', 'inuv_child_enqueue_scripts', 20);
/**
 * Basic security headers
 */
function inuv_child_security_headers()
{
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'inuv_child_security_headers');

/**
 * Performance optimizations
 */
function inuv_child_remove_query_strings($src)
{
    // Keep version strings in development
    if (defined('WP_DEBUG') && WP_DEBUG) {
        return $src;
    }

    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'inuv_child_remove_query_strings');
add_filter('script_loader_src', 'inuv_child_remove_query_strings');

/**
 * Remove WordPress version from head
 */
function inuv_child_remove_wp_version()
{
    return '';
}
add_filter('the_generator', 'inuv_child_remove_wp_version');

/**
 * Flush rewrite rules once
 */
function inuv_child_flush_rewrite_rules()
{
    if (get_option('inuv_child_flush_rewrite_rules') !== 'yes') {
        flush_rewrite_rules();
        update_option('inuv_child_flush_rewrite_rules', 'yes');
    }
}
add_action('init', 'inuv_child_flush_rewrite_rules', 999);
