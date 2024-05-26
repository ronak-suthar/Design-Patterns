<?php

namespace App\Pizza;

class AbstractPizza
{

    protected $toppings;

    protected $name;

    protected $dough;

    protected $sauce;

    public function bake()
    {
        echo "Pizza got baked.";
    }

    public function cut()
    {
        echo "Pizaa got cut";
    }

    public function box()
    {
        echo "Pizza got boxed";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
