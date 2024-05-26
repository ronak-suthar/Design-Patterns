<?php

namespace App\Commands;

use App\Devices\Light;

class TurnOffLightCommand implements CommandInterface
{   
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;    
    }

    public function execute()
    {
        $this->light->switchOff();
    }

    public function undo()
    {
        $this->light->switchOn();
    }
}