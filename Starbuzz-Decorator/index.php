<?php

use App\Beverages\EspressoBeverage;
use App\Beverages\HouseBlendBeverage;
use App\Condiments\MochaCondimentDecorator;
use App\Condiments\SoyCondimentDecorator;
use App\Condiments\SteamedMilkCondimentDecorator;
use App\Condiments\WhipCondimentDecorator;

require_once './vendor/autoload.php';

$espresso = new EspressoBeverage();

$espresso = new MochaCondimentDecorator($espresso);

$espresso = new SteamedMilkCondimentDecorator($espresso);

echo $espresso->getDescription();
echo "\n--------------------\n";
echo $espresso->cost();
echo "\n--------------------\n";


$houseBlend = new HouseBlendBeverage();

$houseBlend->setSize(HouseBlendBeverage::SIZE_VENTI);

$houseBlend = new MochaCondimentDecorator($houseBlend);

$houseBlend = new MochaCondimentDecorator($houseBlend);

$houseBlend = new SoyCondimentDecorator($houseBlend);

$houseBlend = new WhipCondimentDecorator($houseBlend);

echo $houseBlend->getDescription();
echo "\n--------------------\n";
echo $houseBlend->cost();
echo "\n--------------------\n";
