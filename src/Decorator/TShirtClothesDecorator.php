<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Class TShirtClothesDecorator
 *
 * @package Nefedov89\DesignPatterns\Decorator
 */
class TShirtClothesDecorator extends BaseClothesDecorator
{
    /**
     * @return int
     */
    public function putOn(): int
    {
        return parent::putOn() + 2;
    }
}