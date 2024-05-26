<?php

namespace App\PizzaStore;

use App\Pizza\AbstractPizza;
use App\Pizza\CheezePizza;
use App\Pizza\ClamPizza;
use App\Pizza\PepperoniPizza;

class ChicagoPizzaStore extends AbstractPizzaStore
{
    public function getPizza(string $name): AbstractPizza
    {
        $result = null;
        switch ($name) {
            case 'cheeze':
                $result = new CheezePizza("Chicago Cheeze Pizza");
                break;
            case 'clam':
                $result = new ClamPizza("Chicago Calm Pizza");
                break;
            case 'pepperoni':
                $result = new PepperoniPizza("Chicago Pepperoni Pizza");
                break;
            default:
                # code...
                break;
        }

        return $result;
    }
}
