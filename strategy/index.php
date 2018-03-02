<?php
require_once 'MallardDuck.php';
require_once 'Duck.php';

echo '스트래티지 패턴<br>';
echo '스트래티지 패턴 에서는 알고리즘군을 정의하고 각각을 캡슐화하여 교환해서 사용할 수 있도록 만든다. 스트래티지를 활용하면 알고리즘을 사용하는 클라이언트와는 독립적으로 알고리즘을 변경할 수 있다.<br><br>';

$mallardDuck = new mallardDuck();
$mallardDuck->quackPerform();
$mallardDuck->flyPerform();
$mallardDuck->landPerform();
$mallardDuck->eat();