<?php
namespace App\Condiments;

class SoyCondimentDecorator extends AbstractCondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost(): float
    {
        switch ($this->beverage->getSize()) {
            case self::SIZE_TALL:
                $cost = 0.15;
                break;
            case self::SIZE_GRANDE:
                $cost = 0.075;
                break;
            case self::SIZE_VENTI:
                $cost = 0.030;
                break;
        }
        return $this->beverage->cost() + $cost;
    }
}