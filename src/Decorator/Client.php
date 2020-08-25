<?php

declare(strict_types = 1);

namespace Nefedov89\DesignPatterns\Decorator;

/**
 * Class Client
 *
 * @package Nefedov89\DesignPatterns\Decorator
 */
class Client
{
    /**
     * @return void
     */
    public static function test(): void
    {
        $baseClothes = new BaseClothes();

        // $totalScore = $baseClothes->putOn();

        echo "Put on t-shirt...".PHP_EOL;
        $withTShirtClothItem = new TShirtClothesDecorator($baseClothes);

        // $totalScore = $withTShirtClothItem->putOn();

        echo "Put on jacket...".PHP_EOL;
        $withJacketClothItem = new JacketClothesDecorator($withTShirtClothItem);

        // $totalScore = $withJacketClothItem->putOn();

        echo "Put on coat...".PHP_EOL;
        $withCoatClothItem = new CoatClothesDecorator($withJacketClothItem);

        $totalScore = $withCoatClothItem->putOn();

        echo "Total score is $totalScore".PHP_EOL;
    }
}