<?php
require_once 'MakeSound.php';

class QuackSoundOut implements MakeSound
{
    public function sound()
    {
        echo '꽥꽥';
    }
}