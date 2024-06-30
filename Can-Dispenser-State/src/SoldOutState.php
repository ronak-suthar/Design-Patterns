<?php

namespace App;

class SoldOutState implements State
{
    private $machine;

    public function __construct(CanDispenserMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertCoin()
    {
        echo "You can't insert a coin, the machine is sold out\n";
    }

    public function ejectCoin()
    {
        echo "You can't eject, you haven't inserted a coin yet\n";
    }

    public function pressButton()
    {
        echo "You can't press the button, you haven't inserted a coin yet\n";
    }

    public function dispense()
    {
        echo "We are sold out, no cans to dispense\n";
    }

    public function __toString()
    {
        return "Sold Out State\n";
    }
}
