<?php
// set variables to each of the form elements
$product = $_POST['product'];
$state = $_POST['state'];

function render_phone($state, $product) {
    if ($state == 'New Hampshire') {
        return '866-444-2221';
    }else if ($state == 'Connecticut' || $state == 'New York') {
        if ($product == 'TV' || $product == 'Computer') {
            return '877-333-3312';
        }else if ($product == 'Telephone') {
            return '800-555-1212';
        }else {
            return 'ERROR: Unknown data combination';
        }
    }else {
        return 'ERROR: Unknown data combination';
    }
}
// Let the user know if data was not submitted correctly
if ($product == 'Choose...' || $state == 'Choose...') {
    $message = "Some data was not captured. Please <a href='index.php'>fill out the form and submit again</a>";
}else {
    $phone_number = render_phone($state, $product);
    $message = "Please call us at $phone_number";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Contact the Help Desk</title>
</head>
<body>
    <?php include "./includes/navbar.html"; ?>
    <div class="container">
        <h2 class="mt-3"><?php echo $message; ?></h2>
    </div>
</body>
</html>