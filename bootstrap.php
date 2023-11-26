<?php

use Symfony\Component\Dotenv\Dotenv;
use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

if (file_exists(__DIR__.'/.env')) {
    // Load env vars from .env if that file exists
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__ . '/.env');
}

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 */
