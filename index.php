<?php
// index.php
require_once 'Cars.php';
require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

$bike = new Bicycle('purple', 2);
echo $bike->forward();
echo $bike->brake();
var_dump($bike);

$car = new Cars('green', 4, 'electric');
echo $car->forward();
echo $car->brake();
var_dump($car);

var_dump(Cars::ALLOWED_ENERGIES);

$truck = new Truck('red', 3, 'fuel', 500, 150 );
echo $truck->forward();
echo $truck->brake();
var_dump($truck);

var_dump(Truck::ALLOWED_ENERGIES);
?>
