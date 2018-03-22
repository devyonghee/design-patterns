<?php
require_once "State.php";

class SoldOutState implements State
{
    private $gumballMachine;

    public function SoldOutState($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "죄송합니다. 매진되었습니다.<br>";
    }

    public function ejectQuarter()
    {
        echo "죄송합니다. 매진되었습니다.<br>";
    }

    public function turnCrank()
    {
        echo "죄송합니다. 매진되었습니다.<br>";
    }

    public function dispense()
    {
        echo "알맹이가 나갈 수 없습니다.<br>";
    }
}