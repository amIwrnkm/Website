<?php
include("../include/header-sign.php");
?>
            <div class="main row">
                <form action="action-login.php" method="POST" name="register">
                    <input class="col-12 col-md-8" id="username" type="username" placeholder="username" name="username"><br>
                    <input class="col-12 col-md-8" id="password" type="password" placeholder="password" name="password"><br>
                
                    <input type="submit" onclick="" value="login"/>
                </form>
            </div>
            <div class="line"></div>
            <div class="footer row">
                <a class="col-6 col-sm-3" href="sign.php">i don't have account</a>

<?php
include("../include/footer-sign.php");
?>