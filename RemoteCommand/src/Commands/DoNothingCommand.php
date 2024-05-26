<?php

namespace App\Commands;

class DoNothingCommand implements CommandInterface
{
    public function execute()
    {
        echo "Doing nothing" . PHP_EOL;
    }

    public function undo()
    {
        echo "Undoing nothing" . PHP_EOL;
    }
}