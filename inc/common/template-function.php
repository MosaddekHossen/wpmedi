<?php
// medi_logo
function medi_logo()
{
    $medi_logo = get_theme_mod('medi_header_logo', get_template_directory_uri() . '/assets/img/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($medi_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
<?php
}
