<?php
require_once 'Beverage.php';
require_once 'Espresso.php';
require_once 'HouseBlend.php';
require_once 'Mocha.php';
require_once 'Whip.php';

echo "데코레이터 패턴<br><br>";



$beverage = new Espresso();
echo $beverage->getDescription() . '...' . $beverage->cost()."<br>";

$beverage1 = new Espresso();
$beverage1 = new Mocha($beverage1);
$beverage1 = new Whip($beverage1);
$beverage1 = new Whip($beverage1);
echo $beverage1->getDescription() . '...' . $beverage1->cost()."<br>";


$beverage2 = new HouseBlend();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . '...' . $beverage2->cost()."<br>";

