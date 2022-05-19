<?php

require_once "Fly/NoFly.php";
require_once "Quack/NoQuack.php";

class WoodenDuck extends DuckBase
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly();
        $this->quackBehaviour = new NoQuack();
    }
    public function display(): void
    {
        echo 'Hi, i am an Wooden duck' . PHP_EOL;
    }
}