<?php
require_once 'State.php';

class WinnerState implements State
{
    private $gumballMachine;

    public function WinnerState($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "잠깐만 기다려 주세요. 알맹이가 나가고 있습니다.";
    }

    public function ejectQuarter()
    {
        echo "이미 알맹이를 뽑으셨습니다.";
    }

    public function turnCrank()
    {
        echo "손잡이는 한 번만 돌려주세요.";
    }

    public function dispense()
    {
        echo "축하드립니다! 알맹이를 하나 더 받으실 수 있습니다.<br>";
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setSate($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "더 이상 알맹이가 없습니다.";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }
}
