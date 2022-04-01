<?php

include "partials/header.php";

?>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h4 class="modal-title">Create your new profile</h4>
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name:</label>
                    <input type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username:</label>
                    <input type="text" name="username">
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Email:</label>
                    <input type="text" name="email">
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password:</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Register</button>
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

