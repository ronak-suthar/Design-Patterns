<?php

namespace App;

/**
 * Interface State
 *
 * This interface defines methods for different states of a can dispenser.
 */
interface State
{
    /**
     * Inserts a coin into the dispenser.
     *
     * @return void
     */
    public function insertCoin();

    /**
     * Ejects a coin from the dispenser.
     *
     * @return void
     */
    public function ejectCoin();

    /**
     * Presses the button to dispense a can.
     *
     * @return void
     */
    public function pressButton();

    /**
     * Dispenses a can from the dispenser.
     *
     * @return void
     */
    public function dispense();
}
