<?php

require_once("vehicle.class.php");

// Inheritance
class Car extends Vehicle {
    public function __construct($year, $make, $model, $vin, $color) {
        parent::__construct($year, $make, $model, $vin, $color, "Car");
    }
}