<?php
if (!function_exists('custom_breadcrumbs')) {
    function custom_breadcrumbs() {
        // Home page text
        $home_text = 'Home';

        // Define the separator
        $separator = ' &gt; '; // You can change this to your preferred separator

        // Start the breadcrumbs output
        $output = '<ul id="breadcrumb" class="breadcrumb">';

        // Add the Home link
        $output .= '<li><a href="' . home_url() . '" title="' . esc_attr(get_the_title(get_option('page_on_front'))) . '">' . $home_text . '</a></li>';

        if (is_category()) {
            // Only display the current category without parents
            $current_category = get_queried_object();
            $output .= '<li>' . $separator . '</li>';
            $output .= '<li>' . esc_html($current_category->name) . '</li>';
        } else if (is_single()) {
            // For single posts, get the first category and display it
            $terms = get_the_category();
            if ($terms) {
                $term = $terms[0]; // Use the first category if multiple exist
                $output .= '<li>' . $separator . '</li>';
                $output .= '<li><a href="' . get_category_link($term->term_id) . '">' . esc_html($term->name) . '</a></li>';
                // Add the current post title
                $output .= '<li>' . $separator . '</li>';
                $output .= '<li>' . get_the_title() . '</li>';
            }
        }
        // Handle other conditions (taxonomies, archives, pages) as needed...

        $output .= '</ul>';

        // Output the breadcrumbs
        echo $output;
    }
}


// Thêm trường tùy chỉnh vào danh mục
function godii_add_category_shortcode_field() {
    add_action('category_edit_form_fields', 'godii_category_shortcode_field');
    add_action('edited_category', 'godii_save_category_shortcode_field');
}

function godii_category_shortcode_field($term) {
    $shortcode = get_term_meta($term->term_id, 'category_shortcode', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="category_shortcode">Banner Shortcode</label></th>
        <td>
            <textarea name="category_shortcode" id="category_shortcode" rows="5" cols="40"><?php echo esc_textarea($shortcode); ?></textarea>
            <p class="description">Nhập đoạn shortcode cho banner đầu danh mục vào đây.</p>
        </td>
    </tr>
    <?php
}

function godii_save_category_shortcode_field($term_id) {
    if (isset($_POST['category_shortcode'])) {
        $shortcode = sanitize_text_field($_POST['category_shortcode']);
        update_term_meta($term_id, 'category_shortcode', $shortcode);
    }
}

godii_add_category_shortcode_field();

if (!function_exists('custom_post_thumbnail')) {
    function custom_post_thumbnail() {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) {
            ?>
            <div class="content-spacer">
                <?php the_post_thumbnail('coblog-1140-600', ['alt' => the_title_attribute(['echo' => false])]); ?>
            </div><!-- .post-thumbnail -->
            <?php
        } else {
            ?>
            <a href="<?php the_permalink(); ?>">
                <div class="content-spacer" style="padding-top: 70%;">
                    <?php the_post_thumbnail('coblog-1140-600 content-fill img-loading-alt', ['alt' => the_title_attribute(['echo' => false])]); ?>
                </div>
            </a>
            <?php
        }
    }
}

// Hàm thêm Meta Box
function add_featured_post_field()
{
    add_meta_box('featured_post', 'Bài viết nổi bật', 'featured_post_field', 'post', 'normal', 'high');
}

function featured_post_field($post)
{
    // Tạo nonce
    wp_nonce_field('save_featured_post_field', 'featured_post_nonce');

    $is_featured = get_post_meta($post->ID, '_is_featured', true);
    ?>
    <label for="featured_post">
        <input type="checkbox" name="_is_featured" id="_is_featured" value="1" <?php checked($is_featured, 1); ?>>
        Đánh dấu bài viết nổi bật
    </label>
<?php
}

