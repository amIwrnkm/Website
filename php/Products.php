<?php
include("../include/header.php");
?>
<section class="container">
    <div class="row">
        <div class="col-11"><p class="bold">کارت گرافیک</p></div>
    </div>
    <div class="row">
        <div style="border: 2px solid;border-radius: 15px;" class="col-1"><br><br><br><br><br>
        <br class="d-none d-xl-block"><br class="d-none d-md-block">
            <a href="GPU.php"><</a>
        </div>
        <div class="col-11">
            <div class="container">
                <div class="row">
<?php
$GPU =array("4070" ,"4070-ti" ,"4080" ,"4090");
$P =array("30,000,000" ,"40,000,000" ,"85,000,000" ,"100,000,000");
$E =array("" ,"" ,"d-none d-sm-block" ,"d-none d-md-block");
for($i = 0;$i <= 3; $i++){
    echo('
    
    <div  class="col-6 col-sm-4 col-md-3 '.$E[$i].'">
        <div style="border: 2px solid;border-radius: 15px;"><a href="'.$GPU[$i].'.php">
            <img src="../img/'.$GPU[$i].'.png" class="producte-img"/>
            <p class="product-Price">: نام‌محصول  </br>'.$GPU[$i].'</p>
            <p class="product-Price"> : قیمت </br> '.$P[$i].'</p>
        </a></div>
    </div>
    ');
}
?>
</div>
</div>
</div>
</div>

    <div class="row">
        <div class="col-11"><p class="bold">پردازنده</p></div>
    </div>
    <div class="row">        <div style="border: 2px solid;border-radius: 15px;" class="col-1"><br><br><br><br><br>
        <br class="d-none d-xl-block"><br class="d-none d-md-block">
            <a href="CPU.php"><</a>
        </div>
        <div class="col-11">
            <div class="container">
                <div class="row">
<?php
$CPUAddres = array("13100","13400","13600","13900");
$CPU =array("Core I3 13100" ,"Core I5 13400" ," Core I5 13600" ,"Core I9 13900");
$P =array("7,000,000" ,"10,000,000" ,"15,000,000" ,"25,000,000");
$E =array("" ,"" ,"d-none d-sm-block" ,"d-none d-md-block");
for($i = 0;$i <= 3; $i++){
    echo('
    <div class="col-6 col-sm-4 col-md-3 '.$E[$i].'">
        <div style="border: 2px solid;border-radius: 15px;"><a href="'.$CPUAddres[$i].'.php">
            <img src="../img/intel.png" class="producte-img"/>
            <p class="product-Price">: نام‌محصول  </br>'.$CPU[$i].'</p>
            <p class="product-Price"> : قیمت </br> '.$P[$i].'</p>
        </a></div>
    </div>
    ');
}
?>
</div>
</div>
</div>
</div>

</section>
<?php
include("../include/footer.php");
?>