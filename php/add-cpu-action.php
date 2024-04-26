<?php
session_start();
include("../include/link.php");
 $name = $_POST["name"];
 $core = $_POST["core"];
 $producter = $_POST["cpu-producter"];
 $price = $_POST["cpu-price"];
 $field = $_POST["field"];
 $socket = $_POST["socket"];
 $Memory = $_POST["Memory"];
 $power = $_POST["cpu-power"];
 



$target_dir = "../img/";
 $target_file = $target_dir . $_FILES["image"]["name"];
 $UploadOk = 1;
 $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
 if(file_exists($target_file))
 {
    echo'<script>alert("پرونده ایی با همین نام وجود دارد");</script>';
    $UploadOk = 0;
 }
$imagefiletype != strtolower($imagefiletype);

 if($UploadOk == 0){
    echo'<script>alert("پرونده به سرویس دهنده منتقل نشد");</script>';
 }
 else{
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
        echo'<script>alert("اضافه کردن کالا موفقیت آمیز بود");</script>';
    }else{
        echo'<script>alert("خطا در ارسال پرونده به سرویس دهنده رخ داده است");</script>';
    }
 }
$test=$_FILES["image"]["tmp_name"];
 if($UploadOk == 1){
    $query = "INSERT INTO `cpu`
(`CPU-image`, `CPU-name`, `CPU-producer`,
 `CPU-price`, `CPU-core`, `CPU-field`, `CPU-socket`, `CPU-memory`, `CPU-Power`)
 VALUES 
 ('$target_file','$name','$producter',
  '$price','$core','$field','$socket','$Memory','$power";

  if(mysqli_query($link, $query) === true)
  echo'<script>alert("کالا با موفقیت اضافه شد");</script>';
else
echo'<script>alert("خطا");</script>';
 }else
echo'<script>alert("خطا");</script>';

mysqli_close($link);
?>
<script>location.replace("add.php");</script>