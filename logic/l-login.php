<?php
include_once "../classes/Helper.php";
include_once "../classes/User.php";

$h = new Helper();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($h->isValidPassword($username, $password)) {
        echo "Entry Granted";
    } else {
        echo "Entry Denied";
    }
} else {
    echo "not set";
}