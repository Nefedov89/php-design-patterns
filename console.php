<?php

declare(strict_types = 1);

use Nefedov89\DesignPatterns\Decorator\Client as DecoratorClient;

require __DIR__.'/vendor/autoload.php';

try {
    // Decorator.
    DecoratorClient::test();
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage().PHP_EOL;
}