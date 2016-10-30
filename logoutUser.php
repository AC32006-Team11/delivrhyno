<?php include 'header.php'; ?>

<?php

if ( isset($_SESSION["loggedIn"]) == "loggedIn") {
    session_unset();
    session_destroy();

    echo '<h1>You have been successfully logged out</h1>';
} else {
    echo '<h1>No user logged in</h1>';
} ?>

<?php include 'footer.php'; ?>