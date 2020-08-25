<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Class JacketClothesDecorator
 *
 * @package Nefedov89\DesignPatterns\Decorator
 */
class JacketClothesDecorator extends BaseClothesDecorator
{
    /**
     * @return int
     */
    public function putOn(): int
    {
        return parent::putOn() + 3;
    }
}