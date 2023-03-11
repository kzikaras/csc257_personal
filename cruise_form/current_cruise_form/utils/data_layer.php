<?php

// Application-wide data layer
// TODO: work in progress

/**
 * Retrieve a list of states
 * @param bool $sort Sort the array alphabetically (default)
 * 
 * @return array An associative array
 */
function getStates($sort=true) {
    $stateDropdown = array(
        'Connecticut' => 'Connecticut',
        'New York' => 'New York',
        'Rhode Island' => 'Rhode Island',
        'California' => 'California',
        'Florida' => 'Florida'
    );
    if ($sort) asort($stateDropdown);
    return $stateDropdown;
}

/**
 * Retrieve a list of destinations
 * @param bool $sort Sort the array alphabetically (default)
 * 
 * @return array An associative array
 */
function getDestinations($sort=true) {
    $destinationDropdown = array(
        'Bermuda' => 'Bermuda',
        'Bahamas' => 'Bahamas',
        'Hawaii' => 'Hawaii',
        'Aruba' => 'Aruba',
        'Cozumel' => 'Cozumel'
    );
    if ($sort) asort($destinationDropdown);
    return $destinationDropdown;
}

/**
 * Retrieve a list of cruiselines
 * @param bool $sort Sort the array alphabetically (default)
 *
 * @return array An associative array
 */
function getCruiselines($sort=true) {
    $cruiselineDropdown = array(
        'Carnival' => 'Carnival',
        'Princess' => 'Princess',
        'Norwegian' => 'Norwegian',
        'Royal Caribbean' => 'Royal Caribbean',
        'Disney Cruises' => 'Disney Cruises'
    );
    if ($sort) asort($cruiselineDropdown);
    return $cruiselineDropdown;
}