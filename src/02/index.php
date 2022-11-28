<?php

error_reporting(-1);
require_once 'classes/Car.php';

$car1 = new Car();
$car2 = new Car();


//var_dump($car1, $car2);

$car1->color = 'Черный';
$car1->brand = 'volvo';
$car1->speed = 210;
$car1->year = 2018;

$car2->color = 'White';
$car2->brand = 'bmw';
$car2->speed = 190;
$car2->year = 2017;

echo "<h3>О моем авто:</h3>
Марка - $car1->brand<br>
Цвет - $car1->color<br>
Скорость - $car1->speed<br>
Год выпуска - $car1->year<br>
Кол-во колес - $car1->wheels<br>";
