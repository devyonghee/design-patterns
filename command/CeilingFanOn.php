<?php
require_once 'Command.php';


class CeilingFanOn implements Command
{
    private $ceilingFan;

    public function CeilingFanOn($ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->ceilingFan->on() ;
    }

    public function undo()
    {
        if($this->ceilingFan->isOperation())
            $this->ceilingFan->off();
        else
            $this->ceilingFan->on();
    }
}