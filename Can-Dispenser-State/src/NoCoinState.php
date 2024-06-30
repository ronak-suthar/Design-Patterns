<?php

namespace App;

class NoCoinState implements State
{
    private $machine;

    public function __construct(CanDispenserMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertCoin()
    {
        $this->machine->setState($this->machine->getHasCoinState());
    }

    public function ejectCoin()
    {
        echo "You haven't inserted a coin\n";
    }

    public function pressButton()
    {
        echo "You haven't inserted a coin\n";
    }

    public function dispense()
    {
        echo "You haven't inserted a coin\n";
    }

    public function __toString()
    {
        return "No Coin State\n";
    }

}