<?php

namespace App\Beverages;

class HouseBlendBeverage extends AbstractBeverage
{
    public function getDescription(): string
    {
        return "House Blend Coffee";
    }

    public function cost(): float
    {
        switch ($this->getSize()) {
            case self::SIZE_TALL:
                $cost = 0.89;
                break;
            case self::SIZE_GRANDE:
                $cost = 0.69;
                break;
            case self::SIZE_VENTI:
                $cost = 0.45;
                break;
        }
        return $cost;
    }
}
