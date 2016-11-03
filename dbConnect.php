<?php
    // Connect to database
    $db = mysqli_connect("silva.computing.dundee.ac.uk", "craigwatt", "AC32006");

    // Select database
    mysqli_select_db($db, "craigwattdb");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "";
?>