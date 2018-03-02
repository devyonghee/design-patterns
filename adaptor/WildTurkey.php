<?php
require_once 'Turkey.php';

class WildTurkey implements Turkey
{
    function gobble()
    {
        echo 'Gobble Gobble';
    }

    function fly()
    {
        echo "I`m flying a short distance";
    }
}