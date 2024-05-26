<?php

namespace App;

use App\AbstractDuck;
use App\FlyBehaviour\NoFly;
use App\QuackBehaviour\Quack;

class RedHeadDuck extends AbstractDuck
{   

    public function __construct()
    {
        $this->flyBehaviour = new NoFly;
        $this->quackBehaviour = new Quack;    
    }

    public function display()
    {
        echo "Red head Duck\n";
    }
}
