<?php
/**
 * Category layout with full width.
 *
 * @package          WooCommerce/Templates
 * @version          8.8.0
 */

$category = get_queried_object();
?>
<div class="category-page-row full-width">
    <div class="main-content full-width">
        <?php
        /**
         * Hook: woocommerce_before_main_content.
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20 (FL removed)
         * @hooked WC_Structured_Data::generate_website_data() - 30
         */
        do_action('woocommerce_before_main_content');

        if (function_exists('woocommerce_shop_loop_header')) {
            /**
             * Hook: woocommerce_shop_loop_header.
             *
             * @since 8.8.0
             *
             * @hooked woocommerce_product_taxonomy_archive_header - 10
             */
            do_action('woocommerce_shop_loop_header');
        } else {
            do_action('woocommerce_archive_description');
        }

        // Hiển thị subcategories tùy biến riêng
        display_subcategories($category);

        // Bỏ qua hiển thị danh mục con mặc định và chỉ hiển thị sản phẩm
        if (woocommerce_product_loop()) {
            /**
             * Hook: woocommerce_before_shop_loop.
             *
             * @hooked wc_print_notices - 10
             * @hooked woocommerce_result_count - 20
             * @hooked woocommerce_catalog_ordering - 30
             */
            do_action('woocommerce_before_shop_loop');

            woocommerce_product_loop_start();

            if (wc_get_loop_prop('total')) {
                while (have_posts()) {
                    the_post();

                    /**
                     * Hook: woocommerce_shop_loop.
                     *
                     * @hooked WC_Structured_Data::generate_product_data() - 10
                     */
                    do_action('woocommerce_shop_loop');

                    wc_get_template_part('content', 'product');
                }
            }

            woocommerce_product_loop_end();

            /**
             * Hook: woocommerce_after_shop_loop.
             *
             * @hooked woocommerce_pagination - 10
             */
            do_action('woocommerce_after_shop_loop');
        } else {
            /**
             * Hook: woocommerce_no_products_found.
             *
             * @hooked wc_no_products_found - 10
             */
            do_action('woocommerce_no_products_found');
        }
        ?>

        <?php
        /**
         * Hook: woocommerce_after_main_content.
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action('woocommerce_after_main_content');
        ?>
    </div>
</div>
