<?php


class UpgradableDuck extends DuckBase
{

    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly();
        $this->quackBehaviour = new NoQuack();
    }

    public function display(): void
    {
        echo "I'm upgradable duck" . PHP_EOL;
    }
}