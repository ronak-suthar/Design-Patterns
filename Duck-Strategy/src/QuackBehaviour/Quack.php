<?php

namespace App\QuackBehaviour;

class Quack implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "Quacked\n";
    }
}