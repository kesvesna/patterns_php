<?php

require_once "Fly/IFlyable.php";
require_once "Quack/IQuackable.php";

class SimpleDuck extends DuckBase
{
    public function display(): void
    {
        echo 'Hi, i am an Simple duck' . PHP_EOL;
    }

}