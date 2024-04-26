<?php include("../include/header.php"); ?>
<div class="container main-kala">

<form action="buy-GPU-action.php" method="post">
<div class="col-12 col-md-4 right">
    <div class="col-12">
        <img class="photo-kala-big" src="../img/4090.png" alt="">
    </div>
    <div class="col-12 right-bottom">

        <?php
            for ($i=0; $i < 4; $i++) { 
                echo('<img class="photo-kala-mini" src="../img/4090.png" alt="">');
            }
        ?>
    </div>
</div>


<div class="col-12 col-md-7 left" >
    <div class="left-top">
        <h1>کارت گرافیک Asus ROG Strix RTX 4090 24Gb OC Edition</h1>
    </div>
    <div class="left-center">
        <p>تولیدکننده: ASUS / کارت گرافیک ASUS</p>
        <p>قیمت : 100,000,000</p>
    </div>
    <div class="left-bottom">
        <ul>
            <li>نام پردانده گرافیکی : RTX 4090 OC</li>
            <li>سرعت هسته : 2640Mhz</li>
            <li>نوع حافظه : GDDR6X</li>
            <li>حجم حافظه : 24Gb</li>
            <li>توان مصرفی : 450W</li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<div class="buy-button">
            <input type="text" name="id" id="id" value="3" hidden>
            <input type="submit" value="خرید">
        </div>

        </from>
</div>
<?php include("../include/footer.php"); ?>