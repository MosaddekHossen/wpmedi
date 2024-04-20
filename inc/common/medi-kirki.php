<?php
new \Kirki\Panel(
    'medi_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('My Options', 'medi'),
        'description' => esc_html__('My Panel Description.', 'medi'),
    ]
);

// medi_header_info
function medi_header_info()
{
    new \Kirki\Section(
        'header_info_section_id',
        [
            'title'       => esc_html__('Header Info Section', 'medi'),
            'description' => esc_html__('My Section Description.', 'medi'),
            'panel'       => 'medi_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_phone',
            'label'    => esc_html__('Header Phone', 'medi'),
            'section'  => 'header_info_section_id',
            'default'  => esc_html__('+880 1234 56789', 'medi'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_email',
            'label'    => esc_html__('Header Email', 'medi'),
            'section'  => 'header_info_section_id',
            'default'  => esc_html__('support@yourmail.com', 'medi'),
            'priority' => 10,
        ]
    );
}
medi_header_info();

// medi_header_logo
function medi_header_logo()
{
    new \Kirki\Section(
        'logo_section_id',
        [
            'title'       => esc_html__('Logo Section', 'medi'),
            'description' => esc_html__('Logo Section Description.', 'medi'),
            'panel'       => 'medi_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'medi_header_logo',
            'label'       => esc_html__('Medi header logo', 'kirki'),
            'description' => esc_html__('The saved value will be the URL.', 'kirki'),
            'section'     => 'logo_section_id',
            'default'     => get_template_directory_uri() . '/assets/img/logo.png',
        ]
    );
}
medi_header_logo();
