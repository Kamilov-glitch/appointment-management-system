<?php
session_start();
include_once "../classes/Helper.php";
include_once "../classes/User.php";
session_unset();
$h = new Helper();

$errors = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($h->isValidPassword($username, $password)) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
    } else {
        $errors = "Either username or password is wrong";
        $_SESSION['errors'] = $errors;
        header("Location: ../views/login.php");
    }
} else {
    echo "not set";
}