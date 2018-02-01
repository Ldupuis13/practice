<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" <?php language_attributes(); ?> >

<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php load_theme_fonts(); ?>
    <?php wp_head(); ?>
    <?php load_theme_colors(); ?>

    <script type="text/javascript">
		jQuery(document).ready(function( $ ) {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
  </script> 
</head>

<body <?php body_class(); ?>>


<div id="header">
<div class="containerblank">
    <?php if ( get_theme_mod( 'themefurnace_logo' ) ) : ?>
        <p><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo" src='<?php echo esc_url( get_theme_mod( 'themefurnace_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' /></a></p>
    <?php else : ?>
        <h1 id="logo_text"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
    <?php endif; ?>
<p class="tagline"><?php bloginfo('description'); ?></p>
</div><!-- End Containerblank -->
</div><!-- End header -->

<div id="navbar">
<div id="main-nav">
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
</div><!-- End Navbar -->
</div><!-- End main nav -->