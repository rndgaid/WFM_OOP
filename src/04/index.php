<?php

require_once 'classes/Car.php';

$car1 = new Car('black', 4, 160, 'Lada');
$car2 = new Car('red', 4, 150, 'Slavuta');

print $car1->getCarInfo();
print $car2->getCarInfo();
