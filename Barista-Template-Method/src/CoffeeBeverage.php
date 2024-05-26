<?php

use App\AbstractCaffieneBeverage;

class CoffeeBeverage extends AbstractCaffieneBeverage
{

    public function brew()
    {
        echo "Dripping coffee through filter\n";
    }

    public function addCondiments()
    {
        echo "Adding Sugar and Milk\n";
    }
}