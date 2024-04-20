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
            'default'  => esc_html__('Header phone here', 'medi'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_email', 
            'label'    => esc_html__('Header Email', 'medi'),
            'section'  => 'header_info_section_id',
            'default'  => esc_html__('Header email here', 'medi'),
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

    new \Kirki\Field\Text(
        [
            'settings' => 'logo_text_setting', // Changed settings key
            'label'    => esc_html__('Text Control 1', 'medi'), // Changed label
            'section'  => 'logo_section_id',
            'default'  => esc_html__('This is a default value', 'medi'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'logo_text_setting_2', // Unique settings key
            'label'    => esc_html__('Text Control 2', 'medi'), // Changed label
            'section'  => 'logo_section_id',
            'default'  => esc_html__('This is a default value', 'medi'),
            'priority' => 20, // Adjusted priority
        ]
    );
}
medi_header_logo();
?>
