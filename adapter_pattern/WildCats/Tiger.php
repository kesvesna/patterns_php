<?php

class Tiger implements IWildCat
{
    private $breed = 'Тигр';

    public function getBreed()
    {
        return $this->breed;
    }

    public function Growl()
    {
        echo "Аррррррр" . PHP_EOL;
    }

    public function Scratch()
    {
        echo "Я царапаюсь сильно, до смерти" . PHP_EOL;
    }
}