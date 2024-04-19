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
        <h1>Intel Core i3 13100</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: Intel</p>
        <p>قیمت : 7,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>هسته: 4</li>
            <li>رشته: 8</li>
            <li>سوکت:LGA-1700</li>
            <li>سرعت : 4.5Ghz</li>
            <li>حافظه کش لایه سوم : 12Mb</li>
            <li>توان مصرفی : 89W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div class="buy-button">
            <input type="text" name="id" id="id" value="13100" hidden>
            <input type="submit" value="خرید">
        </div>
        </form>

</div>
<?php
include("../include/footer.php");
?>