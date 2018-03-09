<?php
require_once 'Tea.php';
require_once 'Coffee.php';
require_once 'CoffeeWithHook.php';

echo "템플릿 메소드 패턴<br><br>";


$myTea = new Tea();
$myCoffee = new Coffee();

$myTea->prepareRecipe();
echo "<br>";
$myCoffee->prepareRecipe();

echo "<br>";
$myCoffee = new CoffeeWithHook();
$myCoffee->prepareRecipe();

