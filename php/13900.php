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
        <h1>Intel Core i9 13900</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: Intel</p>
        <p>قیمت : 25,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>هسته : 24</li>
            <li>رشته : 32</li>
            <li>سوکت : LGA-1700</li>
            <li>سرعت : 5.8Ghz</li>
            <li>حافظه کش لایه سوم : 36</li>
            <li>توان مصرفی : 250W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div class="buy-button">
            <input type="text" name="id" id="id" value="13900" hidden>
            <input type="submit" value="خرید">
        </div>

        </form>
</div>
<?php
include("../include/footer.php");
?>