<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 23/10/2016
 * Time: 16:38
 */

    echo "Starting connection...<br>";

    // Connect to database
    $db = mysqli_connect("silva.computing.dundee.ac.uk", "anthonygrimes", "AC32006");

    // Select database
    mysqli_select_db($db, "anthonygrimesdb");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    echo "Connected successfully";
?>