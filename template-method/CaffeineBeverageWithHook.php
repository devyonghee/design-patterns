<?php

abstract class CaffeineBeverageWithHook
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if($this->customerWantsCondiments())
            $this->addCondiments();
    }

    abstract function brew();

    abstract function addCondiments();

    public function boilWater()
    {
        echo "물 끓이는 중<br>";
    }

    public function pourInCup()
    {
        echo "컵에 따르는 중<br>";
    }

    //이 메소드는 서브클래스에서 필요에 따라 오버라이드 할 수 있는 메소드 이므로 후크입니다.
    public function customerWantsCondiments()
    {
        return true;
    }
}