<?php

namespace App\Commands;

use App\Devices\Hottub;

class TurnOnHottubCommand implements CommandInterface
{
    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->jetsOn();
        $this->hottub->circulate();
        $this->hottub->setTemprature(30);
    }

    public function undo()
    {
        $this->hottub->jetsOff();
    }
}
