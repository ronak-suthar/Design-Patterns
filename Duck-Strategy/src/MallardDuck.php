<?php

namespace App;

use App\AbstractDuck;
use App\FlyBehaviour\FlyWithWings;
use App\QuackBehaviour\Quack;

class MallardDuck extends AbstractDuck
{   
    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings;
        $this->quackBehaviour = new Quack;    
    }

    public function display()
    {
        echo "Mallard Duck\n";
    }
}
