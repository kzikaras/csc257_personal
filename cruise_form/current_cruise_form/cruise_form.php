<?php
    // includes
    require_once 'utils/function_library.php';
    require_once 'utils/data_layer.php';
    require_once 'utils/form_validation.php';

    // Retrieve data from data layer
    $stateArray = getStates();
    $destinationArray = getDestinations();
    $cruiselineArray = getCruiselines();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Win a Cruise!</title>
</head>
<body class="bg-light">
    <?php 
        // Show the form according to the flag
        if ($showForm) {
    ?>
        <div class="container">
        <div class="py-5 text-center">
            <h2>Win a Cruise Vacation!</h2>
            <p class="lead">Enter the following information to register for our Win a Cruise drawing later this year!</p>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Your information</h4>
            <form class="needs-validation" method="post" action="<?=$_SERVER['PHP_SELF']?>" <?php if ($disableClientSideValidation) echo 'novalidate'?>>    
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="<?php echo $firstName; ?>" required>
                        <div class="invalid-feedback">
                        Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="<?php echo $lastName; ?>" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" value="<?php echo $email; ?>">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="verifyEmail">Confirm Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="verifyEmail" id="verifyEmail" placeholder="you@example.com" value="<?php echo $verifyEmail; ?>">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" value="<?php echo $address; ?>" required>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite" value="<?php echo $address2; ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="" value="<?php echo $city; ?>" required>
                            <div class="invalid-feedback">
                            City code required.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <?=buildDropDown($stateArray, true, '', 'custom-select d-block w-100', 'state', '', true, $state);?>
                            <div class="invalid-feedback">
                            Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="" value="<?php echo $zip; ?>" required>
                            <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="preferredDestination">Preferred Destination</label>
                        <select class='custom-select d-block w-100' name="preferredDestination" id="preferredDestination">
                            <?= generateHTMLDropDownList($destinationArray, true, '', $preferredDestination)?>
                        </select>
                        <div class="invalid-feedback">
                        Please provide a valid destination.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="preferredCruiseline">Preferred Cruise Line</label>
                        <select class='custom-select d-block w-100' name="preferredCruiseline" id="preferredCruiseline">
                            <?= generateHTMLDropDownList($cruiselineArray, true, '', $preferredCruiseline)?>
                        </select>
                        <div class="invalid-feedback">
                        Please provide a valid destination.
                        </div>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input name="acceptTerms" class="form-check-input" type="checkbox" id="flexCheckDefault" required>
                    <label for="acceptTerms" class="form-check-label" for="flexCheckDefault">
                        I accept the terms of this contest
                    </label>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Your Entry</button>
            </form>
            </div>
        </div>
    </body>
<?php 
    // End show form test
    } 
?>
<?php include "includes/footer.php"; ?>
</html>