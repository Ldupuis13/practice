<?php
// Theme Specific Settings

// Content Width
if (!isset($content_width))
    $content_width = 990; /* pixels */


// Custom Backgrounds
function themefurnace_register_custom_background()
{
    $args = array(
        'default-color' => '#FAFAFA',
        'default-image' => '',
    );

    $args = apply_filters('themefurnace_custom_background_args', $args);

    if (function_exists('wp_get_theme')) {
        add_theme_support('custom-background', $args);
    } else {
        define('BACKGROUND_COLOR', $args['default-color']);
        if (!empty($args['default-image']))
            define('BACKGROUND_IMAGE', $args['default-image']);

    }
}

add_action('after_setup_theme', 'themefurnace_register_custom_background');


function load_theme_fonts()
{
    $heading = get_theme_mod('google_fonts_heading_font');
    $body = get_theme_mod('google_fonts_body_font');
    if ((!empty($heading) && $heading != 'none') || (!empty($body) && $body != 'none')) {
        echo '<style type="text/css">';
        $imports = array();
        $styles = array();
        if (!empty($heading) && $heading != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family=' . urlencode($heading) . ');';
            $styles[] = 'h1, h2, h3, h4, h5, h6 { font-family: "' . $heading . '" !important }';
        }
        if (!empty($body) && $body != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family=' . urlencode($body) . ');';
            $styles[] = 'body { font-family: "' . $body . '" !important }';
        }

        echo implode("\r\n", $imports);
        echo implode("\r\n", $styles);
        echo '</style>';

    }
}

// load colors
function load_theme_colors()
{
    $backgroundColor = get_theme_mod('background_color', '#FAFAFA');
    $contentColor = get_theme_mod('content_color', '#ffffff;');
    $accentColor = get_theme_mod('accent_color', '#FB6868;');
    $textColor = get_theme_mod('text_color', '#757575;');
    $headingsColor = get_theme_mod('headings_color', '#252525;');
    $linkColor = get_theme_mod('link_color', '#FB6868;');
    $headerColor = get_theme_mod('header_color', '#0F0F0F;');
    $footerColor = get_theme_mod('footer_color', '#222222;');

    echo '<style type="text/css">';

    if (!empty($backgroundColor)) {
        $hash = '';
        if (strpos($backgroundColor, '#') === false) {
            $hash = '#';
        }
        echo 'body { background-color: ' . $hash . $backgroundColor . '}';
    }

    if (!empty($linkColor)) {
        $hash = '';
        if (strpos($linkColor, '#') === false) {
            $hash = '#';
        }
        echo 'a, .portfolioitem p a:hover, .portfoliotitle a:hover, .blogtitle a:hover, .blogmeta a:hover, #topmeta .author a:hover, #botmeta .author a:hover, .footerwidget a, #footertwitter a, .posttag a:hover, .sidebarwidget li a:hover,  { color: ' . $hash . $linkColor . '}';
    }

    if (!empty($contentColor)) {
        $hash = '';
        if (strpos($contentColor, '#') === false) {
            $hash = '#';
        }
        echo '.container, .container2 { background-color: ' . $hash . $contentColor . '}';
    }

    if (!empty($accentColor)) {
        $hash = '';
        if (strpos($accentColor, '#') === false) {
            $hash = '#';
        }

        echo '#main-nav, .portfolioimage, #blog, .portfoliooverlay:hover, #main-nav li a:hover, #main-nav .current-menu-item a, #main-nav .current_page_item a, .selected, #main-nav ul ul li a:hover, #inside { border-color: ' . $hash . $accentColor . '}';
        echo '.slide-data h1.slide-title, .flex-direction-nav a, .itemoverlay:before,  a.button, .button, button, html input[type="button"], input[type="reset"]{ background-color: ' . $hash . $accentColor . '}';
        echo '.rosy, .rosy:hover, .tagcloud a, #navbar, .slidetitle span,.blogmeta, .topsubmit, .featureicon, .featureiconsmall, .portfoliooverlay span, #social li, #topmeta .category, #botmeta .category, #portfolio-filter a, .slidemeta, .blogmetainside { background-color: ' . $hash . $accentColor . ';}';
    }

    if (!empty($textColor)) {
        $hash = '';
        if (strpos($textColor, '#') === false) {
            $hash = '#';
        }
        echo 'body { color: ' . $hash . $textColor . '}';
    }

    if (!empty($headingsColor)) {
        $hash = '';
        if (strpos($headingsColor, '#') === false) {
            $hash = '#';
        }
        echo 'h1,h2,h3,h4,h5,h6, #content h1, #content h2, #content h3, #content h4, #content h5, #content h6, blockquote{ color: ' . $hash . $headingsColor . ' }';
    }


    if (!empty($headerColor)) {
        $hash = '';
        if (strpos($headerColor, '#') === false) {
            $hash = '#';
        }
        echo '#header { background-color: ' . $hash . $headerColor . '}';
    }


    if (!empty($footerColor)) {
        $hash = '';
        if (strpos($footerColor, '#') === false) {
            $hash = '#';
        }
        echo '#footer { background-color: ' . $hash . $footerColor . '}';
    }


    echo '</style>';


    $body = get_theme_mod('google_fonts_body_font');
    if (!empty($heading) && $heading != 'none' && !empty($body) && $body != 'none') {
        echo '<style type="text/css">';
        $imports = array();
        $styles = array();
        if (!empty($heading) && $heading != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family=' . urlencode($heading) . ');';
            $styles[] = 'h1, h2, h3, h4, h5, h6 { font-family: "' . $heading . '" !important }';
        }
        if (!empty($body) && $body != 'none') {
            $imports[] = '@import url(//fonts.googleapis.com/css?family=' . urlencode($body) . ');';
            $styles[] = 'body { font-family: "' . $body . '" !important }';
        }

        echo implode("\r\n", $imports);
        echo implode("\r\n", $styles);
        echo '</style>';

    }
}