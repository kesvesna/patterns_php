<?php

class CatInfoPrinter
{
    public static function PrintCatInfo(IHomeCat $cat)
        {
            echo "Кошачье досье:" . PHP_EOL;
            echo "Имя кота: " . $cat->getName() . PHP_EOL;
            echo "Вид мяуканья: " . PHP_EOL;
            $cat->Meow();
            echo "Вид царапанья: " . PHP_EOL;
            $cat->Scratch();
            echo PHP_EOL;
        }
}