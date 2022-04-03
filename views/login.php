<?php

include "partials/header.php";
session_start();

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}

?>

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h4 class="modal-title">Log in into your account</h4>
        </div>
        <div class="card-body">
            <form action="../logic/l-login.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="submit" type="submit">Sign in</button>
                </div>
                <div class = "text-danger"><small><?php if (isset($_SESSION['errors'])) echo $errors ?></small></div>
            </form>
            <div class="card-footer">
                <p class="card-text">New here?
                    <a href="signup">Sign up</a></p>
            </div>
        </div>
    </div
</div>


<?php

include "partials/footer.php";

?>