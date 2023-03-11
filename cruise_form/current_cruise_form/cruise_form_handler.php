<?php

// var_dump($_POST);

// set variables to each of the form elements
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cruise Form Handler</title>
</head>
<body>
    <?php
        echo "<h2>Thank you $firstName $lastName. We've received your information below.</h2>";
    ?>
    <ul>
        <?php
            foreach($_POST as $key => $value) {
                echo "<li> $key: $value </li>";
            }
        ?>
    </ul>
</body>
<?php include "includes/footer.php"; ?>
</html>
