<?php

// Проблема с множеством уток и их разным поведением, решается при помощи использования
// разных классов имплементирующих нужный интерфейс,
// экземпляры этих классов просто используются при перегрузке конструктора
// родительского класса Утка, тем самым мы выбираем нужный нам функционал уток наследников
// плавает - не плавает, летает - не летает, крякает - не крякает - крякает экзотически

include "DuckBase.php";
include "ExoticDuck.php";
include "SimpleDuck.php";
include "WoodenDuck.php";
include "RubberDuck.php";

$ducksList = [];
$ducksList[] = new ExoticDuck();
$ducksList[] = new SimpleDuck();
$ducksList[] = new WoodenDuck();
$ducksList[] = new RubberDuck();

foreach($ducksList as $duck)
{
    $duck->display();
    $duck->swim();
    $duck->fly();
    $duck->quack();
    echo "" . PHP_EOL;
}