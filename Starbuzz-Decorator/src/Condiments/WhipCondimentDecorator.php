<?php

namespace App\Condiments;

class WhipCondimentDecorator extends AbstractCondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost(): float
    {
        switch ($this->beverage->getSize()) {
            case self::SIZE_TALL:
                $cost = 0.10;
                break;
            case self::SIZE_GRANDE:
                $cost = 0.05;
                break;
            case self::SIZE_VENTI:
                $cost = 0.02;
                break;
        }
        return $this->beverage->cost() + $cost;
    }
}
