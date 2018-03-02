<?php
require_once 'Command.php';

class CeilingFanOff implements Command
{
    private $ceilingFan;

    public function CeilingFanOff($ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->ceilingFan->off() ;
    }

    public function undo()
    {
        if($this->ceilingFan->isOperation())
            $this->ceilingFan->off();
        else
            $this->ceilingFan->on();
    }
}