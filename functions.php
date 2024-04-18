<?php

/**
 * Essential theme supports
 * */
function medi_theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'medi_theme_setup');

// wp_enqueue_scripts
function medi_add_theme_scripts()
{
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/assets/css/datepicker.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('medi-main', get_template_directory_uri() . '/assets/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array('jquery'), 1.0, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1.0, true);
    wp_enqueue_script('colors', get_template_directory_uri() . '/assets/js/colors.js', array(), 1.0, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.js', array(), 1.0, true);
    wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.min.js', array(), 1.0, true);
    wp_enqueue_script('migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array(), 1.0, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), 1.0, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), 1.0, true);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), 1.0, true);
    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1.0, true);
    wp_enqueue_script('jquery.nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array(), 1.0, true);
    wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), 1.0, true);
    wp_enqueue_script('active', get_template_directory_uri() . '/assets/js/map-active.js', array(), 1.0, true);
    wp_enqueue_script('niceselect', get_template_directory_uri() . '/assets/js/niceselect.js', array(), 1.0, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array(), 1.0, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1.0, true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/slicknav.min.js', array(), 1.0, true);
    wp_enqueue_script('steller', get_template_directory_uri() . '/assets/js/steller.js', array(), 1.0, true);
    wp_enqueue_script('tilt-jquery', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array(), 1.0, true);
    wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1.0, true);
    wp_enqueue_script('medi-main', get_template_directory_uri() . '/assets/js/main.js', array(), 1.0, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'medi_add_theme_scripts');
