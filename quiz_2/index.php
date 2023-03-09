<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact the Help Desk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php include "./includes/navbar.html"; ?>
<div class="container mt-3">
    <h2 class="mb-3">Please enter the following information to begin our Support process:</h2>
<form action="helpdesk_handler.php" method="POST">
  <div class="input-group mb-3">
    <label class="input-group-text" for="state">Your State</label>
    <select class="form-select" id="state" name="state">
        <option selected>Choose...</option>
        <option value="Connecticut">Connecticut</option>
        <option value="New York">New York</option>
        <option value="New Hampshire">New Hampshire</option>
    </select>
    </div>
    <div class="input-group mb-3">
    <label class="input-group-text" for="product">Your Product Type</label>
    <select class="form-select" id="product" name="product">
        <option selected>Choose...</option>
        <option value="Telephone">Telephone</option>
        <option value="TV">TV</option>
        <option value="Computer">Computer</option>
    </select>
    </div>
  <button type="submit" class="btn btn-primary">Contact Us</button>
</form>
</div>
</body>
</html>