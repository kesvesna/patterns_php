<?php

require_once "IFlyable.php";

class FlyByWings implements IFlyable
{

    public function fly()
    {
        echo "I'am flying" . PHP_EOL;
    }
}