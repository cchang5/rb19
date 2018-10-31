<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/cchang5/Sites/rb19/system/blueprints/user/account.yaml',
    'modified' => 1539031584,
    'data' => [
        'title' => 'Account',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'info' => [
                    'type' => 'userinfo',
                    'size' => 'large'
                ],
                'avatar' => [
                    'type' => 'file',
                    'size' => 'large',
                    'destination' => 'user://accounts/avatars',
                    'multiple' => false,
                    'random_name' => true
                ],
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ACCOUNT',
                    'underline' => true
                ],
                'username' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.USERNAME',
                    'disabled' => true,
                    'readonly' => true
                ],
                'email' => [
                    'type' => 'email',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.EMAIL',
                    'validate' => [
                        'type' => 'email',
                        'message' => 'PLUGIN_ADMIN.EMAIL_VALIDATION_MESSAGE',
                        'required' => true
                    ]
                ],
                'password' => [
                    'type' => 'password',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.PASSWORD',
                    'autocomplete' => 'new-password',
                    'validate' => [
                        'required' => false,
                        'message' => 'PLUGIN_ADMIN.PASSWORD_VALIDATION_MESSAGE',
                        'config-pattern@' => 'system.pwd_regex'
                    ]
                ],
                'fullname' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.FULL_NAME',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN.TITLE'
                ],
                'language' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.LANGUAGE',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Plugin\\Admin\\Admin::adminLanguages',
                    'default' => 'en',
                    'help' => 'PLUGIN_ADMIN.LANGUAGE_HELP'
                ],
                'twofa_check' => [
                    'type' => 'conditional',
                    'condition' => 'config.plugins.admin.twofa_enabled',
                    'fields' => [
                        'twofa' => [
                            'title' => 'PLUGIN_ADMIN.2FA_TITLE',
                            'type' => 'section',
                            'underline' => true
                        ],
                        'twofa_enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.2FA_ENABLED',
                            'classes' => 'twofa-toggle',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twofa_secret' => [
                            'type' => '2fa_secret',
                            'outerclasses' => 'twofa-secret',
                            'markdown' => true,
                            'label' => 'PLUGIN_ADMIN.2FA_SECRET',
                            'sublabel' => 'PLUGIN_ADMIN.2FA_SECRET_HELP'
                        ]
                    ]
                ],
                'security' => [
                    'title' => 'PLUGIN_ADMIN.ACCESS_LEVELS',
                    'type' => 'section',
                    'security' => 'admin.super',
                    'underline' => true,
                    'fields' => [
                        'groups' => [
                            'type' => 'select',
                            'multiple' => true,
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.GROUPS',
                            'data-options@' => '\\Grav\\Common\\User\\Group::groupNames',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.GROUPS_HELP',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'access' => [
                            'type' => 'permissions',
                            'label' => 'PLUGIN_ADMIN.PERMISSIONS',
                            'ignore_empty' => true,
                            'validate' => [
                                'type' => 'array'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
