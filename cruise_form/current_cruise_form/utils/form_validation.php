<?php

// This will hold all the form business logic (stickiness and validation) for the cruise form

// Debugging
$disableClientSideValidation = true; // Disables html validation
// Form business logic
$showForm = true; // Control whether or not the contest form should be displayed
$isFormValid = false;


// Form variables -- Set the variables up front to avoid errors when the form hasn't posted
$firstName = null;
$lastName = null;
$email = null;
$verifyEmail = null;
$address = null;
$address2 = null;
$city = null;
$state = null;
$zip = null;
$preferredDestination = null;
$preferredCruiseline = null;
// Check to see if we're in a post
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    // var_dump($_POST);

    // Set variables to each of the form elements
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $verifyEmail = $_POST["verifyEmail"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $preferredDestination = $_POST["preferredDestination"];
    $preferredCruiseline = $_POST["preferredCruiseline"];

    // First validate
    if (empty($firstName)) {
        // To be done later
    }

    if ($isFormValid) {
        $showForm = false;
        // Third add a message
        echo "Thank you $firstName, we have received your submission with the following information:<br><br>";
        echo "Name: $firstName $lastName<br>";
        echo "E-mail: $email<br>";  
        echo "<br>";
        echo "Address:<br>";
        echo "$address<br>";
        if ($address2) { 
            echo "$address2<br>";
        }
        echo "$city, $state $zip<br>";
        echo "<br>";
        echo "Preferred destination: $preferredDestination<br>";
        echo "Preferred cruise line: $preferredCruiseline<br>";
        echo "<br><br>Good luck!<br>";
    }


}