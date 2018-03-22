<?php
require_once "SoldOutState.php";
require_once "NoQuarterState.php";
require_once "HasQuarterState.php";
require_once "SoldState.php";
require_once "WinnerState.php";

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    private $winnerState;
    private $state;
    private $count = 0;

    public function GumballMachine($numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...<br>";
        if($this->count != 0){
            $this->count = $this->count-1;
        }
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function toString()
    {
        echo "주식회사 왕뽑기<br>";
        echo "php로 돌아가는 기계<br>";
        echo "남은 개수: {$this->getCount()}개<br>";
        echo "동전 투입 대기중<br><br>";
    }
}
