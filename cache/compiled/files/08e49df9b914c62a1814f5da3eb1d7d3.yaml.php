<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/cchang5/Sites/rb19/user/themes/quark/blueprints/modular/hero.yaml',
    'modified' => 1541489136,
    'data' => [
        'title' => 'Hero',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'buttons' => [
                            'type' => 'tab',
                            'title' => 'Hero',
                            'fields' => [
                                'header.hero_classes' => [
                                    'type' => 'text',
                                    'label' => 'Hero Classes',
                                    'markdown' => true,
                                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`text-light`, `text-dark`, `title-h1h2`, `parallax`, `overlay-dark-gradient`, `overlay-light-gradient`, `overlay-dark`, `overlay-light`, `hero-fullscreen`, `hero-large`, `hero-medium`, `hero-small`, `hero-tiny`<br />Please consult the [Quark documentation](https://github.com/getgrav/grav-theme-quark#hero-options) for more details.'
                                ],
                                'header.hero_image' => [
                                    'type' => 'filepicker',
                                    'label' => 'Hero Image',
                                    'preview_images' => true,
                                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                                ],
                                'header.hero_image_morning' => [
                                    'type' => 'filepicker',
                                    'label' => 'Hero Image Morning',
                                    'preview_images' => true,
                                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                                ],
                                'header.hero_image_afternoon' => [
                                    'type' => 'filepicker',
                                    'label' => 'Hero Image Afternoon',
                                    'preview_images' => true,
                                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                                ],
                                'header.hero_image_night' => [
                                    'type' => 'filepicker',
                                    'label' => 'Hero Image Night',
                                    'preview_images' => true,
                                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
