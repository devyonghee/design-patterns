<?php

class Light
{
    private $state;

    public function Light()
    {
        $this->state = null;
    }

    public function on()
    {
        echo 'light on<br>';
        $this->state = 'on';
    }

    public function off()
    {
        echo 'light off<br>';
        $this->state = 'off';
    }

    public function isOperation()
    {
        if ($this->state == 'on')
            return true;
    }
}
