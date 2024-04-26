<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اضافه کردن کالا</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/add.css">
    <link rel="stylesheet" href="../css/style-all.css">
</head>
<body>
    <?php
    if(isset($_SESSION["type"]) && $_SESSION["type"] == 1)
    {
    ?>

<div class="container">
    <div class="row">
        <div class="main gpu col-12 col-sm-10 col-md-8">
            <h2>اضافه کردن یک کارت گرافیک</h2><br><br>
<form action="add-gpu-action.php" method="post" enctype="multipart/form-data">
            <input required type="text" name="longName" id="longName" placeholder="نام بلند"><br>
            <input required type="text" name="shortName" id="shortName" placeholder="نام کوتاه"><br>
            <input required type="text" name="producter" id="producter" placeholder="شرکت سازنده"><br>
            <input required type="number" name="price" id="price" placeholder="قیمت کالا"><br>
            <input required type="text" name="fast" id="fast" placeholder="سرعت هسته"><br>
            <input required type="text" name="type" id="type" placeholder="نوع حافظه"><br>
            <input required type="text" name="size" id="size" placeholder="حجم حافظه"><br>
            <input required type="text" name="power" id="power" placeholder="توان مصرفی"><br>
            <input required type="file" name="image" id="image"><br>
            <input type="submit" value="اضافه کردن">
</form>
        </div>
        <div class="main cpu d-none col-12 col-sm-10 col-md-8">
            <h2>اضافه کردن پردازنده</h2>
<form action="add-cpu-action.php" method="post" enctype="multipart/form-data">
            <input required type="text" name="name" id="name" placeholder="نام پردازنده">
            <input required type="text" name="cpu-producter" id="cpu-producter" placeholder="نام شرکت سازنده">
            <input required type="number" name="cpu-price" id="cpu-price" placeholder="قیمت پردازنده">
            <input required type="number" name="core" id="core" placeholder="تعداد هسته">
            <input required type="number" name="field" id="field" placeholder="تعداد رشته">
            <input required type="text" name="socket" id="socket" placeholder="سوکت">
            <input required type="text" name="Memory" id="Memory" placeholder="حافظه">
            <input required type="text" name="cpu-power" id="cpu-power" placeholder="توان مصرفی">
            <input required type="file" name="cpu-image" id="cpu-image">
            <input type="submit" value="اضافه کردن">
            </form>
        </div>
    </div>
    <div class="footer row">
        <div class="main col-12 col-sm-10 col-md-8">
            <input type="button" onclick="home();" value="خانه">
            <input type="button" id="chang" onclick="CG();" value="اضافه کردن پردازنده">
        </div>
    </div>
</div>

<script src="../js/add.js"></script>


<?php }else{?>
<script>location.replace("index.php");
</script>
<?php } ?>


</body>
</html>