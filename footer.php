	</div><!-- #content -->
    <?php get_template_part('template-parts/footer/footer', 'top'); ?>
    <?php 
    $footer_layout = get_theme_mod( 'footer_layout', 'ftone' );	
    get_template_part('template-parts/footer/footer', $footer_layout); ?>
</div><!-- #page -->
    <?php get_template_part( 'template-parts/offcanvas/offcanvas', 'one' );?>
<?php wp_footer(); ?>
<a href="#" class="topbutton" style="display: inline; opacity: 0.5;"><i class="cb-font-up-open"></i></a>
</body>
</html>
