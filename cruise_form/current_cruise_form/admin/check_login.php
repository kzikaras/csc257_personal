<?php
require "../utils/data_layer.php";
require_once "user.class.php";
// If the request is a post  -- meaning the form posted data to this page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "in the post";
    // Set the max ession time
    ini_set('session.gc_maxlifetime', 3600);
    session_set_cookie_params(3600);
    // Start the PHP session
    session_start();
    // obtain username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "$password";
    echo"$username";
    // Query the database
    $sql = "SELECT username, password, first_name, last_name FROM admin WHERE username='$username' and password='$password'";
    $results = queryDatabase($sql);
    var_dump($results);
    echo "<br>";
    if (mysqli_num_rows($results) > 0) {
        $userArray = mysqli_fetch_assoc($results);
        $adminUser = new User(
            $userArray['first_name'], 
            $userArray['last_name'],
            $userArray['username'],
            'admin'
        );
        $_SESSION['adminuser'] = serialize($adminUser);
        // If the username/password combo is found: set the session data & renavigate to dashboard.php
        header('location: dashboard.php');
    }else {
        // If the username/password isn't found, navigate back to the login page.
        // header('location: admin_login.php');
    }

}else {
    // Send the user back to login page
    header('location: admin_login.php');
}