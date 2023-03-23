<?php

// This will hold all the form business logic (stickiness and validation) for the cruise form

// Debugging
$disableClientSideValidation = true; // Disables html validation
// Form business logic
$showForm = true; // Control whether or not the contest form should be displayed
$isFormValid = true;

// Check to see if we're in a post
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $showForm = false;
    // var_dump($_POST);

    // set variables to each of the form elements
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    echo "<h2>Thank you $firstName $lastName. We've received your information below.</h2>";

    foreach($_POST as $key => $value) {
        echo "<li> $key: $value </li>";
    }
}