<div class="responsive_thumb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php custom_post_thumbnail() ?>
    <a href="<?php echo esc_url( get_permalink() ) ?>">
        <div class="responsive_thumb_title">
            <?php the_title( '<h3 class="feature_title">');?>
            </h3>
        </div>
    </a>
</div>