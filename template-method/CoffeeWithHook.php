<?php
require_once 'CaffeineBeverageWithHook.php';

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        echo "필터로 커피를 우려내는 중<br>";
    }

    public function addCondiments()
    {
        echo "우유와 설탕을 추가하는 중<br>";
    }

    public function customerWantsCondiments()
    {
        $answer = 'Y';
        if (strtolower($answer) == 'y') {
            echo "커피에 우유와 설탕을 추가하겠습니다.<br>";
            return true;
        } else {
            return false;
        }
    }
}
