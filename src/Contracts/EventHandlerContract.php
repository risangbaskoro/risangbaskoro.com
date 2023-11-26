<?php

namespace App\Contracts;

use TightenCo\Jigsaw\Jigsaw;

interface EventHandlerContract
{
    public function handle(Jigsaw $jigsaw): void;
}