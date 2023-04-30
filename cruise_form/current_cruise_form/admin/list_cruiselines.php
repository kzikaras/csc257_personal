<?php
require "include_admin_session.php";
require_once "../utils/data_layer.php";
$sql = "SELECT cruiseline_id, cruiseline_name, cruiseline_abbreviation from cruiseline";
$results = queryDatabase($sql);
$currentPage = 'List Cruiselines';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Admin: List Cruiselines</title>
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
            echo "<th scope=\"row\">" . $row['cruiseline_id'] . "</th>";
            echo "<td>" . $row['cruiseline_name'] . "</td>";
            echo "<td>" . $row['cruiseline_abbreviation'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
</body>
</html>