function save_featured_post_field($post_id)
{
    // Kiểm tra nonce
    if (!isset($_POST['featured_post_nonce']) || !wp_verify_nonce($_POST['featured_post_nonce'], 'save_featured_post_field')) {
        return;
    }

    // Kiểm tra quyền của người dùng
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['_is_featured'])) {
        update_post_meta($post_id, '_is_featured', 1);
    } else {
        delete_post_meta($post_id, '_is_featured');
    }
}

// Định nghĩa mảng các loại bài viết tùy chỉnh
$custom_post_types = array('post', 'another_post_type', 'yet_another_post_type');

function add_custom_post_type_featured_filter($post_type)
{
    global $typenow;

    if ($typenow == $post_type) {
        $selected = isset($_GET['is_featured']) ? $_GET['is_featured'] : '';
        $options  = array(
            ''  => __('Lọc bài nổi bật', 'text-domain'),
            '1' => __('Nổi bật', 'text-domain'),
        );

        echo '<select name="is_featured">';
        foreach ($options as $value => $label) {
            printf('<option value="%s" %s>%s</option>', $value, selected($selected, $value, false), $label);
        }
        echo '</select>';
    }
}

function filter_posts_by_featured($query)
{
    global $pagenow, $custom_post_types;

    if ($pagenow == 'edit.php' && isset($_GET['post_type']) && in_array($_GET['post_type'], $custom_post_types) && isset($_GET['is_featured']) && $_GET['is_featured'] !== '') {
        $query->set('meta_key', '_is_featured');
        $query->set('meta_value', $_GET['is_featured']);
    }
}

if (is_admin()) {
    add_action('add_meta_boxes', 'add_featured_post_field');
    add_action('save_post', 'save_featured_post_field');
    // Các hàm liên quan đến bộ lọc và quản lý bài viết nổi bật giữ nguyên
    foreach ($custom_post_types as $post_type) {
        add_action("restrict_manage_posts", function () use ($post_type) {
            add_custom_post_type_featured_filter($post_type);
        });

        add_action('pre_get_posts', 'filter_posts_by_featured');
    }
}
function add_featured_column_to_posts($columns)
{
    // Danh sách các post type mà bạn muốn hiển thị cột
    $custom_post_types = array('post', 'another_post_type', 'yet_another_post_type');
    
    // Kiểm tra nếu loại bài viết hiện tại có trong danh sách $custom_post_types
    global $post_type;
    if (in_array($post_type, $custom_post_types)) {
        $columns['featured_post'] = 'Nổi Bật';
    }
    
    return $columns;
}
add_filter('manage_posts_columns', 'add_featured_column_to_posts');

// Xử lý cột dữ liệu
function custom_featured_post_column($column, $post_id)
{
    if ($column === 'featured_post') {
        $is_featured = get_post_meta($post_id, '_is_featured', true);
        echo $is_featured ? '<span style="font-size:20px;">✪</span>' : ''; // Hiển thị dấu sao nếu nổi bật
    }
}
add_action('manage_posts_custom_column', 'custom_featured_post_column', 10, 2);

//tùy chọn thêm bài viết nổi bật hàng loạt
function add_bulk_action_option($bulk_actions)
{
    $bulk_actions['make_featured'] = 'Đánh dấu nổi bật';
    $bulk_actions['remove_featured'] = 'Bỏ đánh dấu nổi bật';
    return $bulk_actions;
}
add_filter('bulk_actions-edit-post', 'add_bulk_action_option');

function handle_featured_bulk_action($redirect_to, $doaction, $post_ids)
{
    if ($doaction === 'make_featured') {
        foreach ($post_ids as $post_id) {
            update_post_meta($post_id, '_is_featured', 1);
        }
    } elseif ($doaction === 'remove_featured') {
        foreach ($post_ids as $post_id) {
            delete_post_meta($post_id, '_is_featured');
        }
    }
    return $redirect_to;
}
add_filter('handle_bulk_actions-edit-post', 'handle_featured_bulk_action', 10, 3);

