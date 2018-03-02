<?php
require_once 'NYPizzaStore.php';

echo "추상 팩토리 패턴<br><br>";

$nyStore = new NYPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo "Ethan ordered a ".$pizza->getName()."<br>";
echo $pizza->toString()."<br><br>";
