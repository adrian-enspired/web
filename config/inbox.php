<?php

return [
    'route' => [
        'admin' => [
            'prefix' => 'admin.inbox',
            'middleware' => ['web', 'auth'],
            'name' => null
        ],
        'app' => [
            'prefix' => 'app.inbox',
            'middleware' => ['web', 'auth'],
            'name' => null
        ]
    ],
    'notifications' => [
        'via' => [
            'mail',
        ],
    ],
];
