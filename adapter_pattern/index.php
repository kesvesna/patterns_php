<?php

/** Существует класс Домашние коты, которые могут иметь кличку, мяукать, царапаться и мы можем узнать их кличку
 *  все с помощью интерфейса Домашние коты.
 *  Существует класс Дикие коты, которые могут иметь породу, рычать, царапаться и мы можем узнать их породу
 *  все с помощью интерфейса Дикие коты.
 *  Есть сторонняя библиотека CatInfoPrinter.php, которая позволяет красиво выводить на экран
 *  информацию о домашних котах.
 *  Мы хотим используя эту библиотеку выводить на экран информацию и о диких котах,
 *  но изменять для этого библиотеку запрещено.
 *  Использовать эту библиотеку CatInfoPrinter.php для наших целей нам поможет класс адаптор WildToHomeCatAdapter.php
 */


include "HomeCats/IHomeCat.php";
include "HomeCats/PedigreeCat.php";
include "HomeCats/YardCat.php";

include "WildCats/IWildCats.php";
include "WildCats/Tiger.php";

include "CatInfoPrinter.php";

include "Adapters/WildToHomeCatAdapter.php";


$vaska = new PedigreeCat("Васька");
CatInfoPrinter::PrintCatInfo($vaska);

$wagner = new YardCat("Вагнер");
CatInfoPrinter::PrintCatInfo($wagner);

$tiger = new Tiger();
$adapter = new WildToHomeCatAdapter($tiger);
CatInfoPrinter::PrintCatInfo($adapter);


