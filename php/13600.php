<?php
include("../include/header.php");
?>
<div class="container main-kala">


<div class="col-12 col-md-4 right">
    <div class="col-12">
        <img class="photo-kala-big" src="../img/intel.png" alt="">
    </div>
    <div class="col-12 right-bottom">

        <?php
            for ($i=0; $i < 4; $i++) { 
                echo('<img class="photo-kala-mini" src="../img/intel.png" alt="">');
            }
        ?>
    </div>
</div>


<div class="col-12 col-md-7 left" >
    <div class="left-top">
        <h1>Intel Core i5 13600</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: Intel</p>
        <p>قیمت : 15,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>هسته : 14</li>
            <li>رشته : 20</li>
            <li>سوکت : LGA-1700</li>
            <li>حافظه کش لایه سوم : 24Mb</li>
            <li>سرعت : 5.1Ghz</li>
            <li>توان مصرفی : 180W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>


</div>
<?php
include("../include/footer.php");
?>