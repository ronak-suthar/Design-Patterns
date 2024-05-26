<?php

namespace App\Commands;

use App\Devices\Light;

class TurnOnLightCommand implements CommandInterface
{   
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;    
    }

    public function execute()
    {
        $this->light->switchOn();
    }

    public function undo()
    {
        $this->light->switchOff();
    }
}