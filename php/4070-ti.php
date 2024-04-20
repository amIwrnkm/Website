<?php include("../include/header.php"); $_SESSION["isFlag"] = false;?>
<div class="container main-kala">

<form action="buy-action.php" method="post">
<div class="col-12 col-md-4 right">
    <div class="col-12">
        <img class="photo-kala-big" src="../img/4070-ti.png" alt="">
    </div>
    <div class="col-12 right-bottom">

        <?php
            for ($i=0; $i < 4; $i++) { 
                echo('<img class="photo-kala-mini" src="../img/4070-ti.png" alt="">');
            }
        ?>
    </div>
</div>


<div class="col-12 col-md-7 left" >
    <div class="left-top">
        <h1>کارت گرافیک Asus TUF RTX 4070 Ti 12Gb OC Edition</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: ASUS / کارت گرافیک ASUS</p>
        <p>قیمت : 40,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>نام پردانده گرافیکی : RTX 4070 ti OC</li>
            <li>سرعت هسته : 2760Mhz</li>
            <li>نوع حافظه : GDDR6X</li>
            <li>حجم حافظه : 12Gb</li>
            <li>توان مصرفی : 285W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div class="buy-button">
            <input type="text" name="id" id="id" value="407000" hidden>
            <input type="submit" value="خرید">
        </div>
        </form>

</div>
<?php include("../include/footer.php"); ?>