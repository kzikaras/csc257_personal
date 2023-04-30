<?php
require "include_admin_session.php";
require_once "../utils/data_layer.php";
$sql = "SELECT destination_id, destination_name, destination_abbreviation from destination";
$results = queryDatabase($sql);
$currentPage = 'List Destinations';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Admin: List Destinations</title>
</head>
<body class="bg-light">
    <?php include "include_admin_header.php"; ?>
    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Abbreviation</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope=\"row\">" . $row['destination_id'] . "</th>";
            echo "<td>" . $row['destination_name'] . "</td>";
            echo "<td>" . $row['destination_abbreviation'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>