<?php
include("../include/header.php");
?>
<div class="container main-kala">


<div class="col-12 col-md-4 right">
    <div class="col-12">
        <img class="photo-kala-big" src="../img/4070.png" alt="">
    </div>
    <div class="col-12 right-bottom">

        <?php
            for ($i=0; $i < 4; $i++) { 
                echo('<img class="photo-kala-mini" src="../img/4070.png" alt="">');
            }
        ?>
    </div>
</div>


<div class="col-12 col-md-7 left" >
    <div class="left-top">
        <h1>کارت گرافیک Asus Dual RTX 4070 12Gb OC Edition</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: ASUS / کارت گرافیک ASUS</p>
        <p>قیمت : 30,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>نام پردانده گرافیکی : RTX 4070 OC</li>
            <li>سرعت هسته : 2550Mhz</li>
            <li>نوع حافظه : GDDR6X</li>
            <li>حجم حافظه : 12Gb</li>
            <li>توان مصرفی : 200W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>


</div>
<?php
include("../include/footer.php");
?>