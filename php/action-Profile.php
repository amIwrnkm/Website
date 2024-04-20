<?php
session_start();

$realname = $_POST['realname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['repassword'];
$email = $_POST['email'];
$address = $_POST['address'];


    if($password != $confirm)
    echo("<script>alert('رمز و تکرار آن مطابقت ندارند');</script>");

    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false)
    echo("<script>alert('پست الکتریکی وارد شده صحیح نیست');</script>");

 
include("../include/link.php");
if(mysqli_connect_errno())
    echo("<script>alert('خطایی با شرح زیر رخ داده است'".mysqli_connect_error().");</script>");

$query="UPDATE `users` SET `realname`='$realname',`username`='$username',`password`='$password',`email`='$email', `address` = '$address' WHERE `username`= '$username'";
mysqli_query($link, $query);
if(mysqli_query($link, $query) === true)
{
   $_SESSION["state_login"] = true;
   $_SESSION["realname"] = $realname;
   $_SESSION["username"] = $username;
   $_SESSION["password"] = $password;
   $_SESSION["address"] = $address;
   $_SESSION["email"] = $email;
?>
    ?><script>alert("تغیرات با موفقیت انجام شد");</script><?php
}
else
{
    ?> <script>alert("تغیرات انجام نشد لطفا بعدا دوباره امتحان کنید");</script> <?php
}

mysqli_close($link);

?>
<script>
    location.replace("index.php");
</script>


