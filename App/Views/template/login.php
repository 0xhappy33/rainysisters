<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<?php include '../layout/layout.php'; ?>
<body>
<?php include '../layout/header.php'; ?>
<main class="main_login">
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</main>

<?php include '../layout/footer.php'; ?>
<?php include '../layout/script.php'; ?>

</body>
</html>