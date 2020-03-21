<?php

return [
    'default' => [
        'folder_name' => 'product',
        'public_relative' => 'app/product/',
        'path' => 'files/product',
        'full_path' => storage_path('app/product'),
    ],

    'settings' => [
        'folder_name' => 'settings',
        'public_relative' => 'app/settings/',
        'path' => 'files/settings',
        'full_path' => storage_path('app/settings'),
        'thumb' => [
            'main_logo' => [
                'width' => 200,
                'height' => 50
            ]
        ]
    ],
    'issues' => [
        'folder_name' => 'issues',
        'public_relative' => 'issues/',
        'path' => 'files/issues',
        'full_path' => storage_path('app/issues'),
    ],
];