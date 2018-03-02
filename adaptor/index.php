<?php
require_once 'MallardDuck.php';
require_once 'TurkeyAdapter.php';
require_once 'WildTurkey.php';

echo "어댑터 패턴<br>";
echo "한 클래스의 이넡페이스를 클라이언트에서 사용하고자 하는 다른 인터페이스로 변환합니다. 어댑터를 이용하면 인터페이스 호환성 문제 때문에 같이 쓸 수 없는 클래스들을 연결해서 쓸 수 있습니다.";


$turkey = new WildTurkey();

$duck = new MallardDuck();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "<br><br>";
echo "The Turkey says...<br>";
$turkey->gobble();
echo "<br>";
$turkey->fly();
echo "<br><br>";

echo "The Duck says...";
echo "<br>";
test::testDuck($duck);
echo "<br><br>";

echo "The TurkeyAdapter says...";
echo "<br>";
test::testDuck($turkeyAdapter);

class test
{
    static public function testDuck($duck){

        $duck->quack();
        echo "<br>";
        $duck->fly();
    }

}