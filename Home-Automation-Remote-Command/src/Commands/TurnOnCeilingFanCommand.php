<?php

namespace App\Commands;

use App\Devices\CeilingFan;

class TurnOnCeilingFanCommand implements CommandInterface
{
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->ceilingFan->start();
    }

    public function undo()
    {
        $this->ceilingFan->stop();
    }
}

