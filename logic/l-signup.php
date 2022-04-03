<?php
session_start();
include_once "../classes/Helper.php";
include_once "../classes/User.php";
$h = new Helper();



$errors = [
    'name' => '',
    'username' => '',
    'email' => '',
    'password' => '',
    'all' => ''
];

//$_SESSION['errors'] = $errors;

if (isset($_POST['submit']))
{


    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($h->isEmpty(array($name, $username, $email, $password, $confirm_password))) {
        $errors['all'] = 'All fields must be filled';
    }

    if (!$h->passwordsMatch($password, $confirm_password)) {
        $errors['password'] = 'Password and Confirm Password fields must match';
    }

    if (!$h->isValidEmail($email)) {
        $errors['email'] = 'Not a valid email address';
    }

    if (!$h->isValidLength($username)) {
        $errors['username'] = 'Username must be between 6 and 16 characters';
    }

    if (!$h->isValidLength($password)) {
        $errors['password'] = 'Password must be between 6 and 16 characters';
    }

    if (!$h->isSecure($password)) {
        $errors['password'] = "Password must contain one lower, one upper case character and a numbers";
    }

    if ($h->exists($username)) {
        $errors['username'] = "This username is already in use, please choose another one";
    }

    if (!$h->isNotEmpty($errors)) {
        $user = new User($name, $username, $email, $password);
        $user->addUserToDatabase();
        $errors = [
            'name' => '',
            'username' => '',
            'email' => '',
            'password' => '',
            'all' => ''
        ];
        session_unset();
        header("Location: ../index.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: ../views/signup.php");
    }

}