<?php
require_once 'CaffeineBeverage.php';

class Tea extends CaffeineBeverage
{
    function addCondiments()
    {
        echo "차를 우려내는 중<br>";
    }

    function brew()
    {
        echo "레몬을 추가하는 중<br>";
    }
}
