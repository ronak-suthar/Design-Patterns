<?php

namespace App;

use App\FlyBehaviour\NoFly;
use App\QuackBehaviour\Squeak;

class RubberDuck extends AbstractDuck
{

    public function __construct()
    {
        $this->flyBehaviour = new NoFly;
        $this->quackBehaviour = new Squeak;
    }

    public function display()
    {
        echo "Rubber Duck\n";
    }
}
