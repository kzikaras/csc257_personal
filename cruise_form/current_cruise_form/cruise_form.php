<?php
    // includes
    require_once 'utils/function_library.php';
    require_once 'utils/data_layer.php';

    // Retrieve data from data layer
    $stateDropdown = getStates();
    $destinationDropdown = getDestinations();
    $cruiselineDropdown = getCruiselines();
    // Form business logic
    $showForm = true; // Control whether or not the contest form should be displayed

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
            <form class="needs-validation" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                        Valid last name is required.
                        </div>
                    </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="confirmEmail">Confirm Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="confirmEmail" id="confirmEmail" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="" required>
                            <div class="invalid-feedback">
                            City code required.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <?=buildDropDown($stateDropdown, true, '', 'custom-select d-block w-100', 'state', '', true);?>
                            <div class="invalid-feedback">
                            Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="preferredDestination">Preferred Destination</label>
                        <?=buildDropDown($destinationDropdown, true, '', 'custom-select d-block w-100', 'destination', '', true);?>
                        <div class="invalid-feedback">
                        Please provide a valid destination.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="preferredCruiseLine">Preferred Cruise Line</label>
                        <?=buildDropDown($cruiselineDropdown, true, '', 'custom-select d-block w-100', 'cruiseline', '', true);?>
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