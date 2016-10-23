<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 23/10/2016
 * Time: 16:38
 */

    echo "Starting connection...<br>";

    // Connect to database
    $db = mysql_connect("", "", "");

    // Select database
    mysql_select_db("delivrhyno");

    if(!$db) {
        echo mysql_error();
    }
    else {
        echo "Successfully connected. <br>";
    }
?>