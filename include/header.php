<?php
session_start();
?>
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
    <link rel="stylesheet" href="../css/products.css">
    <link rel="stylesheet" href="../css/buy.css">
    <link rel="icon" type="png" href="../img/Logo2.png">
</head>
<body>
    <div class="container asl">
        <header class="row">
            <div class="col-4 d-sm-none meno-hide">
            <button onclick="openMenu()"><img class="mini-img" src="../img/another.png"></button>
            </div>
            <!--منوی حالت موبایل-->
            <div class="d-none d-sm-none menu">
                <div>
                    <div><button onclick="closeMenu()" class="menu-btnclose"></button></div>
                    <a href="../index.php"><img src="../img/Logo2.png" class="menu-logo"></a><br>
                    <div  class="d-block search-box">
                        <form class="frm-search" role="search">
                            <button class="btn-search"><img class="photo-search" src="../img/Zoom.png" ></button>
                            <input class="input-search" type="search"  name="q" placeholder="جستوجو..." aria-label="Search through site content">
                        </form>
                    </div>
                    <ul>
                        <li><a href="../index.php">صفحه‌اصلی</a></li>
                        <li><a href="../php/Products.php">محصولات</a></li>
                        <li><a href="../php/buy.php">سبدخرید</a></li>
                        <li><a href="../php/about.php">درباره‌ما</a></li>

                        <?php if($_SESSION["type"] == 1){ ?>
                        <li><a href="../php/add.php">کالای‌جدید</a></li>
                        <?php }?>

                    </ul>
                </div>
            </div>
            <!---->
            <div class="col-4 col-sm-3 col-md-5">
                <a href="../index.php"><img src="../img/Logo1.png" class="d-none d-md-block logo-site1"></a>
                <a href="../index.php"><img src="../img/Logo2.png" class="d-block d-md-none logo-site2"></a>
            </div>
            <div class="d-none d-sm-block col-5 col-md-5 search-box">
                <form class="frm-search" role="search">
                    <button class="btn-search"><img class="photo-search" src="../img/Zoom.png" ></button>
                    <input class="input-search" type="search"  name="q" placeholder="جستوجو..." aria-label="Search through site content">
                </form>
            </div>
            <div class="col-4 col-sm-4 col-md-2">
                <?php
                if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
                {
                ?>
                <div class="header-right-login">
                    <a href="../php/profile">
                        <div class="login-right">
                            <img src="../img/ProfileDefualtUsers.png" class="mini-img">
                        </div>
                        <div class="login-left">
                            <p><?php echo(" {$_SESSION["realname"]} ") ?></p>
                        </div>
                    </a>
                </div>
                <?php
                }
                else
                {
                ?>
                <div class="header-right">
                    <div class="sign">
                        <a href="../php/sign.php"><img src="../img/sign.png" class="mini-img"></a>
                    </div>
                    <div class="logn">
                        <a href="../php/logn.php"><img src="../img/logn.png" class="mini-img"></a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </header>
        <nav class="d-none d-sm-block">
            <div class="row">
                <div class="col-2"><a href="../index.php"><p>خانه</p></a></div>
                <div class="col-2"><a href="../php/Products.php"><p>محصولات</p></a></div>
                <div class="col-2"><a href="../php/buy.php"><p>سبدخرید</p></a></div>
                <div class="col-2"><a href="../php/about.php"><p>درباره‌ما</p></a></div>

                <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == 1){ ?>
                <div class="col-2"><a href="../php/add.php"><p>کالای‌جدید</p></a></div>
                <?php
                    }else{
                ?>
                <div class="col-2"></div>
                <?php } ?>
            </div>
        </nav>
