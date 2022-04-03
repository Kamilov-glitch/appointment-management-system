<?php

include_once "partials/header.php";
include_once "../logic/l-signup.php";
include_once "../classes/Helper.php";

$h = new Helper();
if (isset($_SESSION['errors']))  $errors = $_SESSION['errors'];

?>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h4 class="modal-title">Create your new profile</h4>
        </div>
        <div class="card-body">
            <form action="../logic/l-signup.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name:</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username:</label>
                    <input type="text" name="username">
                    <div class = "text-danger"><small><?php echo $errors['username'] ?></small></div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Email:</label>
                    <input type="text" name="email">
                    <div class = "text-danger"><small><?php echo $errors['email'] ?></small></div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password:</label>
                    <input type="password" name="password">
                    <div class = "text-danger"><small><?php echo $errors['password'] ?></small></div>
                </div>

                <div class="form-group">
                    <label for="confirm-password" class="col-sm-2 control-label">Password:</label>
                    <input type="password" name="confirm-password">
                </div>
                <div class = "text-danger"><small><?php echo $errors['all'] ?></small></div>

                <div class="form-group">
                    <button class="btn btn-success" name="submit">Register</button>
                </div>

                <div class="card-footer">
                    <p class="card-text">Have an account?
                        <a href="login.php">Click here </a>
                        to sign in
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include "partials/footer.php";

?>

