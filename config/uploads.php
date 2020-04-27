<?php

return [
    'default' => [
        'folder_name' => 'files',
        'public_relative' => 'app/files/',
        'path' => 'files/',
        'full_path' => storage_path('app/files'),
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