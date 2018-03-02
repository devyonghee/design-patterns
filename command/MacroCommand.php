<?php
require_once 'Command.php';

class MacroCommand implements Command
{
    private $commands;

    public function MacroCommand($commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command){
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command){
            $command->undo();
        }
    }
}