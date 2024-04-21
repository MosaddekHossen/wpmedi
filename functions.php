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
            'side-menu' => __('Side Menu', 'harry'),
            'footer-menu' => __('Footer Menu', 'harry'),
        )
    );
}
add_action('after_setup_theme', 'medi_theme_setup');

// include_once
include_once('inc/common/scripts.php');
include_once('inc/common/medi-kirki.php');
include_once('inc/common/template-function.php');
include_once('inc/common/nav-walker.php');
