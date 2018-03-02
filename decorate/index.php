<?php
require_once 'Beverage.php';
require_once 'Espresso.php';
require_once 'HouseBlend.php';
require_once 'Mocha.php';
require_once 'Whip.php';

echo "데코레이터 패턴<br>";
echo "데코레이터 패턴에서는 객체에 추가적인 요건을 동적으로 첨가한다. 데코레이터는 서브클래스를 만드는 것을 통해서 기능을 유연하게 확장할 수 있는 방법을 제공한다.<br><br>";



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

