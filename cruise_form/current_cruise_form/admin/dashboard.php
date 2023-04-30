<?php
require "include_admin_session.php";
$currentPage = 'Dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Admin: Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        .card-header a {
            color: white;
        }
        .card-header a:hover {
            font-weight: bold;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body class="bg-light">
<?php include "include_admin_header.php"; ?>
<div class="row" style="margin-left: 20px;">

    <div class="card text-white bg-primary mb-3" style="max-width: 18rem; margin-right:20px;">
    <div class="card-header"><a href="list_entries.php" class="dashboardLink">List Entries</a></div>
    <div class="card-body">
        <p class="card-text">List entries submitted by users</p>
    </div>
    </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;margin-right:20px;">
    <div class="card-header"></div>
    <div class="card-body">
        <h5 class="card-title">Secondary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;margin-right:20px;">
    <div class="card-header">Header</div>
    <div class="card-body">
        <h5 class="card-title">Success card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
</div>
</body>