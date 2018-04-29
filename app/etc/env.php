<?php
return [
    'backend' => [
        'frontName' => 'abacus'
    ],
    'crypt' => [
        'key' => 'e6ab054b00db180178e40b2a530e635c'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'megento2',
                'username' => 'root',
                'password' => 'redhat',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'full_page' => 0,
        'translate' => 0,
        'config_webservice' => 0
    ],
    'install' => [
        'date' => 'Fri, 27 Apr 2018 09:04:52 +0000'
    ]
];
