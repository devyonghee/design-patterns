<?php
require_once 'NYPizzaStore.php';
require_once 'ChicagoPizzaStore.php';


echo "팩토리 메소드 패턴<br><br>";

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo "Ethan ordered a ".$pizza->getName()."<br><br>";
$pizza = $chicagoStore->orderPizza('cheese');
echo "Joel ordered a ".$pizza->getName()."<br>";
