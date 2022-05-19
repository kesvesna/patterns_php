<?php

require_once "IQuackable.php";

class NoQuack implements IQuackable
{

    public function quack()
    {
        echo "I can't quack" . PHP_EOL;
    }
}