<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://docs.woocommerce.com/document/template-structure/
 * @package          WooCommerce/Templates
 * @version          8.8.0
 */

defined( 'ABSPATH' ) || exit;

global $wp_query;

get_header( 'shop' );
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="coblog-page-layout-wrap <?php echo esc_attr(coblog_set_class()); ?>">
                <?php do_action('page_before_content'); ?>
                <div class="coblog-woocommerce-content">
                    <?php
                    if (is_shop()) {
                        // Shop Page
                        wc_get_template_part('layouts/shop', get_theme_mod('shop_layout', 'full-width'));
                    } elseif (is_product_category()) {
                        wc_get_template_part('layouts/category', get_theme_mod('shop_layout', 'full-width'));
                    } else {
                        // Gọi layout mặc định
                        wc_get_template_part('layouts/default', get_theme_mod('default_layout', 'right-sidebar'));
                    }
                    ?>
                </div>
                <?php do_action('page_after_content'); ?>
            </div>
        </div>
    </main>
</div>
<div id="quick-view-modal" class="modal-wrapper">
    <div class="quick-view-content" style="opacity: 1; transform: translateY(0px); margin-top: 100px;">
        <span class="close-quick-view">&times;</span>
        <div id="quick-view-details"></div>
    </div>
</div>

<?php
get_footer( 'shop' );
?>
