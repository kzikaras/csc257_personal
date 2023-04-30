<?php

class User {
    private $_firstName;
    private $_lastName;
    private $_userName;
    private $_userType;

    public function __construct($firstName, $lastName, $userName, $usertype) {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_userName = $userName;
        $this->_userType = $userType;
    }

    public function get_firstName() {
        return $this->_firstName;
    }

    public function get_lastName() {
        return $this->_lastName;
    }

    public function get_userName() {
        return $this->_userName;
    }

    public function get_userType() {
        return $this->_userType;
    }

    public function get_fullName() {
        return $this->_firstName . " " . $this->_lastName;
    }
}