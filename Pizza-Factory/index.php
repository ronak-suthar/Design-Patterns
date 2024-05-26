<?php

require_once './vendor/autoload.php';

use App\PizzaStore\NyPizzaStore;


$nyPizzaStore = new NyPizzaStore;

$nyPizzaStore->orderPizza('cheeze');