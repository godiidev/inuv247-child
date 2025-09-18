<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="godii-art-inner">
    <div class="pre-content">
      <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
      <div class="godii-art-opt"><?php echo wp_kses_post(get_the_category_list()); ?></div>
      <?php
      if (is_singular()) :
        the_title('<h1 class="coblog-entry-title">', '</h1>');
      else :
        the_title('<h2 class="coblog-entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
      endif;
      ?>
    </div><!-- .pre-content -->

    <div class="bodyContent">
      <?php if (get_post_type() == 'post') : ?>
        <div id="intro" class="section hasad">
          <div class="author_info">
            <div id="coauthor_byline" class="article_byline ">
              <div id="byline_info">
                <span class="newline">
                  <b>Duyệt bởi</b>
                  <a href="#" class="coauthor_link   coauthor_checkstar">
                    <?php
                    // Lấy và hiển thị tên người kiểm duyệt từ custom field
                    $reviewer_name = get_post_meta(get_the_ID(), 'reviewer_name', true);
                    if (!empty($reviewer_name)) {
                      $reviewer_display_name = get_the_author_meta('display_name');
                      echo esc_html($reviewer_display_name);
                    }
                    ?>
                  </a>
                </span>
                <p>
                  <a href="#" class="byline_info_link hover_pop">
                    <?php $last_updated = get_the_modified_date('F d, Y'); ?>
                    <span class="last_updated_highlighted">Ngày cập nhật: <?php echo esc_html($last_updated); ?></span>
                  </a>
                  <a href="#References" class="byline_references">Tham khảo</a>
                </p>
              </div>
            </div>
            <div id="post_meta" class="article_byview ">
              <div class="viewpost">
                <span style="width:14px; max-width:14px; flex:0 0 14px; height:14px;" class="svg-icon">
                  <svg width="14" height="14" role="img" viewBox="0 0 576 512">
                    <g>
                      <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" class=""></path>
                    </g>
                  </svg>
                </span>
                <span><?php echo get_post_views(get_the_ID()); ?></span>
              </div>
              <a class="large_pdf_link pdf_link 0" href="/bao-gia-in-va-thiet-ke/" target="_blank" rel="noreferrer noopener">
                <img class="pdf_link-img" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-pdf.svg" width="150" height="150">
                <span class="pdfText">Bảng giá in</span>
              </a>
            </div>
          </div>
          <div role="navigation" id="method_toc" class="intl_toc">
            <div>
              <div id="method_toc_list">
                <span class="header_toc">Trong bài viết này</span>
              </div> <!-- .method_toc_list -->
              <div id="toc_line"></div>
            </div>
          </div> <!-- .en_toc -->
          <p class="art-desc">
            <?php coblog_post_entry_content(); ?>
          </p>
        </div>
      <?php endif; ?>
    </div><!-- .bodyContent -->

    <div id="mf-section">
      <?php coblog_post_thumbnail(); ?>
    </div>
    <div id="mf-section" class="section_text">
      <?php the_content(); ?>
    </div>

    <!-- References Section -->
    <div class="section references">
      <div class="headline_container">
        <div class="headline_info">
          <h2 class="section-heading" data-toc="no">Nguồn tham khảo</h2>
        </div>
      </div>
      <?php
      $references = get_post_meta(get_the_ID(), 'references', true);
      if ($references && is_array($references)) : ?>
        <div id="references" class="section_text">
          <ol class="references-list">
            <?php
            $index = 1;
            foreach ($references as $reference) : ?>
              <li id="_note-<?php echo $index; ?>">
                <!--<a href="#_ref-<?php // echo $index; 
                                    ?>" target="_blank">↑</a> -->
                <span class="reference-text">
                  <a target="_blank" rel="noreferrer noopener" class="external free" href="<?php echo esc_url($reference); ?>"><?php echo esc_url($reference); ?></a></span>
              </li>
            <?php
              $index++;
            endforeach; ?>
          </ol>
        </div>
      <?php endif; ?>
    </div>


    <!-- You Might Also Like Section -->
    <div class="section related-posts-section">
      <div class="headline_container">
        <div class="headline_info">
          <h2 class="title-relate" data-toc="no"><span class="mw-headline" id="relate-synex">Có thể bạn sẽ thích</span></h2>
        </div>
      </div>
      <div id="relatedsynex" class="section_text">
          <?php
          $related_posts = new WP_Query(array(
            'category__in'   => wp_get_post_categories($post->ID),
            'posts_per_page' => 6,
            'post__not_in'   => array($post->ID),
            'orderby'        => 'rand'
          ));
          if ($related_posts->have_posts()) :
            while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
              <a class="related-wh" href="<?php the_permalink(); ?>">
                <div class="content-spacer">
                  <?php coblog_post_thumbnail(); ?>
                  <span class="related-wh-title"><?php the_title(); ?></span>
                </div>
              </a>
          <?php endwhile;
            wp_reset_postdata();
          endif; ?>
      </div>
    </div>
  </div><!-- .godii-art-inner -->
</article>