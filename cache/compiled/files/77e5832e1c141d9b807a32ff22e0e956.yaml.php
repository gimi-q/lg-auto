<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/gimi/Sites/grav-admin/user/config/site.yaml',
    'modified' => 1486905301,
    'data' => [
        'title' => 'MVF - Leadgen',
        'default_lang' => 'en',
        'author' => [
            'name' => 'MVF - Admin',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
