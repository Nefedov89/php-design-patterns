<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Class BaseClothesDecorator
 *
 * @package Nefedov89\DesignPatterns\Decorator
 */
class BaseClothesDecorator implements ClothesInterface
{
    /**
     * @var \Nefedov89\DesignPatterns\Decorator\ClothesInterface
     */
    private $clothItem;

    /**
     * BaseClothesDecorator constructor.
     *
     * @param \Nefedov89\DesignPatterns\Decorator\ClothesInterface $clothItem
     */
    public function __construct(ClothesInterface $clothItem)
    {
        $this->clothItem = $clothItem;
    }

    /**
     * @return int
     */
    public function putOn(): int
    {
        return $this->clothItem->putOn();
    }
}