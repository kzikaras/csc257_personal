<?php
class Car {
    private $_year; // The year of the car
    private $_make; // The make of the car
    private $_model;// The model of the car
    private $_vin; // The vin of the car
    private $_color;     // The color of the car

    public function __construct($year, $make, $model, $vin, $color) {
        //Set the properties of this new object based on the instantiation.
        $this->_year = $year;
        $this->_make = $make;
        $this->_model = $model;
        $this->_vin = $vin;
        $this->_color = $color;
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
    public function get_color() {
        return $this->_color;
    }
    public function set_color($newColor) {
        $this->_color = $newColor;
    }

}


$myHonda = new Car(2022, "Honda", "Accord", "1z56645345", "red");
$mySubaru = new Car(2017, "Subaru", "WRX", "54334vcs333", "Black");

echo "The initial color of my honda is: " . $myHonda->get_color() . "<br>";
$myHonda->set_color("Green");
echo "The currrent color of my honda is: " . $myHonda->get_color();
// echo "The details for my Honda are " . $myHonda->get_year() . " " . $myHonda->get_make() . " " . $myHonda->get_model() . " " . $myHonda->get_color() . "<br>";
// echo "The details for my Subaru are " . $mySubaru->get_year() . " " . $mySubaru->get_make() . " " . $mySubaru->get_model() . " " . $mySubaru->get_color() . "<br>";
// echo $myHonda->get_year();
// echo $mySubaru->get_year();

