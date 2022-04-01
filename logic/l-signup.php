<?php
include "../classes/Helper.php";
$h = new Helper();

if (isset($_POST['name']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}