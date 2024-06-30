<?php

namespace App;

class HasCoinState implements State
{
    private $machine;

    public function __construct(CanDispenserMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertCoin()
    {
        echo "You can't insert another coin\n";
    }

    public function ejectCoin()
    {
        echo "Coin ejected\n";
        $this->machine->setState($this->machine->getNoCoinState());
    }

    public function pressButton()
    {
        echo "Processing you request...\n";

        $luckyWinner = rand(0, 100);
        if ($luckyWinner == 7) {
            $this->machine->setState($this->machine->getWinnerState());
        } else {
            $this->machine->setState($this->machine->getSoldState());
        }
    }

    public function dispense()
    {
        echo "Kindly press the button\n";
    }

    public function __toString()
    {
        return "Has Coin State\n";
    }
}
