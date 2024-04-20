<?php
new \Kirki\Panel(
    'medi_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('My Options', 'medi'),
        'description' => esc_html__('My Panel Description.', 'medi'),
    ]
);

new \Kirki\Section(
    'section_id',
    [
        'title'       => esc_html__('My Section', 'medi'),
        'description' => esc_html__('My Section Description.', 'medi'),
        'panel'       => 'medi_panel_id',
        'priority'    => 160,
    ]
);

new \Kirki\Field\Text(
    [
        'settings' => 'text_setting',
        'label'    => esc_html__('Text Control', 'medi'),
        'section'  => 'section_id',
        'default'  => esc_html__('This is a default value', 'medi'),
        'priority' => 10,
    ]
);
