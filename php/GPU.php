<?php
include("../include/header.php");

?>
<div class="container">
    <div class="row">
<?php
include("../include/link.php");
$querycount = "SELECT COUNT(`GPU-code`) AS count FROM `gpu`";
$resultcount = mysqli_query($link ,$querycount);

$rowcount = mysqli_fetch_array($resultcount);
$count = $rowcount["count"];


for ($i=1; $i <= $count; $i++) { 
    $query = "SELECT `GPU-image`, `GPU-shortName`, `GPU-price`, `GPU-address` FROM `gpu` WHERE `GPU-code` = $i";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

    echo('
    <div class="col-6 col-sm-4 col-md-3">
        <div style="border: 2px solid;border-radius: 15px;"><a href="'.$row["GPU-address"].'.php">
            <img src="'.$row["GPU-image"].'" class="producte-img"/>
            <p class="product-Price">: نام‌محصول  </br>'.$row["GPU-shortName"].'</p>
            <p class="product-Price"> : قیمت </br> '.$row["GPU-price"].'</p>
        </a></div>
    </div>
    ');
}

?>
</div></div>
<?php
include("../include/footer.php");
?>