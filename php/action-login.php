<?php
session_start();

if( isset($_POST['username']) && !empty($_POST['username'])&&
    isset($_POST['password']) && !empty($_POST['password']))
    {
    $username = $_POST['username'];
    $password = $_POST['password'];
    }
else
    exit("برخی از فیلدها مقدار دهی نشده");


$_SESSION["isFlag"] = false;

include("../include/link.php");
if(mysqli_connect_errno())
    exit("خطایی با شرح زیر رخ داده است".mysqli_connect_error());

$query="SELECT * FROM `users` WHERE username = '$username' AND password = '$password';";
$result =mysqli_query($link ,$query);

$row = mysqli_fetch_array($result);

if($row)
{
    $_SESSION["state_login"] = true;
    $_SESSION["realname"] = $row['realname'];
    $_SESSION["username"] = $row["username"];
    $_SESSION["password"] = $row["password"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["isFlag"] = false;
    $_SESSION["type"] = $row["type"];
?>
<script>alert("کاربر گرامی بازگشت شما موفقیت آمیز بود");</script>
<?php
}
else
{
?>
<script>alert("کلمه عبور یا نام کاربری یافت نشد");</script>
<?php
}


mysqli_close($link);

?>
<script>
    location.replace("index.php");
</script>