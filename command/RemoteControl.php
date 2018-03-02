<?php

class RemoteControl
{
    private $onCommand = array();
    private $offCommand = array();
    private $undoCommand;

    public function RemoteControl(){}

    public function setCommand($slot, $onCommand, $offCommand)
    {
        $this->onCommand[$slot] = $onCommand;
        $this->offCommand[$slot] = $offCommand;
        $this->undoCommand = null;
    }

    public function onButtonWasPushed($slot)
    {
        $this->onCommand[$slot]->execute();
        $this->undoCommand =$this->onCommand[$slot];
    }

    public function offButtonWasPushed($slot)
    {
        $this->offCommand[$slot]->execute();
        $this->undoCommand = $this->offCommand[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }

    public function toString()
    {
        $str = '';
        foreach ($this->onCommand as $onComm)
        {
            $str .= $onComm->getClass()->getName();
        }
        return $str;
    }
}
