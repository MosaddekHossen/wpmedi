<?php

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

// medi_menu
function medi_top_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'top-menu',
            'menu_class'      => 'top-link',
        )
    );
}

// medi_menu
function medi_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'nav menu',
            'menu_id'         => '',
            'fallback_cb'     => 'Medi_Walker_Nav_Menu::fallback',
            'walker'     => new Medi_Walker_Nav_Menu,
        )
    );
}

// medi_copyright
function medi_copyright()
{
    $medi_copyright = get_theme_mod('footer_copyright', __('© Copyright 2024  |  All Rights Reserved by wpthemesgrid.com', 'medi'))
?>
    <p><?php echo wp_kses_post($medi_copyright); ?></p>
<?php
}

// medi_footer
function medi_footer()
{
    get_template_part('/inc/template-parts/footer/footer-1');
}
