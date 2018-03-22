<?php
require_once "State.php";

class NoQuarterState implements State
{
    private $gumballMachine;

    public function NoQuarterState($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function dispense()
    {
        echo "동전을 넣어주세요.<br>";
    }

    public function ejectQuarter()
    {
        echo "동전을 넣어주세요.<br>";
    }

    public function insertQuarter()
    {
        echo "동전을 넣으셨습니다.<br>";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function turnCrank()
    {
        echo "동전을 넣어주세요.<br>";
    }
}