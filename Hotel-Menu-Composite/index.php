<?php

require_once './vendor/autoload.php';

use App\Menu;
use App\MenuItem;


$breakFastMenu = new Menu("Breakfast", "Amazing morning breakfast");
$breakFastMenu->add(new MenuItem("Pancakes", "Fluffy pancakes served with butter and maple syrup.", true, 5.99));
$breakFastMenu->add(new MenuItem("Waffles", "Fluffy waffles served with butter and maple syrup.", true, 3.99));
$breakFastMenu->add(new MenuItem("Eggs", "Scrambled eggs with bacon and maple syrup.", false, 4.99));

$lunchMenu = new Menu("Lunch", "Amazing lunch");
$lunchMenu->add(new MenuItem("Hamburger", "Juicy beef patty with fries and a side of salad.", true, 6.99));
$lunchMenu->add(new MenuItem("Sandwich", "Grilled chicken breast with fries and a side of salad.", true, 6.99));
$lunchMenu->add(new MenuItem("Salad", "Crispy lettuce, tomatoes, and cheese with a side of dressing.", true, 4.99));

$dinnerMenu = new Menu("Dinner", "Amazing dinner");
$dinnerMenu->add(new MenuItem("Steak", "Juicy steak with fries and a side of salad.", true, 8.99));
$dinnerMenu->add(new MenuItem("Fish", "Crispy fish with fries and a side of salad.", true, 7.99));
$dinnerMenu->add(new MenuItem("Salad", "Crispy lettuce, tomatoes, and cheese with a side of dressing.", true, 4.99));

$dinnerDessertMenu = new Menu("Dessert", "Amazing dessert");
$dinnerDessertMenu->add(new MenuItem("Ice cream", "Vanilla ice cream with a scoop of chocolate sauce.", true, 3.99));
$dinnerDessertMenu->add(new MenuItem("Cupcake", "Vanilla cupcake with a scoop of chocolate sauce.", true, 1.99));
$dinnerDessertMenu->add(new MenuItem("Cupcake", "Chocolate cupcake with a scoop of vanilla sauce.", true, 1.99));

$dinnerMenu->add($dinnerDessertMenu);

$allMenus = new Menu("Hotel De Grande", "Menu");

$allMenus->add($breakFastMenu);
$allMenus->add($lunchMenu);
$allMenus->add($dinnerMenu);

$allMenus->print();
