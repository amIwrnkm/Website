<?php
include("../include/header.php");

?>
<div class="container">
    <div class="row">
<?php
include("../include/link.php");
$querycount = "SELECT COUNT(`CPU-code`) AS count FROM `cpu`";
$resultcount = mysqli_query($link ,$querycount);

$rowcount = mysqli_fetch_array($resultcount);
$count = $rowcount["count"];


for ($i=1; $i <= $count; $i++) { 
    $query = "SELECT`CPU-image`, `CPU-name`, `CPU-price`, `CPU-address` FROM `cpu` WHERE `CPU-code` = $i";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

    echo('
    <div style="margin-bottom: 30px;" class="col-6 col-sm-4 col-md-3">
        <div style="border: 2px solid;border-radius: 15px;"><a href="'.$row["CPU-address"].'.php">
            <img src="'.$row["CPU-image"].'" class="producte-img"/>
            <p class="product-Price">: نام‌محصول  </br>'.$row["CPU-name"].'</p>
            <p class="product-Price"> : قیمت </br> '.$row["CPU-price"].'</p>
        </a></div>
    </div>
    ');
}

?>
</div></div>
<?php
include("../include/footer.php");
?>