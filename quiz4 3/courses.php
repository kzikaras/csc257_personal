<?php 
    /**
     * queryDatabase
     *
     * @param  String $sql the sql to be run against the database
     * @return Array $results Return the results of the SQL query.
     */
    function queryDatabase($sql) {
        // Define initial options for connecting to MySql
        $serverName = '127.0.0.1';
        $userName = 'root';
        $password = '';
        $port = '3306';
        $db = 'course';
        // create a connection 
        $conn = new mysqli($serverName, $userName, $password, $db, $port);
        // Get results
        $results = $conn->query($sql);
        // return the results
        return $results;
    }

    $results = queryDatabase('select * from course order by Course_Name');
    // Iterate over rows returned and add to new array
    $courseArray = array();
    while ($row = $results->fetch_assoc()) {
        $courseArray[$row['Course_Name']] = array($row['NumberOfStudents'], $row['Department']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Courses</title>
</head>
<body>
    <div class="container">
    <h1>Course List</h1>
    <table class="table text-center">
    <thead>
        <tr>
        <th scope="col">Course Name</th>
        <th scope="col">Number of Students</th>
        <th scope="col">Department</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($courseArray as $course => $data) {
            echo "
            <tr>
            <th scope=\"row\">$course</th>
            <td>$data[0]</td>
            <td>$data[1]</td>
            </tr>
        ";
        }
    ?>
    </tbody>
    </table>
    </div>
</body>
</html>