<?php
require "include_admin_session.php";
require_once "../utils/data_layer.php";
$sql = "SELECT r.registration_id, r.datetime, r.first_name, r.last_name, r.email, r.address, r.address2, r.city, r.zip, s.state_name, d.destination_name, c.cruiseline_name from registration r inner join state s on r.state_id = s.state_id inner join destination d on r.destination_id = d.destination_id inner join cruiseline c on r.cruiseline_id = c.cruiseline_id";
$results = queryDatabase($sql);
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Admin: List Entries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">
    <?php include "include_admin_header.php"; ?>
    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Address2</th>
        <th scope="col">City</th>
        <th scope="col">Zip</th>
        <th scope="col">State</th>
        <th scope="col">Destination</th>
        <th scope="col">Cruise Line</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope=\"row\">" . $row['registration_id'] . "</th>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['address2'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['zip'] . "</td>";
            echo "<td>" . $row['state_name'] . "</td>";
            echo "<td>" . $row['destination_name'] . "</td>";
            echo "<td>" . $row['cruiseline_name'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>