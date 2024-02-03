<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تکنوزوم | مشخصات سخت افزاری</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/color-library.css">
    <link rel="stylesheet" media="only screen and (min-width: 0) and (max-width: 768px)" href="../css/mobail-mod.css">
    <link rel="stylesheet" href="../css/style-all.css">
</head>
<body>
    <div class="container asl">
        <header class="row">
            <div class="col-4 d-sm-none meno-hide">
                <div><button onclick="open()"><img class="mini-img" src="../img/another.png"></button></div>
            </div>
            <!--منوی حالت موبایل-->
            <div class="d-none menu">
                <div>
                    <div><button onclick="close()" class="menu-btnclose"></button></div>
                    <a href="../index.html"><img src="../img/Logo2.png" class="menu-logo"></a><br>
                    <form class="frm-search" role="search">
                        <button class="btn-search"><img class="photo-search" src="../img/Zoom.png" ></button>
                        <input class="input-search" type="search"  name="q" placeholder="جستوجو..." aria-label="Search through site content">
                    </form>
                    <ul>
                        <li><a href="../index.html">صفحه‌اصلی</a></li>
                        <li><a href="../php/Products.php">محصولات</a></li>
                        <li><a href="#">مقاله</a></li>
                        <li><a href="../php/about.php">درباره‌ما</a></li>
                        <li><a href="#">صفحه‌اصلی</a></li>
                    </ul>
                </div>
            </div>
            <!---->
            <div class="col-4 col-sm-3 col-md-5">
                <a href="../index.html"><img src="../img/Logo1.png" class="d-none d-md-block logo-site1"></a>
                <a href="../index.html"><img src="../img/Logo2.png" class="d-block d-md-none logo-site2"></a>
            </div>
            <div class="d-none d-sm-block col-5 col-md-5 search-box">
                <form class="frm-search" role="search">
                    <button class="btn-search"><img class="photo-search" src="../img/Zoom.png" ></button>
                    <input class="input-search" type="search"  name="q" placeholder="جستوجو..." aria-label="Search through site content">
                </form>
            </div>
            <div class="col-4 col-sm-4 col-md-2">
                <div class="header-right">
                    <div class="sign">
                        <a href="#"><img src="../img/sign.png" class="mini-img"></a>
                    </div>
                    <div class="logn">
                        <a href="#"><img src="../img/logn.png" class="mini-img"></a>
                    </div>
                </div>
            </div>
        </header>
        <nav class="d-none d-sm-block">
            <div class="row">
                <div class="col-2"><a href="../index.html"><p>خانه</p></a></div>
                <div class="col-2"><a href="../php/Products.php"><p>محصولات</p></a></div>
                <div class="col-2"><a href="#"><p>مقاله</p></a></div>
                <div class="col-2"><a href="../php/about.php"><p>درباره‌ما</p></a></div>
                <div class="col-2"></div>
            </div>
        </nav>
