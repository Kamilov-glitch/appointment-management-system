<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: views/login.php");
}
$username = $_SESSION['username'];
include_once "views/partials/header.php";

?>

<?php include_once "views/partials/footer.php"?>
