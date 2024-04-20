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
}
add_action('after_setup_theme', 'medi_theme_setup');

// medi_header
function medi_header()
{
    get_template_part('/inc/template-parts/header/header-1');
}

// medi_logo
function medi_logo()
{
    $medi_logo = get_theme_mod('medi_header_logo', get_template_directory_uri() . '/assets/img/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($medi_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php
}

// include_once
include_once('inc/common/scripts.php');
include_once('inc/medi-kirki.php');
