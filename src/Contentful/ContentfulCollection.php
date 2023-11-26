<?php

namespace App\Contentful;

use Contentful\Delivery\Client;
use Contentful\Delivery\Query;
use Illuminate\Support\Collection;

class ContentfulCollection
{
    public Client $client;

    public function __construct()
    {
        $this->client = new Client(
            env('CONTENTFUL_ACCESS_TOKEN'),
            env('CONTENTFUL_SPACE_ID')
        );
    }

    public function getPosts(): Collection
    {
        $query = (new Query)->setContentType('posts')
            ->orderBy('sys.createdAt', true);

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return [
                    'title' => $item->title,
                    'content' => $item->content,
                ];
            });
    }
}