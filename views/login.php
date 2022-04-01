<?php

include "partials/header.php";

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 50px">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="../index.php" class="navbar-brand">
                <h1>APM</h1>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span><i class="fas fa-user"></i></span> Sign Up</a></li>
            <li style="margin-left: 13px"><a href="#"><span><i class="fas fa-sign-in-alt"></i></span> Login</a></li>
        </ul>
    </div>
</nav>

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