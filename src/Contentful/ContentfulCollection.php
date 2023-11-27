<?php

namespace App\Contentful;

use Contentful\Core\File\ImageFile;
use Contentful\Delivery\Client;
use Contentful\Delivery\Query;
use Contentful\Delivery\Resource\Asset;
use Illuminate\Support\Collection;
use League\CommonMark\Parser\MarkdownParserInterface;
use TightenCo\Jigsaw\Parsers\MarkdownParserContract;

class ContentfulCollection
{
    public Client $client;

    public MarkdownParserContract|MarkdownParserInterface $parser;

    public function __construct()
    {
        $this->client = new Client(
            env('CONTENTFUL_ACCESS_TOKEN'),
            env('CONTENTFUL_SPACE_ID')
        );

        $this->parser = app(MarkdownParserContract::class);
    }

    public static function make(): self
    {
        return new static();
    }

    public function getPosts(): Collection
    {
        $query = (new Query)->setContentType('posts')
            ->orderBy('sys.createdAt', true);

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                $sys = (object) $item->getSystemProperties()->jsonSerialize();

                return [
                    'title' => $item->title,
                    'content' => $item->content,
                    'html' => $this->parser->parse($item->content),
                    'featureImage' => $this->imageFileToArray($item->featureImage),
                    'isFeatured' => $item->isFeatured,
                    'createdAt' => $sys->createdAt,
                    'updatedAt' => $sys->updatedAt,
                ];
            });
    }

    protected function imageFileToArray(?Asset $asset): ?array
    {
        if (!$asset) {
            return null;
        }

        /** @var ImageFile $imageFile */
        $imageFile = $asset->getFile();

        return [
            'title' => $asset->getTitle(),
            'description' => $asset->getDescription(),
            'fileName' => $imageFile->getFileName(),
            'url' => $imageFile->getUrl(),
            'width' => $imageFile->getWidth(),
            'height' => $imageFile->getHeight(),
        ];
    }
}