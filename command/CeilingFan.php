<?php

class CeilingFan
{
    private $state;

    public function CeilingFan()
    {
        $this->state = null;
    }

    public function on()
    {
        echo 'ceilingFan on<br>';
        $this->state = 'on';
    }

    public function off()
    {
        echo 'ceilingFan off<br>';
        $this->state = 'off';
    }

    public function isOperation(){
        if($this->state == 'on')
            return true;
    }
}