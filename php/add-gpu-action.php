<?php
session_start();
include("../include/link.php");
 $shortname = $_POST["shortName"];
 $longname = $_POST["longName"];
 $producter = $_POST["producter"];
 $price = $_POST["price"];
 $fast = $_POST["fast"];
 $type = $_POST["type"];
 $size = $_POST["size"];
 $power = $_POST["power"];
 



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
 if($UploadOk == 1){
    $query = "INSERT INTO `gpu`
(`GPU-image`, `GPU-longName`, `GPU-producter`,
 `GPU-price`, `GPU-shortName`, `GPU-fast`, `GPU-typeMemory`, `GPU-sizeMemory`, `GPU-Power`)
 VALUES 
 ('$target_file','$longname','$producter',
  '$price','$shortname','$fast','$type','$size','$power')";

  if(mysqli_query($link, $query) === true)
  echo'<script>alert("کالا با موفقیت اضافه شد");</script>';
else
echo'<script>alert("خطا");</script>';
 }else
echo'<script>alert("خطا");</script>';

mysqli_close($link);
?>
<script>location.replace("add.php");</script>