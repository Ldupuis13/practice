
</div><!-- End Container --></div><!-- End Container -->

<div id="footer">

<div id="footerwidgets">

<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 3') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 4') ) ?>

</div><!-- End Footer Widgets-->

</div><!-- End Footer -->

<div id="credits">

    <?php if ( get_theme_mod( 'themefurnace_footer_logo' ) ) : ?>
        <p><img class="footerlogo" src='<?php echo esc_url( get_theme_mod( 'themefurnace_footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></p>
    <?php else : ?>
    <?php endif; ?>
    <p class="copy"><?php echo get_theme_mod( 'themefurnacefooter_footer_text' ); ?><br />
        <?php _e('&copy; Copyright','themefurnace') ?> <?php the_time('Y') ?> <?php bloginfo('name'); ?> - <?php printf( __( 'Theme: %1$s by %2$s.', 'themefurnace' ), 'FlatPack', '<a href="http://themefurnace.com" rel="designer">ThemeFurnace</a>' ); ?></a></p>

</div>
<?php echo get_theme_mod( 'footer_scripts' ); ?>
<?php wp_footer(); ?>
</body>
</html>