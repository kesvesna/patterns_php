<?php


require_once "Fly/FlyByWings.php";
require_once "Quack/SimpleQuack.php";

abstract class DuckBase
{

    protected IFlyable $flyBehaviour;
    protected IQuackable $quackBehaviour;

    public function __construct()
    {
        $this->flyBehaviour = new FlyByWings();
        $this->quackBehaviour = new SimpleQuack();
    }

    public function quack()
    {
        $this->quackBehaviour->quack();
    }

    public function fly()
    {
        $this->flyBehaviour->fly();
    }

    public function swim()
    {
        echo "I'm swimming." . PHP_EOL;
    }

    abstract public function display(): void;
}