<?php

require_once './vendor/autoload.php';

use App\Duck;
use App\MallardDuck;
use App\RedHeadDuck;
use App\RubberDuck;

/**
 * @var \App\AbstractDuck[]
 */
$ducks = [new MallardDuck, new RedHeadDuck,new RubberDuck];

foreach ($ducks as $duck) {
    $duck->display();

    $duck->swim();

    $duck->performFly();

    $duck->performQuack();

    echo "--------\n";
}
