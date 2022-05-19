<?php

require_once "IFlyable.php";

class NoFly implements IFlyable
{

    public function fly()
    {
        echo "I can't fly" . PHP_EOL;
    }
}