<?php

namespace App\Commands;

class MarcoCommand implements CommandInterface
{
    /**
     * @var CommandInterface[]
     */
    private $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {   
        echo "Marco Execute!" . PHP_EOL;
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        echo "Marco Undo!" . PHP_EOL;
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}