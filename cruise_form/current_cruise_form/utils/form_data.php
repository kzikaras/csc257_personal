<?php

require_once 'data_layer.php';

// Form Data files
// Purpose is to interact with the data layer and provide data back to the form
function createDropdownFromDatabase($sql, $key, $value) {
    // Create the generic array to be returned
    $newArray = array();
    // Query the database and use the sql provided
    $results = queryDatabase($sql);
    // Iterate over rows returned and add to new array
    while ($row = $results->fetch_assoc()) {
        $newArray[$row[$key]] = $row[$value];
    }
    // Return the new array
    return $newArray;
}
/**
 * Retrieve a list of states
 * @param bool $sort Sort the array alphabetically (default)
 * 
 * @return array An associative array
 */
function getStates($sort=true) {
    return createDropdownFromDatabase(
        'select * from state order by state_name',
        'state_id',
        'state_name'
    );
}

/**
 * Retrieve a list of destinations
 * @param bool $sort Sort the array alphabetically (default)
 * 
 * @return array An associative array
 */
function getDestinations($sort=true) {
    return createDropdownFromDatabase(
        'select * from destination order by destination_name',
        'destination_id',
        'destination_name'
    );
}

/**
 * Retrieve a list of cruiselines
 * @param bool $sort Sort the array alphabetically (default)
 *
 * @return array An associative array
 */
function getCruiselines($sort=true) {
    return createDropdownFromDatabase(
        'select * from cruiseline order by cruiseline_name',
        'cruiseline_id',
        'cruiseline_name'
    );
}