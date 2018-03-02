<?php
require_once 'singleton.php';

echo "싱글턴 패턴<br><br>";


$test = singleton::getInstance();
$test2 = singleton::getInstance();