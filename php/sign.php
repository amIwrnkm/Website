<?php
include("../include/header-sign.php");
?>       
            <div class="main row">
                <form action="action-register.php" method="POST" name="register">
                    <input class="col-12 col-md-8" id="realname" type="text" placeholder="your name" name="realname"><br>
                    <input class="col-12 col-md-8" id="username" type="username" placeholder="username" name="username"><br>
                    <input class="col-12 col-md-8" id="email" type="email" placeholder="email" name="email"><br>
                    <input class="col-12 col-md-8" id="password" type="password" placeholder="password" name="password"><br>
                    <input class="col-12 col-md-8" id="confirm" type="password" placeholder="confirm password" name="confirm"><br>
                
                    <input type="submit" value="sign in"/>
                </form>
            </div>
            <div class="line"></div>
            <div class="footer row">
                <a class="col-6 col-sm-3" href="logn.php">i already have account</a>
<?php
include("../include/footer-sign.php");
?>