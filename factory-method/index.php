<?php
require_once 'NYPizzaStore.php';
require_once 'ChicagoPizzaStore.php';


echo "팩토리 메소드 패턴<br>";
echo "팩토리 메소드 패턴에서는 객체를 생성하기 위한 인터페이스를 정의하는데, 어떤 클래스의 인스턴스를 만들지는 서브클래스에서 결정하게 만듭니다. 팩토리 메소드 패턴을 이용하면 클래스의 인스턴스를 만드는 일을 서브클래스에게 맡기는 것이죠.<br><br>";

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo "Ethan ordered a ".$pizza->getName()."<br><br>";
$pizza = $chicagoStore->orderPizza('cheese');
echo "Joel ordered a ".$pizza->getName()."<br>";
