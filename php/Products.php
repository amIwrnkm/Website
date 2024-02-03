<?php
include("../include/header.php");
?>
<section class="container">
    <div class="row">
        <div class="col-11"><p class="bold">کارت گرافیک</p></div>
        <div class="col-1"><p class="squere">&nbsp;</p></div>
    </div>
    <div class="row">
<?php
$GPU =array("4070" ,"4070 ti" ,"4080" ,"4090");
$P =array("30,000,000" ,"40,000,000" ,"85,000,000" ,"100,000,000");
$E =array("" ,"" ,"d-none d-sm-block" ,"d-none d-md-block");
for($i = 0;$i <= 3; $i++){
    echo('
    <div class="col-6 col-sm-4 col-md-3 '.$E[$i].'">
        <div>
            <img src="../img/'.$GPU[$i].'.png" class="producte-img"/>
            <p class="product-Name">: نام‌محصول  </br>'.$GPU[$i].'</p>
            <p class="product-Price"> : قیمت </br> '.$P[$i].'</p>
        </div>
    </div>
    ');
}
?>
</div>

    <div class="row">
        <div class="col-11"><p class="bold">پردازنده</p></div>
        <div class="col-1"><p class="squere">&nbsp;</p></div>
    </div>
    <div class="row">
<?php
$CPU =array("Core I3 13100" ,"Core I5 13400" ," Core I5 13600" ,"Core I9 13900");
$P =array("7,000,000" ,"10,000,000" ,"15,000,000" ,"25,000,000");
$E =array("" ,"" ,"d-none d-sm-block" ,"d-none d-md-block");
for($i = 0;$i <= 3; $i++){
    echo('
    <div class="col-6 col-sm-4 col-md-3 '.$E[$i].'">
        <div>
            <img src="../img/intel.png" class="producte-img"/>
            <p class="product-Name">: نام‌محصول  </br>'.$CPU[$i].'</p>
            <p class="product-Price"> : قیمت </br> '.$P[$i].'</p>
        </div>
    </div>
    ');
}
?>
    </div>

</section>
<?php
include("../include/footer.php");
?>