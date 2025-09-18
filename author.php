<?php get_header();?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="log-aut-area">
            <div class="container">
                <div class="log-aut-parts">
                    <div class="log-aut-sidebar">
                        <section class="log-aut-part text-center">
                            <div class="log-aut-thumb">
                                <div class="log-aut-img">
                                    <?php
                                    $user = wp_get_current_user();
                                    if ( $user ) : ?>
                                    <picture>
                                        <source type="image/webp" srcset="<?php echo get_avatar_url(get_the_author_meta('ID')); ?> ">
                                        <source srcset="<?php echo get_avatar_url(get_the_author_meta('ID')); ?> ">
                                        <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                    </picture>
                                    <?php endif; ?>
              
                                   </div>
                                        <span class="bg-green color-white log-aut-class">
                                            <span style="" class="svg-icon">
                                            <svg role="img" viewBox="0 0 576 512">
                                            <g>
                                                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                            </g></svg>
                                            </span>
                                        </span>       
                                    </div>
                                        <span class="log-aut-status color-green">ALPHATRANS GROUP</span>
                                        <?php the_archive_title( '<h3 class="log-aut-h">', '</h3>' );?>
                            <div class="log-aut-pos"><?php echo get_the_author_meta( '_chuc_vu', $userID ); ?></div>
                        </section>

                        <section class="log-aut-part text-center">
                            <a class="btn btn-sec font-size-16 open-modal_js" href="mailto:<?php echo get_the_author_meta( 'email', $userID ); ?>">Email Liên Hệ</a>
                        </section>
               
                        <section class="log-aut-part">
                            <h3 class="log-aut-sub-h mb0">Công Ty</h3>
                                <p class="log-aut-comp mb0">
                                    <a target="_blank" href="#">Locamoda</a>
                                </p>
                        </section>
                        <section class="log-aut-part">
                            <h3 class="log-aut-sub-h">Theo dõi</h3>
                            
                            <ul class="log-aut-list">
                                <li>
                                    <span style="" class="svg-icon">
                                    <svg role="img" viewBox="0 0 24 24"> 
                                    <g>
                                        <path fill="currentColor" d="M19.199 24C19.199 13.467 10.533 4.8 0 4.8V0c13.165 0 24 10.835 24 24h-4.801zM3.291 17.415c1.814 0 3.293 1.479 3.293 3.295 0 1.813-1.485 3.29-3.301 3.29C1.47 24 0 22.526 0 20.71s1.475-3.294 3.291-3.295zM15.909 24h-4.665c0-6.169-5.075-11.245-11.244-11.245V8.09c8.727 0 15.909 7.184 15.909 15.91z"></path>
                                    </g></svg>
                                </span>
                                        <a target="_blank" href="<?php echo get_the_author_meta( 'facebook', $userID); ?>">Facebook</a>
                                </li>
                            </ul>
                        
                                
                            <ul class="log-aut-list">
                                <li>
                                    <span style="" class="svg-icon">
                                        <svg role="img" viewBox="0 0 512 512">
                                        <g>
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                    </g></svg>
                                    </span>
                        
                                        <a target="_blank" href="<?php echo get_the_author_meta( 'twitter', $userID ); ?>">Twitter</a>
                                </li>
                                <li>
                                    <span style="margin-top:-6px;" class="svg-icon">
                                    <svg role="img" viewBox="0 0 24 24">
                                        
                                    <g>
                                    <path fill="currentColor" d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path>
                                </g></svg>
                                        </span>
                                <a target="_blank" href="<?php echo get_the_author_meta( 'linkedin', $userID ); ?>">LinkedIn</a>
                                </li>
                            </section>
            
                            <section class="log-aut-part">
                            <h3 class="log-aut-sub-h mb0">Trình Độ</h3>
                            <p class="log-aut-comp mb0">
                                <a target="_blank" rel="nofollow noopener" href="https://logone.vn/"><?php echo get_the_author_meta( '_hoc_van', $userID ); ?></a></p>
                        </section>
            
                        <div class="log-aut-part">
                            <h3 class="log-aut-sub-h">Chuyên môn</h3>
                            <ul class="log-aut-tags">
                                <li><a target="_blank" title="Nhấp để xem" href="#">Tư vấn hải quan</a></li>
                                <li><a target="_blank" title="Nhấp để xem" href="#">Vận chuyển đường biển quốc tế</a></li>
                                <li><a target="_blank" title="Nhấp để xem" href="#">Tư vấn vận chuyển hàng air</a></li>
                                <li><a target="_blank" title="Nhấp để xem" href="#">Báo giá cước xuất nhập</a></li>
                                <li><a target="_blank" title="Nhấp để xem" href="#">Đàm phán với hải quan</a></li>
                                <li><a target="_blank" title="Nhấp để xem" href="#">Tư vấn giấy phép các loại</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="log-aut-content">
                    <header class="page-header">
                        <?php
                        $coblog_column = get_theme_mod( 'blog_post_column', 1 );?>
                        <h2 class="log-aut-etitle">Giới thiệu</h2>
                        <?php the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->
                    <?php
                    if ( have_posts() ) : ?>
                        <div class="coblog-layout-wrap <?php echo esc_attr($coblog_archive_layout)?>">
                            <h2 class="log-aut-etitle">Bài viết</h2>
                            <div class="coblog-layout-inside">
                                <div class="coblog-post-column coblog-post-column<?php echo esc_attr($coblog_column);?>">
                                <?php
                                    while ( have_posts() ) :
                                        the_post();
                                        get_template_part( 'template-parts/content/content', get_post_type() );
                                    endwhile;
                                ?>
                                </div>
                                <?php
                                the_posts_pagination( array(
                                    'next_text' => '<span>'.esc_html__( 'Next', 'coblog' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'coblog' ) . '</span>',
                                    'prev_text' => '<span>'.esc_html__( 'Previous', 'coblog' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'coblog' ) . '</span>',
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'coblog' ) . ' </span>',
                                ));?>
                            </div><!--/.coblog-layout-inside-->
                            <?php if ( $coblog_archive == 'right' ) { get_sidebar();}?>
                        </div><!--/.coblog-layout-wrap-->
                    <?php else :
                        get_template_part( 'template-parts/content/content', 'none' );
                    endif;
                    ?>              
                    </div><!-- .log-aut-parts -->
                </div><!-- .container -->
            </div><!-- .container -->
        </div><!-- .log-aut-area -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
