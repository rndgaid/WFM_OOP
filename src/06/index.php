<?php

require_once 'classes/Car.php';

echo Car::$countCar . '<br>';

$car1 = new Car('black', 4, 160, 'Lada');

echo Car::$countCar . '<br>';

$car2 = new Car('red', 4, 150, 'Slavuta');

echo Car::getCountCar() . '<br>';

print $car1->getCarInfo();
print $car2->getCarInfo();

print $car1->getPrototypeInfo();
print Car::TEST_CAR_SPEED . '<br>';
print Car::class;
