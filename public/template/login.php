<!doctype html>
<html lang="en">
<?php include 'layout.php'; ?>
<body>
<div class="container">

    <section>
        <div id="container_demo">
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div class="row">
                    <div class="col-md-offset-3 col-xs-12 col-sm-off-3 col-lg-offset-3">
                        <div id="login" class="animate form">
                            <form action="mysuperscript.php" autocomplete="on">
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname"> Your email or username </label>
                                    <input id="username" name="username" required="required" type="text"
                                           placeholder="nuongnguyen or nuong14pt@gmail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password"
                                           placeholder="******"/>
                                </p>
                                <p class="keeplogin">
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping"/>
                                    <label for="loginkeeping">Keep me logged in</label>

                                <p class="signin button">
                                    <input type="submit" value="Submit"/>
                                </p>

                                <p class="login button">
                                    <a href="http://cookingfoodsworld.blogspot.in/" target="_blank"></a>
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-3 col-xs-12 col-sm-off-3 col-lg-offset-3">

                        <div id="register" class="animate form">
                            <form action="mysuperscript.php" autocomplete="on">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text"
                                           placeholder="nuongnguyen1996"/>
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail"> Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email"
                                           placeholder="nuong14pt@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password"
                                           placeholder="*****"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd">Please confirm your
                                        password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required"
                                           type="password" placeholder="*****"/>
                                </p>
                                <p class="signin button">
                                    <input type="submit" value="Submit"/>
                                </p>
                                <p class="change_link">
                                    Already a member ?
                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php include 'script.php'; ?>
</body>
</html>
