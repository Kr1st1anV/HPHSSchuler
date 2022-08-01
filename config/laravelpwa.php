<?php

return [
    'name' => 'HPHS Schuler App',
    'manifest' => [
        'name' => env('APP_NAME', 'HPHS Schuler PWA'),
        'short_name' => 'HPHS Schuler',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#ffffff',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            /*
            '72x72' => [
                'path' => '/images/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/icon-128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any'
            ],*/
            '72x72' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/hphs-schuler.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-hphs-schuler.png',
            '750x1334' => '/images/icons/splash-hphs-schuler.png',
            '828x1792' => '/images/icons/splash-hphs-schuler.png',
            '1125x2436' => '/images/icons/splash-hphs-schuler.png',
            '1242x2208' => '/images/icons/splash-hphs-schuler.png',
            '1242x2688' => '/images/icons/splash-hphs-schuler.png',
            '1536x2048' => '/images/icons/splash-hphs-schuler.png',
            '1668x2224' => '/images/icons/splash-hphs-schuler.png',
            '1668x2388' => '/images/icons/splash-hphs-schuler.png',
            '2048x2732' => '/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/schuler.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
