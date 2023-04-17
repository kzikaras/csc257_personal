<?php
require_once "function_library.php";
require_once "data_layer.php";

// This will hold all the form business logic (stickiness and validation) for the cruise form

// Debugging
$disableClientSideFormValidation = false;  // Disables html form validation

// Form business logic
$showForm = true;                         // Controls whether or not the constest should be displayed
$isProcessingForm = false;                // Flag for determining if we are in the middle of processing the form
$isFormValid = true;                     // Assume the form is valid unless we find otherwise

// Validation variables
$isFirstNameValid = true; 
$isLastNameValid = true;
$isEmailValid = true;
$isVerifyEmailValid = true;
$isAddressValid = true;
$isAddress2Valid = true;
$isCityValid = true;
$isZipValid = true;
$isStateValid = true;
$isPreferredDestinationValid = true;
$isPreferredCruiselineValid = true;
$isTermsValid = true;

// Form variables -- Set the variables up front to avoid errors when the form hasn't posted
$firstName = null;
$lastName = null;
$email = null;
$address = null;
$address2 = null;
$city = null;
$state = null;
$zip = null;
$email = null;
$verifyEmail = null;
$preferredDestination = null;
$preferredCruiseline = null;
$terms = null;

// Check to see if we're in a POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $isProcessingForm = true;
}

if ($isProcessingForm) {
  // Set variables to each of the form elements
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $address2 = $_POST["address2"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $email = $_POST["email"];
  $verifyEmail = $_POST["verifyemail"];
  $preferredDestination = $_POST["preferredDestination"];
  $preferredCruiseline = $_POST["preferredCruiseline"];
  $terms = isset($_POST["terms"]);

  // First validate the values
  $elementUnderTest = test_input($firstName);
  if (empty($elementUnderTest)) {
    $isFirstNameValid = false;
    $isFormValid = false;
  }
  
  $elementUnderTest = test_input($lastName);
  if (empty($elementUnderTest) ||
      strlen($elementUnderTest) < 2 ||
      !preg_match("/^[a-zA-Z-' ]*$/", $elementUnderTest)
      ){
    $isLastNameValid = false;
    $isFormValid = false;
  }

  $elementUnderTest = test_input($email);
  if (empty($elementUnderTest) ||
      !filter_var($elementUnderTest, FILTER_VALIDATE_EMAIL)
  ) {
    $isEmailValid = false;
    $isFormValid = false;
  }

  $elementUnderTest = test_input($verifyEmail);
  if (empty($elementUnderTest) ||
    !filter_var($elementUnderTest, FILTER_VALIDATE_EMAIL)
  ) {
    $isVerifyEmailValid = false;
    $isFormValid = false;
  }
  if (empty($city)) {
    $isCityValid = false;
    $isFormValid = false;
  }
  if (empty($zip)) {
    $isZipValid = false;
    $isFormValid = false;
  }
  if (empty($address)) {
    $isAddressValid = false;
    $isFormValid = false;
  }
  // if (empty($address2)) {
  //   $isAddr  ess2Valid = false;
  //   $isFormValid = false;
  // }
  if (empty($state)) {
    $isStateValid = false;
    $isFormValid = false;
  }
  if (empty($preferredDestination)) {
    $isPreferredDestinationValid = false;
    $isFormValid = false;
  }
  if (empty($preferredCruiseline)) {
    $isPreferredCruiselineValid = false;
    $isFormValid = false;
  }

  if (!$terms) {
    $isTermsValid = false;
    $isFormValid = false;
  }

  // This means that the form has passed all validation rules
  if ($isFormValid) {
    $showForm = false;
    $emailExists = false;
    // Check to see if the email has already been submitted
    $sql = "SELECT * FROM `registration` WHERE email = '$email'";
    $results = queryDatabase($sql);
    // If the number of rows is > 0 it means that a recorrd for the same email already exists
    if (mysqli_num_rows($results) > 0) {
      $emailExists = true;
    } else {
      // This is where we store data in the database!!
      $sql = "INSERT INTO `registration` 
        (`first_name`, `last_name`, `email`, `address`, `address2`, `city`, `zip`, `state_id`, `destination_id`, `cruiseline_id`) 
      VALUES 
        ('$firstName', '$lastName', '$email', '$address', '$address2', '$city', '$zip', '$state', '$preferredDestination', '$preferredCruiseline');";
      queryDatabase($sql);
    }
  }

}