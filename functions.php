<?php

//  Essential theme supports
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

    /** refresh widgets **/
    add_theme_support('customize-selective-refresh-widgets');

    // register_nav_menu
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'harry'),
            'footer-menu' => __('Footer Menu', 'harry'),
        )
    );

    // Classic editor on the widget
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'medi_theme_setup');

// 
function medi_widgets()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'medi'),
        'id'            => 'footer-widget-01',
        'description'   => __('Widgets in this area will be shown on footer.', 'medi'),
        'before_widget' => '<div id="%1$s" class="single-footer %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'medi'),
        'id'            => 'footer-widget-02',
        'description'   => __('Widgets in this area will be shown on footer.', 'medi'),
        'before_widget' => '<div id="%1$s" class="single-footer f-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'medi'),
        'id'            => 'footer-widget-03',
        'description'   => __('Widgets in this area will be shown on footer.', 'medi'),
        'before_widget' => '<div id="%1$s" class="single-footer %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 04', 'medi'),
        'id'            => 'footer-widget-04',
        'description'   => __('Widgets in this area will be shown on footer.', 'medi'),
        'before_widget' => '<div id="%1$s" class="single-footer %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'medi_widgets');

// Current date
function current_date()
{
    return date('y');
}

// include_once
include_once('inc/common/scripts.php');
include_once('inc/common/medi-kirki.php');
include_once('inc/common/template-function.php');
include_once('inc/common/nav-walker.php');
