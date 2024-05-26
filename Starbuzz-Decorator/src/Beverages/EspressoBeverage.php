<?php

namespace App\Beverages;

class EspressoBeverage extends AbstractBeverage
{
    public function getDescription(): string
    {
        return "Espresso Coffee";
    }

    public function cost(): float
    {
        switch ($this->getSize()) {
            case self::SIZE_TALL:
                $cost = 1.99;
                break;
            case self::SIZE_GRANDE:
                $cost = 1.01;
                break;
            case self::SIZE_VENTI:
                $cost = 0.51;
                break;
        }
        return $cost;
    }
}
