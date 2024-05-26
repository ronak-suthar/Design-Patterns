<?php

namespace App\Condiments;

class MochaCondimentDecorator extends AbstractCondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost(): float
    {
        switch ($this->beverage->getSize()) {
            case self::SIZE_TALL:
                $cost = 0.20;
                break;
            case self::SIZE_GRANDE:
                $cost = 0.10;
                break;
            case self::SIZE_VENTI:
                $cost = 0.05;
                break;
        }
        return $this->beverage->cost() + $cost;
    }
}