<?php

require_once './vendor/autoload.php';

use App\CanDispenserMachine;

$machine = new CanDispenserMachine(5);

$machine->insertCoin();
$machine->pressButton();
echo $machine;
echo "-----------------------\n";
$machine->insertCoin();
$machine->pressButton();
echo $machine;
echo "-----------------------\n";

$machine->insertCoin();
$machine->pressButton();
echo $machine;
echo "-----------------------\n";

$machine->insertCoin();
$machine->pressButton();
echo $machine;
echo "-----------------------\n";

$machine->insertCoin();
$machine->pressButton();
echo $machine;
echo "-----------------------\n";

$machine->insertCoin();
$machine->pressButton();
echo $machine;
echo "-----------------------\n";

