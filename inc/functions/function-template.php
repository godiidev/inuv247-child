<?php

/**
 * Outputs the beginning markup of a sticky column.
 *
 * Outputs the markup directly if no theme modification name has been
 * given. Else based on the return value of the mod.
 *
 * If a theme mod was given and will output, sticky mode gets set based on $name . '_mode' theme mod.
 *
 * @param string $name  Theme modification name.
 * @param string $mode  Sticky mode (css or javascript).
 */
function synex_sticky_column_open($name = '', $mode = '')
{
    if (empty($name) || get_theme_mod($name)) {
        if (! empty($name) && empty($mode)) {
            $mode = get_theme_mod($name . '_mode');
        }

        echo sprintf(
            '<div class="is-sticky-column"%s>',
            ! empty($mode) ? ' data-sticky-mode="' . esc_attr($mode) . '"' : ''
        );
        echo '<div class="is-sticky-column__inner">';
    }
}



/**
 * Get synex_breadcrumb hooked content.
 *
 * @param string|array $class   One or more classes to add to the class list.
 * @param bool         $display Whether to display the breadcrumb (true) or return it (false).
 */
function inuv_breadcrumb($class = '', $display = true)
{
    do_action('inuv_breadcrumb', $class, $display);
}


// Simplifying the archive title
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) {
        $title = sprintf('%1$s', single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

/**
 * AJAX handler to update post views count.
 */
function ajax_set_post_views()
{
    check_ajax_referer('post-view-nonce', 'security');

    if (isset($_POST['postID'])) {
        $postID = intval($_POST['postID']);
        $countKey = 'post_views_count';
        $count = get_post_meta($postID, $countKey, true);

        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $countKey);
            add_post_meta($postID, $countKey, '1');
        } else {
            $count++;
            update_post_meta($postID, $countKey, $count);
        }

        wp_send_json_success($count);
    } else {
        wp_send_json_error('Post ID is missing.');
    }
}

add_action('wp_ajax_nopriv_ajax_set_post_views', 'ajax_set_post_views');
add_action('wp_ajax_ajax_set_post_views', 'ajax_set_post_views');


/**
 * Get post views.
 *
 * @param int $postID Post ID.
 * @return string Number of views.
 */
function get_post_views($postID)
{
    $views = get_post_meta($postID, 'post_views_count', true);
    return $views ? $views : '0';
}

/**
 * Callback to post view.
 *
 * @param $postID.
 * @return $totalString
 */
function gp_reading_time()
{
    $post_id = get_queried_object_id();
    $article = get_post_field('post_content', $post_id); //gets full text from article
    $wordcount = str_word_count(strip_tags($article)); //removes html tags
    $time = ceil($wordcount / 250); //takes rounded of words divided by 250 words per minute

    if ($time == 1) { //grammar conversion
        $label = " phút đọc";
    } else {
        $label = " phút";
    }

    $totalString = $time . $label; //adds time with minute/minutes label
    return $totalString;
}

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

/**
 * Callback to cc_mime_types.
 *
 * @param $mimes.
 * @return $mimes
 */
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

/**
 * Callback to cc_mime_types.
 *
 * @param $post_id.
 * @return 
 */
function auto_save_reviewer_name($post_id)
{
    // Bỏ qua nếu là revision hoặc auto draft
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) {
        return;
    }

    // Chỉ cho phép người dùng có khả năng 'edit_others_posts' (ví dụ: Editor trở lên) lưu tên người kiểm duyệt
    if (!current_user_can('edit_others_posts')) {
        return;
    }

    // Lấy thông tin người dùng hiện tại và lưu vào custom field
    $current_user = wp_get_current_user();
    $reviewer_name = $current_user->display_name; // Hoặc $current_user->user_login

    update_post_meta($post_id, 'reviewer_name', $reviewer_name);
}
add_action('save_post', 'auto_save_reviewer_name');
$custom_post_types = get_post_types(array('_builtin' => false), 'beautyguide', 'fashionhistory', 'fashionnews', 'shareexperience');
foreach ($custom_post_types as $post_type) {
    add_action("save_post_{$post_type}", 'auto_save_reviewer_name');
}