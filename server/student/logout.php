<?php

session_start();

if (isset($_POST['logout'])) {

    // Unset all session variables
    $_SESSION = array();

    session_destroy();
    header('location: ../../student/login.php');
}
