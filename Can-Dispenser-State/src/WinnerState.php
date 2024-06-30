<?php

namespace App;

class WinnerState implements State
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
        echo "Sorry, you already pressed the submit button\n";
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
            echo "YOU'RE A WINNER! You got a extra can\n";
            $this->machine->releaseCan();
            $this->machine->setState($this->machine->getNoCoinState());
        }
    }

    public function __toString()
    {
        return "Winner State\n";
    }
}
