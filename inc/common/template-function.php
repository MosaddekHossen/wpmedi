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
