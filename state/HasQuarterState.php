<?php
require_once 'State.php';

class HasQuarterState implements State
{
    private $gumballMachine;

    public function HasQuarterState($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "동전은 한 개만 넣어주세요.<br>";
    }

    public function ejectQuarter()
    {
        echo "동전이 반환됩니다.<br>";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function dispense()
    {
        echo "알맹이가 나갈 수 없습니다.<br>";
    }

    public function turnCrank()
    {
        echo "손잡이를 돌리셨습니다.<br>";
        $winner = rand(0, 10);
        if (($winner == 0) && ($this->gumballMachine->getCount() > 1)) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }
}
