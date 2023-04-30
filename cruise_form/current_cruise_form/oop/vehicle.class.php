<?php
abstract class Vehicle {
    private $_year; // The year of the vehicle
    private $_make; // The make of the vehicle
    private $_model;// The model of the vehicle
    private $_vin; // The vin of the vehicle
    private $_color;     // The color of the vehicle
    private $_vehicleType; // This identifies the specific vehicle type

    public function __construct($year, $make, $model, $vin, $color, $vehicleType) {
        //Set the properties of this new object based on the instantiation.
        $this->_year = $year;
        $this->_make = $make;
        $this->_model = $model;
        $this->_vin = $vin;
        $this->_color = $color;
        $this->_vehicleType = $vehicleType;
    }

    public function get_year() {
        return $this->_year;
    }
    public function get_make() {
        return $this->_make;
    }
    public function get_model() {
        return $this->_model;
    }
    public function get_vin() {
        return $this->_vin;
    }
    public function get_vehicleType() {
        return $this->_vehicleType;
    }
    public function get_color() {
        return $this->_color;
    }
    public function set_color($newColor) {
        $this->_color = $newColor;
    }

}


