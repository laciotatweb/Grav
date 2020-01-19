<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav/user/accounts/ccs.yaml',
    'modified' => 1579322564,
    'data' => [
        'state' => 'enabled',
        'email' => 'chris.coutures@gmail.com',
        'fullname' => 'Ccs',
        'title' => 'Administrator',
        'access' => [
            'admin' => [
                'super' => 'true',
                'login' => 'true'
            ],
            'site' => [
                'login' => 'true'
            ]
        ],
        'hashed_password' => '$2y$10$MiOURJav3JT1cvyGlNJ7s.CALSeCkb5QMqwJ4TN12GeVS9HBernvG',
        'language' => 'en',
        'twofa_enabled' => false,
        'twofa_secret' => 'XNTX3AC5NENRY4IBWKEX6DN6KMHRBXBQ'
    ]
];
