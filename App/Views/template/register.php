<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<?php include '../layout/layout.php'; ?>
<body>
    <div class="wrapper">
        <?php include '../layout/header.php'; ?>
        <main class="main_login">
            <div class="container">
                <div class="login-block row">
                    <div class="col-md-4 col-sm-2"></div>
                    <div class="col-md-4 col-sm-8">
                        <div class="header">
                            <h2>Register</h2>
                        </div>
                        <form method="post" action="register.php" class="form-login-main">
                            <?php include('errors.php'); ?>

                            <div class="input-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="input-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password_1">
                            </div>
                            <div class="input-group">
                                <label for="confirm-password">Confirm password</label>
                                <input id="confirm-password" type="password" name="password_2">
                            </div>
                            <div class="input-group">
                                <button type="submit" class="btn btn-success" name="reg_user">Register</button>
                            </div>
                            <p>
                                Already a member? <a href="login.php">Sign in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include '../layout/footer.php'; ?>
    </div>
    <?php include '../layout/script.php'; ?>
</body>
</html>