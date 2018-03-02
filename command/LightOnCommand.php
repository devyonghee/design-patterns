<?php
require_once 'Command.php';

class LightOnCommand implements Command
{
    private $light;

    public function LightOnCommand($light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on() ;
    }

    public function undo()
    {
        if($this->light->isOperation())
            $this->light->off();
        else
            $this->light->on();
    }
}