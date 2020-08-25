<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Class BaseClothes
 */
class BaseClothes implements ClothesInterface
{
    /**
     * @return int
     */
    public function putOn(): int
    {
        return 1;
    }
}