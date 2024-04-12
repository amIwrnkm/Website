<?php
session_start();
$flag =false;
if( isset($_POST['realname']) && !empty($_POST['realname']) &&
    isset($_POST['username']) && !empty($_POST['username'])&&
    isset($_POST['password']) && !empty($_POST['password'])&&
    isset($_POST['confirm']) && !empty($_POST['confirm'])&&
    isset($_POST['email']) && !empty($_POST['email'])){
        $flag = true;
        $realname = $_POST['realname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $email = $_POST['email'];
    }else if($flag)
    exit("برخی از فیلدها مقدار دهی نشده");

    if($password != $confirm)
    exit("کلمه عبور و تکرار آن مشابه نیست");

    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false)
    exit("پست الکترونیک وارد شده صحیح نیست");

    $link =mysqli_connect("localhost", "root" ,"", "shop-db");
if(mysqli_connect_errno())
    exit("خطایی با شرح زیر رخ داده است".mysqli_connect_error());

$query="INSERT INTO `users`(`realname`, `username`, `password`, `email`, `type`) VALUES ('$realname','$username','$password','$email','0')";
if(mysqli_query($link, $query) === true)
{
   $_SESSION["state_login"] = true;
   $_SESSION["realname"] = $realname;
   $_SESSION["password"] = $password;
   $_SESSION["email"] = $email;
?>
    ?><script>alert("عضویت شما با موفقیت انجام شد");</script><?php
}
else
{
    ?> <script>alert("عضویت شما در سایت انجام نشد لطفا دوباره تلاش کنید");</script> <?php
}

mysqli_close($link);

?>
<script>
    location.replace("index.php");
</script>


