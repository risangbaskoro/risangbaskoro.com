<?php

use App\Contentful\ContentfulCollection;

return [
    // Main Site Config
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'title' => 'Risang Baskoro',
    'siteName' => 'Risang Baskoro',
    'description' => 'Personal Site',

    // Collections
    'collections' => [
        'posts' => [
            'sort' => '-publishDate',
            'extends' => '_layouts.post',
            'path' => 'posts/{-title}',
            'items' => function ($config) {
                return (new ContentfulCollection)->getPosts();
            },
        ]
    ],

    // Navigation
    'navigations' => [
        [
            'title' => 'Home',
            'link' => '/'
        ],
        [
            'title' => 'Posts',
            'link' => '/posts'
        ],
    ],

    // Contentful
    'contentful' => [
        'space_id' => env('CONTENTFUL_SPACE_ID'),
        'access_token' => env('CONTENTFUL_ACCESS_TOKEN'),
    ],
];
