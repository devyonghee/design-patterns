<?php
require_once 'singleton.php';

echo "싱글턴 패턴<br>";
echo "싱글턴 패턴은 해당 클래스의 인스턴스가 하나만 만들어지고, 어디서든지 그 인스턴스에 접근할 수 있도록 하기 위한 패턴입니다.<br>";


$test = singleton::getInstance();
$test2 = singleton::getInstance();