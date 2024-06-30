<?php

namespace App;

class SoldState implements State
{

    private $machine;

    public function __construct(CanDispenserMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertCoin()
    {
        echo "Please wait, we're already giving you a can\n";
    }

    public function ejectCoin()
    {
        echo "Sorry, you already pressed the button\n";
    }

    public function pressButton()
    {
        echo "Please wait, we're already giving you a can\n";
    }

    public function dispense()
    {
        $this->machine->releaseCan();

        if (!$this->machine->hasCans()) {
            $this->machine->setState($this->machine->getSoldOutState());
        } else {
            $this->machine->setState($this->machine->getNoCoinState());
        }
    }
}
