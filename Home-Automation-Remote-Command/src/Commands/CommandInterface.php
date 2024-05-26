<?php

namespace App\Commands;

interface CommandInterface
{
    public function execute();

    public function undo();
}