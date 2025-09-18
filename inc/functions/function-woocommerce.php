<?php
// Add theme support for WooCommerce
function godii_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'godii_add_woocommerce_support' );

// Add theme support for product gallery features
function godii_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'godii_setup' );

/**
 * @snippet       Also Search by SKU @ Shop
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 7
 * @community     https://businessbloomer.com/club/
 */

add_filter( 'posts_search', 'bbloomer_product_search_by_sku', 9999, 2 );

function bbloomer_product_search_by_sku( $search, $wp_query ) {
    global $wpdb;
    if ( is_admin() || ! is_search() || ! isset( $wp_query->query_vars['s'] ) || ( ! is_array( $wp_query->query_vars['post_type'] ) && $wp_query->query_vars['post_type'] !== "product" ) || ( is_array( $wp_query->query_vars['post_type'] ) && ! in_array( "product", $wp_query->query_vars['post_type'] ) ) ) return $search; 
    $product_id = wc_get_product_id_by_sku( $wp_query->query_vars['s'] );
    if ( ! $product_id ) return $search;
    $product = wc_get_product( $product_id );
    if ( $product->is_type( 'variation' ) ) {
       $product_id = $product->get_parent_id();
    }
    $search = str_replace( 'AND (((', "AND (({$wpdb->posts}.ID IN (" . $product_id . ")) OR ((", $search );  
    return $search;   
}

/**
 * @snippet       Remove Sorting Dropdown @ WooCommerce Shop & Archives
 */

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
/**
 * @snippet       Remove Add to cart @ WooCommerce Shop & Archives
 */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
/**
 * @snippet       Remove Category @ WooCommerce single product
 */
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

function load_quick_view() {
    check_ajax_referer('quick-view-nonce', 'security');
    
    ob_start();
    $product_id = intval($_POST['product_id']);
    wc_get_template('quick-view.php', array('product_id' => $product_id));
    $output = ob_get_clean();
    echo $output;
    wp_die();
}
add_action('wp_ajax_load_quick_view', 'load_quick_view');
add_action('wp_ajax_nopriv_load_quick_view', 'load_quick_view');

// Display category
function display_shop_categories() {
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'menu_order',
        'show_count' => false,
        'pad_counts' => false,
        'hierarchical' => true,
        'title_li' => '',
        'hide_empty' => false,
        'parent' => 0 // Chỉ lấy các category cha cấp 1
    );

    $parent_categories = get_terms($args);
    if ($parent_categories) {
        echo '<div class="shop-category-list">';
        foreach ($parent_categories as $category) {
            echo '<div class="shop-category-item">';
            echo '<a href="' . get_term_link($category) . '" class="shop-category-link">' . esc_html($category->name) . '</a>';
            echo '</div>';
        }
        echo '</div>';
    }
}

// Display subcategory
function display_subcategories($category) {
    if ($category && is_tax('product_cat')) {
        $subcategories = get_terms(array(
            'taxonomy' => 'product_cat',
            'child_of' => $category->term_id,
            'hide_empty' => false,
        ));
        if ($subcategories) {
            echo '<div class="subcategory-list">';
            foreach ($subcategories as $subcategory) {
                echo '<div class="subcategory-item">';
                echo '<a href="' . get_term_link($subcategory) . '" class="subcategory-link">' . esc_html($subcategory->name) . '</a>';
                echo '</div>';
            }
            echo '</div>';
        }
    }
}
/**
 * Thay đổi vị trí tab product
 */
add_filter( 'woocommerce_product_tabs', 'wcpm_reorder_product_tabs', 98 );
function wcpm_reorder_product_tabs( $tabs ) {
 
	$tabs['additional_information']['priority'] = 5;			// Additional information first
	$tabs['description']['priority'] = 10;			// Description second
 
	return $tabs;
}

function bbloomer_rename_description_product_tab_label() {
    return 'Chi tiết';
}
// Thay đổi tên tabs additional product
add_filter( 'woocommerce_product_additional_information_tab_title', 'bbloomer_rename_additional_product_tab_label' );
function bbloomer_rename_additional_product_tab_label() {
    return 'Bảng tóm tắt';
}

//index sku for webmastertool
add_filter( 'relevanssi_content_to_index', 'rlv_index_variation_skus', 10, 2 );
function rlv_index_variation_skus( $content, $post ) {
	if ( 'product' === $post->post_type ) {
		$args       = array(
            'post_parent'    => $post->ID,
			'post_type'      => 'product_variation',
			'posts_per_page' => -1
        );
		$variations = get_posts( $args );
		if ( ! empty( $variations ) ) {
			foreach ( $variations as $variation ) {
				$sku      = get_post_meta( $variation->ID, '_sku', true );
				$content .= " $sku";
			}
		}
	}
	return $content;
}
/**
 * @snippet       Set WooCommerce Product GTIN
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 7
 */
 
add_filter( 'woocommerce_structured_data_product', 'bbloomer_set_gtin_from_sku', 9999, 2 );
 
function bbloomer_set_gtin_from_sku( $markup, $product ) {
   $markup['gtin8'] = str_replace( '-', '', $markup['sku'] );
   return $markup;
}

add_filter( 'woocommerce_product_description_heading', '__return_null' );
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

/**
 * @snippet       Filter by Featured @ WooCommerce Products Admin
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 8
 * @community     https://businessbloomer.com/club/
 */
 
 add_filter( 'woocommerce_products_admin_list_table_filters', 'godii_featured_filter' );
 
 function godii_featured_filter( $filters ) {
    $filters['featured_choice'] = 'godii_filter_by_featured';
    return $filters;
 }
  
 function godii_filter_by_featured() {
    $current_featured_choice = isset( $_REQUEST['featured_choice'] ) ? wc_clean( wp_unslash( $_REQUEST['featured_choice'] ) ) : false;
    $output = '<select name="featured_choice" id="dropdown_featured_choice"><option value="">Filter by featured status</option>';
    $output .= '<option value="onlyfeatured" ';
    $output .= selected( 'onlyfeatured', $current_featured_choice, false );
    $output .= '>Featured Only</option>';
    $output .= '<option value="notfeatured" ';
    $output .= selected( 'notfeatured', $current_featured_choice, false );
    $output .= '>Not Featured</option>';
    $output .= '</select>';
    echo $output;
 }
  
 add_filter( 'parse_query', 'godii_featured_products_query' );
  
 function godii_featured_products_query( $query ) {
     global $typenow;
     if ( $typenow == 'product' ) {
         if ( ! empty( $_GET['featured_choice'] ) ) {
             if ( $_GET['featured_choice'] == 'onlyfeatured' ) {
                 $query->query_vars['tax_query'][] = array(
                     'taxonomy' => 'product_visibility',
                     'field' => 'slug',
                     'terms' => 'featured',
                 );
             } elseif ( $_GET['featured_choice'] == 'notfeatured' ) {
                 $query->query_vars['tax_query'][] = array(
                     'taxonomy' => 'product_visibility',
                     'field' => 'slug',
                     'terms' => 'featured',
                     'operator' => 'NOT IN',
                 );
             }
         }
     }
     return $query;
 } 
 