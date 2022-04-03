<?php
session_start();
include_once "views/partials/header.php";
if (!isset($_SESSION['username'])) {
    header("Location: views/login.php");
}
$username = $_SESSION['username'];
echo "Hola $username";

?>

<?php include_once "views/partials/footer.php"?>
