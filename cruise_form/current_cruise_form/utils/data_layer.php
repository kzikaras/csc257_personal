<?php

// Application-wide data layer

function queryDatabase($sql) {
    // Define initial options for connecting to MySql
    $serverName = '127.0.0.1';
    $userName = 'root';
    $password = '';
    $port = '3306';
    $db = 'csc257';
    // create a connection 
    $conn = new mysqli($serverName, $userName, $password, $db, $port);

    // Add error handling for connection
    if ($conn->connect_errno) {
        echo "Failed to connect to MySql: " . $conn->connect_error;
        exit();
    }

    // Get results
    $results = $conn->query($sql);

    if (!$results) {
        echo "Error description:" . $conn->error;
        exit();
    }
    // Close the connection
    $conn->close();
    // return the results
    return $results; 
}
/*
$results = queryDatabase('select * from state order by state_name');

// var_dump($results);

while ($row = $results->fetch_assoc()) {
    echo $row['state_id'] . ' ' . $row['state_name'] . ' ' . $row['state_abbreviation'] . '<br>';
}

*/
