<?php
require_once 'NYPizzaStore.php';

echo "추상 팩토리 패턴<br>";
echo "추상 팩토리 패턴에서는 인터페이스를 이용하여 서로 연관된, 또는 의존하는 객체를 구상 클래스를 지정하지 않고도 생성할 수 있습니다.<br>";

$nyStore = new NYPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo "Ethan ordered a ".$pizza->getName()."<br>";
echo $pizza->toString()."<br><br>";
