<?php
require_once 'CaffeineBeverage.php';

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        echo "필터로 커피를 우려내는 중<br>";
    }

    public function addCondiments()
    {
        echo "설탕과 커피를 추가하는 중<br>";
    }
}
