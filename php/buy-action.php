<?php
session_start();
$id = $_POST['id'];
$link =mysqli_connect("localhost", "root" ,"", "shop-db");
if(mysqli_connect_errno())
    exit("خطایی با شرح زیر رخ داده است".mysqli_connect_error());

$query="SELECT * FROM `products` WHERE `pro_code` = '$id';";
$result =mysqli_query($link ,$query);

$row = mysqli_fetch_array($result);
$_SESSION["pro_image"] = $row["pro_image"];
$_SESSION["pro_name"] = $row["pro_name"];
$_SESSION["pro_price"] = $row["pro_price"];
mysqli_close($link);
?>
<script>
    location.replace("buy.php");
</script>
