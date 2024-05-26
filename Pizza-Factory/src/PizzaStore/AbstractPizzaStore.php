<?php

namespace App\PizzaStore;

use App\Pizza\AbstractPizza;

abstract class AbstractPizzaStore
{
    public function orderPizza(string $name)
    {
        $pizza = $this->getPizza($name);

        $pizza->bake();

        $pizza->cut();

        $pizza->box();

        echo "Your " . $pizza->getName() . " is ready !\n";
    }

    abstract public function getPizza(string $name): AbstractPizza;
}
