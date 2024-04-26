<?php
session_start();
$id = $_POST['id'];
include("../include/link.php");
if(mysqli_connect_errno())
    exit("خطایی با شرح زیر رخ داده است".mysqli_connect_error());

$query="SELECT * FROM `GPU` WHERE `GPU-code` = '$id';";
$result =mysqli_query($link ,$query);

$row = mysqli_fetch_array($result);
$_SESSION["isFlag"] = true;
$_SESSION["pro_image"] = $row["GPU-image"];
$_SESSION["pro_name"] = $row["GPU-longName"];
$_SESSION["pro_price"] = $row["GPU-price"];
mysqli_close($link);
?>
<script>
    location.replace("buy.php");
</script>