function custom_theme_sidebar_registration()
{
    // Đăng ký main sidebar
    register_sidebar(array(
        'name'          => __('Sidebar One', 'textdomain'),
        'id'            => 'page-sidebar',
        'description'   => __('A short description of the sidebar.', 'textdomain'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    // Sidebar 1
    register_sidebar(array(
        'name'          => __('Sidebar Two', 'textdomain'),
        'id'            => 'page-sidebar-1',
        'description'   => __('A short description of the sidebar.', 'textdomain'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'custom_theme_sidebar_registration');

function custom_sidebar_metabox_add()
{
    add_meta_box('custom_sidebar', 'Chọn Sidebar', 'custom_sidebar_metabox', 'page', 'side', 'default');
}
add_action('add_meta_boxes', 'custom_sidebar_metabox_add');

function custom_sidebar_metabox($post)
{
    $sidebar_value = get_post_meta($post->ID, 'custom_sidebar_value', true);
?>
    <p>
        <label for="custom_sidebar_value">Chọn Sidebar:</label>
        <select name="custom_sidebar_value" id="custom_sidebar_value">
            <option value="page-sidebarr" <?php selected($sidebar_value, 'page-sidebar'); ?>>Page Sidebar</option>
            <option value="page-sidebar" <?php selected($sidebar_value, 'page-sidebar'); ?>>Page Sidebar 1</option>
            <!-- Thêm các lựa chọn sidebar ở đây nếu có -->
        </select>
    </p>
<?php
}
//Tạo metabox custom vị trí sidebar
function custom_sidebar_metabox_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['custom_sidebar_value'])) {
        update_post_meta($post_id, 'custom_sidebar_value', sanitize_text_field($_POST['custom_sidebar_value']));
    }
}
add_action('save_post', 'custom_sidebar_metabox_save');

function custom_page_layout_metabox() {
    add_meta_box(
        'custom_page_layout',
        'Chọn Layout Trang',
        'custom_page_layout_metabox_callback',
        'page',
        'side'
    );
}

add_action('add_meta_boxes', 'custom_page_layout_metabox');

function custom_page_layout_metabox_callback($post) {
    $value = get_post_meta($post->ID, '_custom_page_layout', true);
    ?>
    <label for="custom_page_layout">Layout Sidebar:</label>
    <select name="custom_page_layout" id="custom_page_layout" class="widefat">
        <option value="full" <?php selected($value, 'full'); ?>>Full width</option>
        <option value="left" <?php selected($value, 'left'); ?>>Left</option>
        <option value="right" <?php selected($value, 'right'); ?>>Right</option>
    </select>
    <?php
}

function save_custom_page_layout_metabox($post_id) {
    if (array_key_exists('custom_page_layout', $_POST)) {
        update_post_meta(
            $post_id,
            '_custom_page_layout',
            $_POST['custom_page_layout']
        );
    }
}
add_action('save_post', 'save_custom_page_layout_metabox');

/**
 * Callback to custom background category
 *
 * @param $taxonomy.
 * @return
 */

 function enqueue_admin_scripts() {
    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }
    wp_add_inline_script('jquery-core', "
        jQuery(document).ready(function($) {
            // Bấm vào nút để thêm ảnh
            $(document).on('click', '.ct_tax_media_button', function(e) {
                e.preventDefault();
                var button = $(this);
                var custom_uploader = wp.media({
                    title: 'Chọn ảnh',
                    library : { type : 'image' },
                    button: { text: 'Sử dụng ảnh này' },
                    multiple: false  // Chỉ cho phép chọn một ảnh
                }).on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#category-image-id').val(attachment.id); // Đặt ID của ảnh được chọn vào input hidden
                    $('#category-image-wrapper').html('<img src=\"' + attachment.url + '\" style=\"max-width:100%;\">'); // Hiển thị ảnh thumbnail
                }).open();
            });

            // Bấm vào nút để xóa ảnh
            $(document).on('click', '.ct_tax_media_remove', function(e) {
                e.preventDefault();
                $('#category-image-id').val(''); // Xóa ID khỏi input hidden
                $('#category-image-wrapper').html(''); // Xóa ảnh thumbnail
            });
        });
    ");
}
add_action('admin_enqueue_scripts', 'enqueue_admin_scripts');

function custom_category_fields_add($taxonomy) {
    ?><div class="form-field term-group">
        <label for="category-image-id"><?php _e('Background Image', 'text-domain'); ?></label>
        <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
        <div id="category-image-wrapper"></div>
        <p>
            <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e('Add Image', 'text-domain'); ?>" />
            <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e('Remove Image', 'text-domain'); ?>" />
        </p>
    </div><?php
}
add_action('category_add_form_fields', 'custom_category_fields_add', 10, 2);

function custom_category_fields_edit($term, $taxonomy) {
    $image_id = get_term_meta($term->term_id, 'category-image-id', true);
    ?><tr class="form-field term-group-wrap">
        <th scope="row">
            <label for="category-image-id"><?php _e('Background Image', 'text-domain'); ?></label>
        </th>
        <td>
            <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo esc_attr($image_id); ?>">
            <div id="category-image-wrapper">
                <?php if ($image_id) {
                    echo wp_get_attachment_image($image_id, 'thumbnail');
                } ?>
            </div>
            <p>
                <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e('Add Image', 'text-domain'); ?>" />
                <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e('Remove Image', 'text-domain'); ?>" />
            </p>
        </td>
    </tr><?php
}
add_action('category_edit_form_fields', 'custom_category_fields_edit', 10, 2);

function save_category_image($term_id) {
    if (isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']) {
        update_term_meta($term_id, 'category-image-id', absint($_POST['category-image-id']));
    } else {
        delete_term_meta($term_id, 'category-image-id');
    }
}
add_action('created_category', 'save_category_image', 10, 2);
add_action('edited_category', 'save_category_image', 10, 2);
/**
 * Callback add custom field
 *
 * @param $metabox.
 * @return
 */
function add_custom_meta_box() {
    add_meta_box(
        'references_meta_box', // ID của metabox
        'References', // Tiêu đề của metabox
        'show_references_meta_box', // Hàm hiển thị metabox
        'post', // Post type áp dụng
        'normal', // Vị trí hiển thị
        'high' // Độ ưu tiên hiển thị
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

function show_references_meta_box($post) {
    wp_nonce_field(basename(__FILE__), 'references_meta_box_nonce');
    $references = get_post_meta($post->ID, 'references', true);
    ?>
    <div id="dynamic_form">
        <?php if ($references && is_array($references)) : ?>
            <?php foreach ($references as $reference) : ?>
                <div class="form_field">
                    <label for="reference_link">Link:</label>
                    <input type="text" name="references[]" value="<?php echo esc_attr($reference); ?>" />
                    <button class="remove_field_button" type="button">Remove</button>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="form_field">
                <label for="reference_link">Link:</label>
                <input type="text" name="references[]" value="" />
                <button class="remove_field_button" type="button">Remove</button>
            </div>
        <?php endif; ?>
    </div>
    <button id="add_field_button" type="button">Add Field</button>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('add_field_button').addEventListener('click', function() {
                var formField = document.createElement('div');
                formField.className = 'form_field';
                formField.innerHTML = '<label for="reference_link">Link:</label><input type="text" name="references[]" value="" /><button class="remove_field_button" type="button">Remove</button>';
                document.getElementById('dynamic_form').appendChild(formField);
            });

            document.addEventListener('click', function(e) {
                if (e.target && e.target.className == 'remove_field_button') {
                    e.target.parentNode.remove();
                }
            });
        });
    </script>
    <?php
}
/**
 * Callback save meta box
 *
 * @param $metabox.
 * @return
 */
function save_references_meta_box($post_id) {
    if (!isset($_POST['references_meta_box_nonce']) || !wp_verify_nonce($_POST['references_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    if (isset($_POST['references'])) {
        $references = array_map('sanitize_text_field', $_POST['references']);
        update_post_meta($post_id, 'references', $references);
    } else {
        delete_post_meta($post_id, 'references');
    }
}
add_action('save_post', 'save_references_meta_box');
