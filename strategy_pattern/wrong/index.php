<?php

// Проблема в том, что уток может быть очень много разных,
// с разными методами и их разной реализацией,
// К примеру, простая утка может плавать, летать и крякать,
// деревянная утка может только плавать,
// резиновая утка может плавать и крякать и т.д.

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
    echo "" . PHP_EOL;
    $duck->display();
    $duck->swim();
    $duck->quack();
    $duck->fly();
    echo "" . PHP_EOL;
}