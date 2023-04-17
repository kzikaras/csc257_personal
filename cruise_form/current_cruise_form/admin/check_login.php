<?php
require "../utils/data_layer.php";
// If the request is a post  -- meaning the form posted data to this page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "in the post";
    // Start the PHP session
    session_start();
    // obtain username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "$password";
    echo"$username";
    // Query the database
    $sql = "SELECT username, password FROM admin WHERE username='$username' and password='$password'";
    $results = queryDatabase($sql);
    var_dump($results);
    echo "<br>";
    if (mysqli_num_rows($results) > 0) {
        echo "found enough rows";
        $_SESSION['adminuser'] = $username;
        // If the username/password combo is found: set the session data & renavigate to list_entries.php
        header('location: list_entries.php');
    }else {
        // If the username/password isn't found, navigate back to the login page.
        // header('location: admin_login.php');
    }

}else {
    // Send the user back to login page
    header('location: admin_login.php');
}