<?php

namespace App\Beverages;

class DecafBeverage extends AbstractBeverage
{
    public function getDescription(): string
    {
        return "Decaf Coffee";
    }

    public function cost(): float
    {
        switch ($this->getSize()) {
            case self::SIZE_TALL:
                $cost = 1.05;
                break;
            case self::SIZE_GRANDE:
                $cost = 0.75;
                break;
            case self::SIZE_VENTI:
                $cost = 0.55;
                break;
        }
        return $cost;
    }
}
