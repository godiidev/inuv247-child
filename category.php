<?php
get_header();

$term_id = get_queried_object_id(); // Lấy ID của term hiện tại
$image_cat_default = get_stylesheet_directory_uri(  ) . '/assets/images/category_header_default.webp';
$image_id = get_term_meta($term_id, 'category-image-id', true);
$image_url = wp_get_attachment_url($image_id);
?>

<div id="primary-page-center" class="content-area">
    <main id="main" class="site-main">
        <div id="category_banner_wrap">
            <?php
            $shortcode = get_term_meta($term_id, 'category_shortcode', true);

            if (!empty($shortcode)) {
                echo do_shortcode($shortcode);
                } else {
                    if(empty($image_id)){
                    ?>
                        <div class="category_banner_wrap" style="background-image:url('<?php echo $image_cat_default; ?>')">
                    </div>
                <?php
                    } else { ?>
                        <div class="category_banner_wrap" style="background-image:url('<?php echo $image_url; ?>')">
                        </div>
                    <?php
                    }
            }
            ?>
        </div>
        <div class="container">
            <?php custom_breadcrumbs(); ?>
            <div class="cat_section" id="cat_description">
                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="coblog-page-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </header><!-- .page-header -->
            </div>
            <!-- Show list category -->
            <div id="cat_topics"></div>

            <?php
            // Get post feature
            $featured_posts = new WP_Query(array(
                'post_type' => 'post',
                'cat' => $term_id,
                'orderby' => 'DESC',
                'posts_per_page' => 12,
                'meta_key' => '_is_featured',
                'meta_value' => 1,
            ));
            if ($featured_posts->have_posts()) : ?>
                <div class="cat_section" id="cat_feature">
                    <h2>Bài viết nổi bật</h2>
                    <div class="cat_grid cat_grid_featured" data-key="">
                        <?php
                        while ($featured_posts->have_posts()) :
                            $featured_posts->the_post();
                            get_template_part('template-parts/content/content', 'feature');
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div><!-- .cat_grid_featured -->
                </div><!-- .cat_section -->
            <?php endif; ?>
            <!-- Truy vấn cho các bài viết không nổi bật -->
            <?php
            $cat_posts = new WP_Query(array(
                'post_type' => 'post',
                'cat' => $term_id,
                'orderby' => 'DESC',
                'posts_per_page' => 97,
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key' => '_is_featured',
                        'compare' => 'NOT EXISTS',
                    ),
                    array(
                        'key' => '_is_featured',
                        'value' => '1',
                        'compare' => '!=',
                        'type' => 'NUMERIC',
                    ),
                )
            ));
            if ($cat_posts->have_posts()) :
            ?>
                <div class="cat_section" id="cat_all">
                    <h2>Các bài viết khác:</h2>
                    <div class="cat_grid" data-key="">
                        <?php
                        while ($cat_posts->have_posts()) : $cat_posts->the_post();
                            get_template_part('template-parts/content/content', 'all-category');
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div><!-- .cat_grid -->
                </div><!-- .cat_section -->
                <?php
                the_posts_pagination(array(
                    'next_text' => '<span>' . esc_html__('Next', 'coblog') . '</span>',
                    'prev_text' => '<span>' . esc_html__('Previous', 'coblog') . '</span>',
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'coblog') . ' </span>',
                )); ?>
            <?php else :
                get_template_part('template-parts/content/content', 'none');
            endif;
            ?>
        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>