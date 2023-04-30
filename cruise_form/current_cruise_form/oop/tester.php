<?php

require_once("car.class.php");
require_once("motorcycle.class.php");

$myNewCar = new Car(2022, "Honda", "Accord", "1z56645345", "red");

echo $myNewCar->get_color();

$myNewMotorcycle = new Motorcycle(2016, "Kawasaki", "1700r", "1z566", "silver");

echo $myNewMotorcycle->get_color();