<?php
if( isset($_POST['username']) && !empty($_POST['username'])&&
isset($_POST['password']) && !empty($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
}
else
exit("برخی از فیلدها مقدار دهی نشده");



$link =mysqli_connect("localhost", "root" ,"", "shop-db");
if(mysqli_connect_errno())
exit("خطایی با شرح زیر رخ داده است".mysqli_connect_error());

$query="SELECT * FROM `users` WHERE username = '$username' AND password = '$password';";
$result =mysqli_query($link ,$query);

$row = mysqli_fetch_array($result);

if($row)
echo("<p style='color:green;direction: rtl;'><b>{$row['realname']} به تکنوزوم خوش آمدید</b></p>");
else
echo("<P style='color:red;direction: rtl;'><b>نام کاربری یا کلمه عبور یافت نشد</b></p>");

echo('<a style="direction: rtl;" href="../index.html">Home</a>');
mysqli_close($link);
?>