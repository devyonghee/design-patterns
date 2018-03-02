<?php
require_once 'Command.php';

class LightOffCommand implements Command
{
    private $light;

    public function LightOffCommand($light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off() ;
    }

    public function undo()
    {
        if($this->light->isOperation())
            $this->light->off();
        else
            $this->light->on();
    }
}