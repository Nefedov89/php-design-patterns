<?php

declare(strict_types = 1);

use Nefedov89\DesignPatterns\Decorator\BaseClothes;
use Nefedov89\DesignPatterns\Decorator\CoatClothesDecorator;
use Nefedov89\DesignPatterns\Decorator\JacketClothesDecorator;
use Nefedov89\DesignPatterns\Decorator\TShirtClothesDecorator;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorTest
 */
class DecoratorTest extends TestCase
{
    /**
     * @return void
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testMain(): void
    {
        $baseClothes = new BaseClothes();

        $this->assertEquals($baseClothes->putOn(), 1);

        $withTShirtClothItem = new TShirtClothesDecorator($baseClothes);

        $this->assertEquals($withTShirtClothItem->putOn(), 3);

        $withJacketClothItem = new JacketClothesDecorator($withTShirtClothItem);

        $this->assertEquals($withJacketClothItem->putOn(), 6);

        $withCoatClothItem = new CoatClothesDecorator($withJacketClothItem);

        $this->assertEquals($withCoatClothItem->putOn(), 10);
    }
}