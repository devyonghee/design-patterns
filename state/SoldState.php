<?php
require_once "State.php";

class SoldState implements State
{
    private $gumballMachine;

    public function SoldState($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "잠깐만 기다려 주세요. 알맹이가 나가고 있습니다.<br>";
    }

    public function ejectQuarter()
    {
        echo "이미 알맹이를 뽑으셨습니다.<br>";
    }

    public function turnCrank()
    {
        echo "손잡이는 한 번만 돌려주세요.<br>";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}