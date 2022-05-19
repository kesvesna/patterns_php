<?php

require_once "IQuackable.php";

class SimpleQuack implements IQuackable
{
    public function quack()
    {
        echo 'Quack! Quack!' . PHP_EOL;
    }
}