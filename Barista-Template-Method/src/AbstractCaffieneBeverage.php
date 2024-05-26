<?php

namespace App;

abstract class AbstractCaffieneBeverage
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
        $this->pourInCup();
    }

    private function boilWater()
    {
        echo "Boiling water\n";
    }

    private function pourInCup()
    {
        echo "Pouring into cup\n";
    }

    public function customerWantsCondiments(): bool
    {

        return true;
    }

    abstract public function brew();

    abstract public function addCondiments();
}
