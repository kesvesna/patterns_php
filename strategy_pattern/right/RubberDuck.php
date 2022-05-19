<?php

require_once "Fly/NoFly.php";

class RubberDuck extends DuckBase
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly();
    }

    public function display(): void
    {
        echo 'Hi, i am an Rubber duck' . PHP_EOL;
    }

}