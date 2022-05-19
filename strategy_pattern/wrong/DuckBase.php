<?php

abstract class DuckBase
{
    public function quack()
    {
        echo "Quack! Quack!" . PHP_EOL;
    }

    public function swim()
    {
        echo "I'm swimming." . PHP_EOL;
    }

    public function fly()
    {
        echo "I'am flying." . PHP_EOL;
    }

    abstract public function display(): void;
}