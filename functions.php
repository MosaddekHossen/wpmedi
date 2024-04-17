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

    /** post thumbnail **/
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'medi_theme_setup');
