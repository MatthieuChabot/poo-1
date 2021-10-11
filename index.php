<?php

require_once "car.php";
require_once 'Bicycle.php';
$bike = new Bicycle('blue');
$homerCar = new Car('pink',5,'diesel');

echo $homerCar->start().'<br>';
echo $homerCar->forward();
echo '<br> Vitesse de la voiture : ' . $homerCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerCar->brake();
echo '<br> Vitesse de la voiture : ' . $homerCar->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();