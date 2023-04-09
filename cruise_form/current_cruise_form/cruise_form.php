<?php

// Includes
require_once "utils/function_library.php";
require_once "utils/form_data.php";
require_once "utils/form_validation.php";

// Retrieve data from data layer
$stateArray = getStates();
$destinationArray = getDestinations();
$cruiseLineArray = getCruiseLines();

?>
<html>
<head>
    <title>Win a Cruise!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">

<?php
  // Show the form accoring to the flag
  if ($showForm) {
?>

<div class="container">
      <div class="py-5 text-center">
        <h2>Win a Cruise Vacation!</h2>
        <p class="lead">Submit the following information to register for our Win a Cruise drawing later this year!</p>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Your Information</h4>
          <form class="needs-validation" method="post" action="<?=$_SERVER['PHP_SELF']?>" <?php if ($disableClientSideFormValidation) echo 'novalidate'; ?> >
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name <?php if (!$firstName) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                <input
                  type="text"
                  class="form-control <?php if (!$isFirstNameValid) echo 'requiredHighlight';?>"
                  id="firstName"
                  name="firstName"
                  placeholder=""
                  value="<?php echo $firstName;?>">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name <?php if (!$lastName) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                <input
                  type="text"
                  class="form-control <?php if (!$isLastNameValid) echo 'requiredHighlight';?>"
                  id="lastName"
                  name="lastName"
                  placeholder=""
                  value="<?php echo $lastName;?>">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <?php if (!$email) { echo '<span class="requiredIndicator">*</span>'; } ?><span class="text-muted"></span></label>
              <input type="email" class="form-control <?php if (!$isEmailValid) echo 'requiredHighlight';?>" id="email" name="email" value="<?php echo $email;?>" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="mb-3">
              <label for="verifyemail">Verify Email <?php if (!$verifyEmail) { echo '<span class="requiredIndicator">*</span>'; } ?><span class="text-muted"></span></label>
              <input type="verifyemail" class="form-control <?php if (!$isVerifyEmailValid) echo 'requiredHighlight';?>" id="verifyemail" name="verifyemail" value="<?php echo $verifyEmail;?>" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address <?php if (!$address) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
              <input type="text" class="form-control <?php if (!$isAddressValid) echo 'requiredHighlight';?>" id="address" name="address" value="<?php echo $address;?>" placeholder="1234 Main St">
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2<span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control <?php if (!$isAddress2Valid) echo 'requiredHighlight';?>" id="address2" name="address2" value="<?php echo $address2;?>" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="city">City <?php if (!$city) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                <input type="text" class="form-control <?php if (!$isCityValid) echo 'requiredHighlight';?>" id="city" name="city" placeholder="" value="<?php echo $city;?>">
                <div class="invalid-feedback">
                  City required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State <?php if (!$state) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                <?php 
                  $class = "custom-select d-block w-100"; 
                  if (!$isStateValid) $class .= " requiredHighlight";
                ?>
                <?=buildDropDown($stateArray, true, "", $class, "state", "", false, $state);?>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip <?php if (!$zip) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                <input type="text" class="form-control <?php if (!$isZipValid) echo 'requiredHighlight';?>" id="zip" name="zip" placeholder="" value="<?php echo $zip;?>">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>

            <hr class="mb-4">

            <div class="row">
              <div class="col-md-3 mb-3">
                  <label for="preferredDestination">Preferred destination <?php if (!$preferredDestination) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                  <select class="custom-select d-block w-100 <?php if (!$isPreferredDestinationValid) echo 'requiredHighlight';?>" id="preferredDestination" name="preferredDestination">
                      <?=generateHTMLDropDownList($destinationArray, true, "", $preferredDestination)?>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid destination.
                  </div>
              </div>

              <div class="col-md-4 mb-3">
                  <label for="preferredCruiseline">Preferred cruise line <?php if (!$preferredCruiseline) { echo '<span class="requiredIndicator">*</span>'; } ?></label>
                  <select class="custom-select d-block w-100 <?php if (!$isPreferredCruiselineValid) echo 'requiredHighlight';?>" id="preferredCruiseline" name="preferredCruiseline">
                      <?=generateHTMLDropDownList($cruiseLineArray, true, "Please select a cruise line...", $preferredCruiseline)?>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid cruise line.
                  </div>
              </div>
            </div>

            <br>

            <div class="<?php if (!$isTermsValid) echo 'checkbox-requiredHighlight';?>">
              <input type="checkbox" id="terms" name="terms" <?php if ($isProcessingForm && $isTermsValid) echo "checked";?>> I accept the terms of this contest<br>
            </div>
            <br>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit your entry</button>
          </form>
        </div>
      </div>

<?php 
    } else {
      if ($emailExists) {
        echo "There is already an email registered with this event.";
      } else {
        // Create user-friendly names
        $stateName = $stateArray[$state]; // $state holds the value state_id from the database
        $destinationName = $destinationArray[$preferredDestination]; // $preferredDestination holds the id
        $cruiselineName = $cruiseLineArray[$preferredCruiseline]; // $preferredCruiseline holds the id
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
        echo "$city, $stateName $zip<br>";
        echo "<br>";
        echo "Preferred destination: $destinationName<br>";
        echo "Preferred cruise line: $cruiselineName<br>";
        echo "<br><br>Good luck!<br>";

        } // End showform test 
      }
?>

<?php include "includes/footer.php"; ?>

</body>
</html>