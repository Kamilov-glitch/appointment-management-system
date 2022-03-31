<?php

include "partials/header.php";

?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="../index.php" class="navbar-brand">
                    <h3>Website</h3>
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="../index.php">Home</a>
                </li>
            </ul>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">Login</a></li>
            <li>
                <div class="btn-nav">
                    <a href="signup" class="btn btn-primary btn-small navbar-btn">Sign Up!</a>
                </div>
            </li>
        </ul>
    </nav>
</div>

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h4 class="modal-title">Log in into your account</h4>
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
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