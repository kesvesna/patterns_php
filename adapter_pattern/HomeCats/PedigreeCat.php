<?php

class PedigreeCat implements IHomeCat
    {

        public function __construct(private string $name)
        {
        }

        public function Meow()
        {
            echo "Урррр урррр." . PHP_EOL;
        }

        public function Scratch()
        {
            echo "Я не царапаюсь." . PHP_EOL;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }
    }