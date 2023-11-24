<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Risang Baskoro',
    'description' => 'Personal Blog.',
    'collections' => [
        'notes' => [
            'path' => 'notes/{-filename}',
            'sort' => '-date',
        ],
    ],
];
