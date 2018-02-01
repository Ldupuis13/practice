</div><!-- End Container --></div><!-- End Container -->

<div id="footer">

<div id="footerwidgets">

<div id="footerwidgets" style="margin: auto;">

<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 3') ) ?>
<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 4') ) ?>

</div><!-- End Footer Widgets-->

</div><!-- End Footer Widgets-->

</div><!-- End Footer -->

<div id="credits">

    <?php if ( get_theme_mod( 'themefurnace_footer_logo' ) ) : ?>
        <p><img class="footerlogo" src='<?php echo esc_url( get_theme_mod( 'themefurnace_footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></p>
    <?php else : ?>
    <?php endif; ?>
<p class="copy"><?php echo get_theme_mod( 'themefurnacefooter_footer_text' ); ?><br />
        <?php _e('&copy; Copyright','Axiom Valuations') ?> <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php printf( __( 'Theme: %1$s by %2$s.', 'themefurnace' ), 'FlatPack-Child', '<a href="http://mikegriffin.me" rel="designer">MikeGriffin dot me</a>' ); ?></a></p>

</div>
<?php echo get_theme_mod( 'footer_scripts' ); ?>
<?php wp_footer(); ?>
</body>
</html>