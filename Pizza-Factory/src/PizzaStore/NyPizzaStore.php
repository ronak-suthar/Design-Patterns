<?php

namespace App\PizzaStore;

use App\Pizza\AbstractPizza;
use App\Pizza\CheezePizza;
use App\Pizza\ClamPizza;
use App\Pizza\PepperoniPizza;

class NyPizzaStore extends AbstractPizzaStore
{
    public function getPizza(string $name): AbstractPizza
    {
        $result = null;
        switch ($name) {
            case 'cheeze':
                $result = new CheezePizza("Ny Cheeze Pizza");
                break;
            case 'clam':
                $result = new ClamPizza("Ny Calm Pizza");
                break;
            case 'pepperoni':
                $result = new PepperoniPizza("Ny Pepperoni Pizza");
                break;
            default:
                # code...
                break;
        }

        return $result;
    }
}
