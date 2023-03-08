<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initial html form</title>
    <style>
        form {
            width: 800px;
        }
        label, input {
            display: block;
            margin: 4px;
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="">
        <label for="First Name">First Name</label>
        <input name="First Name" type="text">
        <label for="Last Name">Last Name</label>
        <input name="Last Name" type="text">
        <label for="E-mail Address">E-mail Address</label>
        <input name="E-mail Address" type="email">
        <label for="City">City</label>
        <input name="City" type="text">
        <label for="State">State</label>
        <select name="State">
            <option value="Connecticut">Connecticut</option>
            <option value="New York">New York</option>
            <option value="Rhode Island">Rhode Island</option>
            <option value="California">California</option>
            <option value="Florida">Florida</option>
        </select>
        <label for="Preferred Destination">Preferred Destination</label>
        <select name="Preferred Destination">
            <option value="Bermuda">Bermuda</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Aruba">Aruba</option>
            <option value="Cozumel">Cozumel</option>
        </select>
        <input type="submit" value="Submit Your Information">
    </form>
</body>
</html>