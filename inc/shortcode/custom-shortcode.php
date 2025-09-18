<?php
function custom_services_list_shortcode() {
    ob_start();
    ?>
    <div class="services-list-wrapper">
        <?php 
        $services = [
            ['IN KỸ THUẬT SỐ', 'in-ky-thuat-so-info.webp', 'in-ky-thuat-so'],
            ['IN OFFSET', 'in-offset-info.webp', 'in-offset'],
            ['IN QUẢNG CÁO', 'in-quang-cao-info.webp', 'in-quang-cao'],
            ['IN BẠT UV', 'in-bat-uv-info.webp', 'in-bat-uv'],
            ['IN KHỔ LỚN', 'in-kho-lon-info.webp', 'in-kho-lon'],
            ['IN TRANH TƯỜNG', 'in-tranh-tuong-info.webp', 'in-tranh-tuong'],
            ['INUV', 'in-uv-info.webp', 'inuv'],
            ['IN DECAL', 'in-decal-info.webp', 'in-decal'],
        ];

        $total_services = count($services);

        foreach ($services as $index => $service) :
            $title = $service[0];
            $image = $service[1];
            $slug = $service[2];
            ?>
            <div class="services-list">
                <a href="<?php echo esc_url( get_site_url() . "/$slug/"); ?>">
                    <div class="services-list-image">
                        <img decoding="async" src="<?php echo esc_url( get_stylesheet_directory_uri() . "/assets/images/$image"); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
                    </div>
                    <div class="services-list-text">
                        <p><?php echo esc_html($title); ?>
                            <?php if ($index < $total_services - 1): ?>
                                    <span>/</span>
                            <?php endif; ?>
                        </p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_services_list', 'custom_services_list_shortcode');