<?php

require_once "Quack/ExoticQuack.php";

class ExoticDuck extends DuckBase
{
    public function __construct()
    {
        parent::__construct();
        $this->quackBehaviour = new ExoticQuack();
    }
    public function display(): void
    {
        echo 'Hi, i am an Exotic duck' . PHP_EOL;
    }

}