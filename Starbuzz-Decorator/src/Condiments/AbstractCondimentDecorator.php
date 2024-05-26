<?php

namespace App\Condiments;

use App\Beverages\AbstractBeverage;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * @var AbstractBeverage
     */
    protected $beverage;

    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
        $this->size = $beverage->getSize();
    }
}
