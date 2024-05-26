<?php

namespace App;

use App\Commands\CommandInterface;
use App\Commands\DoNothingCommand;

class RemoteControlInvoker
{   
    /**
     * @var \App\Commands\CommandInterface[]
     */
    private $onCommands = [];

    /**
     * @var \App\Commands\CommandInterface[]
     */
    private $offCommands = [];

   /**
    * @var \App\Commands\CommandInterface
    */
    private $undoCommand;

    public function setCommand(int $slot, CommandInterface $onCommand, CommandInterface $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
        $this->undoCommand = new DoNothingCommand();
    }

    public function onButtonWasPushed(int $slot)
    {   
        $command = $this->onCommands[$slot] ?? new DoNothingCommand();
        $command->execute();
        $this->undoCommand = $command;
    }

    public function offButtonWasPushed(int $slot)
    {
        $command = $this->offCommands[$slot] ?? new DoNothingCommand();
        $command->execute();
        $this->undoCommand = $command;
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }
}