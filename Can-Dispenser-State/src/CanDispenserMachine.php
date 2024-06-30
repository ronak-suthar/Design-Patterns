<?php

namespace App;

class CanDispenserMachine
{
    /**
     * @var int
     */
    private $cans;

    /**
     * @var State
     */
    private $state;

    private $noCoinState;
    private $hasCoinState;
    private $soldState;
    private $soldOutState;
    private $winnerState;

    public function __construct(int $cans)
    {
        $this->cans = $cans;
        $this->noCoinState = new NoCoinState($this);
        $this->hasCoinState = new HasCoinState($this);
        $this->soldState = new SoldState($this);
        $this->soldOutState = new SoldOutState($this);
        $this->winnerState = new WinnerState($this);

        if ($this->cans > 0) {
            $this->state = $this->noCoinState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertCoin()
    {
        $this->state->insertCoin();
    }

    public function ejectCoin()
    {
        $this->state->ejectCoin();
    }

    public function pressButton()
    {
        $this->state->pressButton();
        $this->state->dispense();
    }

    public function releaseCan()
    {
        if ($this->cans > 0) {
            echo "Can Dispensed\n";
            $this->cans -= 1;
        } else {
            echo "Out of cans\n";
        }
    }

    public function hasCans(): bool
    {
        return $this->cans > 0;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getHasCoinState(): State
    {
        return $this->hasCoinState;
    }

    public function getNoCoinState(): State
    {
        return $this->noCoinState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }

    public function __toString()
    {
        return "Can Dispenser Machine: " . $this->state . "\n Cans count: " . $this->cans . "\n";
    }
}
