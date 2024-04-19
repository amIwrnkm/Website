<?php
include("../include/header.php");
?>
<div class="container main-kala">
<form action="buy-action.php" method="post">

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
        <h1>Intel Core i5 13400</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: intel</p>
        <p>قیمت : 10,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>هسته : 6</li>
            <li>رشته : 12</li>
            <li>سوکت : LGA-1700</li>
            <li>سرعت : 4.6Ghz</li>
            <li>حافظه کش لایه سوم : 20Mb</li>
            <li>توان مصرفی : 148W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div class="buy-button">
            <input type="text" name="id" id="id" value="13400" hidden>
            <input type="submit" value="خرید">
        </div>
        </form>

</div>
<?php
include("../include/footer.php");
?>