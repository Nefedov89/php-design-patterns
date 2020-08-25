<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Class CoatClothesDecorator
 *
 * @package Nefedov89\DesignPatterns\Decorator
 */
class CoatClothesDecorator extends BaseClothesDecorator
{
    /**
     * @return int
     */
    public function putOn(): int
    {
        return parent::putOn() + 4;
    }
}