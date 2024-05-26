<?php

namespace App\Commands;

use App\Devices\CeilingFan;

class TurnOffCeilingFanCommand implements CommandInterface
{
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->ceilingFan->stop();
    }

    public function undo()
    {
        $this->ceilingFan->start();
    }
}

