<?php

namespace App;

abstract class AbstractDuck
{

    /**
     * @var \App\FlyBehaviourInterface
     */
    protected $flyBehaviour;

    /**
     * @var \App\QuackBehaviourInterface
     */
    protected $quackBehaviour;


    abstract public function __construct();

    abstract public function display();

    public function swim()
    {
        echo "Swim\n";
    }

    public function performFly()
    {
        $this->flyBehaviour->fly();
    }

    public function performQuack()
    {
        $this->quackBehaviour->quack();
    }
}
