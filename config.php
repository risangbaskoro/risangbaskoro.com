<?php

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Risang Baskoro',
    'description' => 'Personal Blog.',
    'collections' => [
        'notes' => [
            'path' => 'notes/{-filename}',
            'sort' => '-date',
            'extends' => '_layouts.notes',
            'section' => 'content',
        ],
        'kkn' => [
            'path' => 'kkn/{-filename}',
            'sort' => '-date',
            'extends' => '_layouts.kkn',
            'section' => 'content',
        ],
    ],
];
