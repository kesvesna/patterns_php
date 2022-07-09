<?php

class YardCat implements IHomeCat
    {

        public function __construct(private string $name)
        {
        }

        public function Meow()
        {
            echo "Мяу мяу" . PHP_EOL;
        }

        public function Scratch()
        {
            echo "Я не царапаюсь, но не сильно" . PHP_EOL;
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