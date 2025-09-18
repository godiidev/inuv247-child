<?php
defined('ABSPATH') || exit;

global $product;
$product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

if ($product_id) {
    $product = wc_get_product($product_id);

    if ($product) {
?>
        <div class="quick-view-product">
            <div class="product-images view__item large--one-half">
                <?php
                // Display main product image
                if (has_post_thumbnail($product_id)) {
                    echo '<div class="main-image">' . get_the_post_thumbnail($product_id, 'large') . '</div>';
                }

                // Display product thumbnails
                $attachment_ids = $product->get_gallery_image_ids();
                if ($attachment_ids) {
                    echo '<div class="product-thumbnails">';
                    $attachment_ids = array_slice($attachment_ids, 0, 4); // Giới hạn số lượng hình ảnh là 4
                    foreach ($attachment_ids as $attachment_id) {
                        echo '<div class="thumbnail">' . wp_get_attachment_image($attachment_id, 'thumbnail') . '</div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="product-summary view__item large--one-half pull-right">
                <h4><?php echo esc_html($product->get_name()); ?></h4>
                <div class="product-short-description">
                    <?php echo apply_filters('woocommerce_short_description', $product->get_short_description()); ?>
                </div>
                <p><strong><?php _e('Mã SKU:', 'woocommerce'); ?></strong> <?php echo esc_html($product->get_sku()); ?></p>
                <div class="product-meta">
                    <?php
                    // Display product meta
                    echo wc_get_product_category_list($product_id, ', ', '<span class="posted_in">' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'woocommerce') . ' ', '</span>');
                    ?>
                </div>
                <a href="<?php echo get_permalink($product_id); ?>" class="button">Xem chi tiết</a>
            </div>
        </div>
<?php

        // Reset post data
        wp_reset_postdata();
    }
}
?>