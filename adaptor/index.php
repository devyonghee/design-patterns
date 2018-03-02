<?php
require_once 'MallardDuck.php';
require_once 'TurkeyAdapter.php';
require_once 'WildTurkey.php';

echo "어댑터 패턴<br><br>";


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