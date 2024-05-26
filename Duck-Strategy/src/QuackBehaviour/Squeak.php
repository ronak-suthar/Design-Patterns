<?php

namespace App\QuackBehaviour;

class Squeak implements QuackBehaviourInterface
{
    public function quack(): void
    {
        echo "Quack Quack Sqeek\n";
    }
}
