<?php

namespace App\Beverages;

class DarkRoastBeverage extends AbstractBeverage
{

    public function getDescription(): string
    {
        return "Dark Roast Coffee";
    }

    public function cost(): float
    {
        switch ($this->size) {
            case self::SIZE_TALL:
                $cost = 0.99;
                break;
            case self::SIZE_GRANDE:
                $cost = 0.66;
                break;
            case self::SIZE_VENTI:
                $cost = 0.33;
                break;
        }
        return $cost;
    }
}
