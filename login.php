<?php

include "db_config.php";

$username = $_POST['username'];
$password = $_POST['password'];

// YOUR LOGIN CREDENTIALS
if ($username === "Moro" && $password === "12345") {

    echo "<h2>Welcome, Moro!</h2>";
    echo "<p>Login successful.</p>";

} else {

    echo "<h2>Login Failed</h2>";
    echo "<p>Invalid username or password.</p>";

}

?>
