<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Interface ClothesInterface
 */
interface ClothesInterface
{
    /**
     * @return int
     */
    public function putOn(): int;
}