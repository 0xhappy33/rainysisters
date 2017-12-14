<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<?php include '../layout/layout.php'; ?>
<body>
<?php include '../layout/header.php'; ?>
<main class="main_login">
    <div class="container">
        <div class="login-block row">
            <div class="col-md-4 col-sm-2"></div>
            <div class="col-md-4 col-sm-8">
                <div class="header">
                    <h2>Login</h2>
                </div>
                <form method="post" action="login.php" class="form-login-main">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required placeholder="username">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required placeholder="password">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn btn-success" name="login_user">Login</button>
                    </div>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include '../layout/footer.php'; ?>
<?php include '../layout/script.php'; ?>

</body>
</html>