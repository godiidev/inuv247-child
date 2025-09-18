<footer class="coblog-footer coblog-footer-two">
    <div class="coblog-footer-info">
        <div class="row">
            <div class="col-md-12">
                <div class="coblog-copyrhigt">
                    <?php $coblog_footer_logo = get_theme_mod( 'footer_logo', COBLOG_URI.'/assets/images/footer-logo.png' );?>
                    <?php $coblog_footer_share = get_theme_mod( 'enable_footer_share', 1 );?>
                    <?php echo do_shortcode( '[wp_reusable_render id="52"]' );?>
                    <?php if($coblog_footer_share == 0) { ?>
                    <div class="coblog-social-icon coblog-footer-social-icon">
                        <ul>
                            <?php if( get_theme_mod( 'share_facebook', '#' ) ) { ?>
                            <li><a href="<?php echo esc_url(get_theme_mod( 'share_facebook', '#' ));?>"><i
                                        class="cb-font-facebook"></i></a></li>
                            <?php } ?>
                            <?php if( get_theme_mod( 'share_instagram', '#' ) ) { ?>
                            <li><a href="<?php echo esc_url(get_theme_mod( 'share_instagram', '#' ));?>"><i
                                        class="cb-font-instagram"></i></a></li>
                            <?php } ?>
                            <?php if( get_theme_mod( 'share_twitter', '#' ) ) { ?>
                            <li><a href="<?php echo esc_url(get_theme_mod( 'share_twitter', '#' ));?>"><i
                                        class="cb-font-twitter"></i></a></li>
                            <?php } ?>
                            <?php if( get_theme_mod( 'share_linkedin', '#' ) ) { ?>
                            <li><a href="<?php echo esc_url(get_theme_mod( 'share_linkedin', '#' ));?>"><i
                                        class="cb-font-linkedin"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--/.coblog-social-icon-->
                </div>
                <!--/.coblog-copyright-->
                <?php } ?>
                <?php 
                    if ( has_nav_menu( 'footer-menu' ) ) :
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_class'     => 'coblog-footer-menu',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            )
                        );
                    endif; 
                    ?>
            </div>
            <!--/.col-sm-5-->
        </div>
        <!--/.row-->
    </div><!-- .coblog-footer-info -->
    <div class="coblog-copyrhigt-text">
        <?php echo wp_kses_post( footer_copyright() );?>
    </div>
</footer>