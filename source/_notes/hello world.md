---
title: Hello World
---

# Hello

This is an example notes.

We can use _italic_ or **bold** text.

We can also use [links](https://github.com/risangbaskoro).

## Images

We can also use images:

![](https://github.com/risangbaskoro.png?size=100)

## Code blocks

And provide some code blocks:

```php
<?php

namespace App\Listeners;
 
use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');
 
        collect($jigsaw->getOutputPaths())->each(function ($path) use ($baseUrl, $sitemap) {
            if (! $this->isAsset($path)) {
                $sitemap->addItem($baseUrl . $path, time(), Sitemap::DAILY);
            }
        });
 
        $sitemap->write();
    }
 
    public function isAsset($path)
    {
        return starts_with($path, '/assets');
    }
}
```