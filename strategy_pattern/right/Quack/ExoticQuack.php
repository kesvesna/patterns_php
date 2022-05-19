<?php

require_once "IQuackable.php";

class ExoticQuack implements IQuackable
{

    public function quack()
    {
        echo "I can exotic quack!" . PHP_EOL;
    }
}