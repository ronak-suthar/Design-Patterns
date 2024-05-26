<?php

namespace App\Commands;

use App\Devices\Hottub;

class TurnOffHottubCommand implements CommandInterface
{
    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->jetsOff();
    }

    public function undo()
    {
        $this->hottub->jetsOn();
    }
}
