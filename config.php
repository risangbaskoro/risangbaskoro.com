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
                return ContentfulCollection::make()->getPosts();
            },
            'excerpt' => function ($page, $limit = 100, $end = '...'): string {
                return substr(strip_tags($page), 0, $limit) . $end;
            },
            'metaDescription' => function ($page): string {
                $doc = new DOMDocument();

                $doc->loadHTML($page);

                $paragraphs = $doc->getElementsByTagName('p');
                $firstParagraph = $paragraphs->item(0);

                if ($firstParagraph) {
                    $metaDescription = $firstParagraph->textContent;
                } else {
                    $bodyContent = $doc->getElementsByTagName('body')->item(0);
                    $metaDescription = $bodyContent ? $bodyContent->textContent : '';
                }

                $metaDescription = trim($metaDescription);

                return substr($metaDescription, 0, 160);
            },
        ]
    ],

    // Navigation
    'navigations' => [
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
