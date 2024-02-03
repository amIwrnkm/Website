<?php
include("../include/header-sign.php");
?>
            
<form action="action.php" method="POST" name="register">
    <input class="col-8 col-md-4" id="realname" type="text" placeholder="your name" name="realname"><br>
    <input class="col-8 col-md-4" id="username" type="username" placeholder="username" name="username"><br>
    <input class="col-8 col-md-4" id="email" type="email" placeholder="email" name="email"><br>
    <input class="col-8 col-md-4" id="password" type="password" placeholder="password" name="password"><br>
    <input class="col-8 col-md-4" id="repassword" type="password" placeholder="repassword" name="repassword"><br>

    <input type="button" onclick="check()" value="sign in"/>
</form>

<a class="col-3" href="../php/logn.php">i have accunt</a>

<?php
include("../include/footer-sign.php");
?>