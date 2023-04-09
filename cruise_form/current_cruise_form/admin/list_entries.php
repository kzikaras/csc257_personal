<?php
require_once "../utils/data_layer.php";
$sql = "select * from registration";
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
            echo "<td>" . $row['state'] . "</td>";
            echo "<td>" . $row['destination'] . "</td>";
            echo "<td>" . $row['cruiseline'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>