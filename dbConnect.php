<?php
    // Connect to database
$db = mysqli_connect("", "", "");

    // Select database
mysqli_select_db($db, "");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "";
?>
