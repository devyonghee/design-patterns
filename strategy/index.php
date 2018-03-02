<?php
require_once 'MallardDuck.php';
require_once 'Duck.php';

echo '스트래티지 패턴<br><br>';

$mallardDuck = new mallardDuck();
$mallardDuck->quackPerform();
$mallardDuck->flyPerform();
$mallardDuck->landPerform();
$mallardDuck->eat();