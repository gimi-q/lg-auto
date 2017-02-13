<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/gimi/Sites/grav-admin/user/plugins/adminstyles/blueprints.yaml',
    'modified' => 1486931266,
    'data' => [
        'name' => 'Admin Styles',
        'version' => '1.0.0',
        'description' => 'Adds multiple custom styles for the admin plugin\'s interface.',
        'icon' => 'asterisk',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.me',
            'url' => 'http://olevik.me'
        ],
        'homepage' => 'https://github.com/olevik/grav-plugin-adminstyles',
        'keywords' => 'admin, admin-plugin, style, styles',
        'bugs' => 'https://github.com/olevik/grav-plugin-adminstyles/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'preview' => [
                    'type' => 'toggle',
                    'label' => 'Theme Preview Page',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header' => [
                    'type' => 'section',
                    'title' => 'Theme',
                    'underline' => false,
                    'text' => 'Select a style for the admin interface by clicking your preferred appearence, and then click the "Save"-button.',
                    'fields' => [
                        'current' => [
                            'type' => 'radioimage',
                            'classes' => 'fancy',
                            'name' => 'current',
                            'style' => 'vertical',
                            'default' => 'grav_admin',
                            'options' => [
                                'grav_admin' => 'Default',
                                'metal' => 'Metal',
                                'light' => 'Light',
                                'starkcontrast' => 'Stark Contrast',
                                'tan' => 'Tan',
                                'grey' => 'Grey',
                                'gold' => 'Gold',
                                'navy_sunrise' => 'Navy Sunrise',
                                'arctic' => 'Arctic',
                                'amber' => 'Amber',
                                'antique' => 'Antique'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
