<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تغیر پروفایل</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style-all.css">
    <link rel="stylesheet" href="../css/profile.css">

</head>
<body>
    <div class="container">
        <form action="action-Profile.php" method="post">
            <div class="row">

                <div class="left col-12 col-md-4">
                    <div class="row">
                        <img class="col-12" src="../img/ProfileDefualtUsers.png" alt="your profile" style="width:90%;"><br>
                        <input disabled type="file" id="file" name="file"><br>
                        <input disabled type="reset" id="reset" name="reset" value="بازنشانی تصویر">
                    </div>
                </div>

                <div class="right col-12 col-md-7">
                    <label for="realname">نام واقعی</label>
                    <input type="text" name="realname" id="realname" value="<?php echo("{$_SESSION["realname"]}"); ?>"><br>
                    <label for="username">نام کاربری</label>
                    <input type="text" name="username" id="username" value="<?php echo("{$_SESSION["username"]}"); ?>"><br>
                    <label for="email">ایمیل</label>
                    <input type="email" name="email" id="email" value="<?php echo("{$_SESSION["email"]}"); ?>"><br>
                    <label id="address" for="address">آدرس کامل:</label>
                    <textarea name="address" id="address" cols="50" rows="5" ></textarea>
                    <div class="clear"></div>
                    <input id="pass-change" type="button" value="تغیر رمز عبور" onclick="Pass()">
                    <div class="password d-none">
                        <label for="password">رمز عبور</label>
                        <input type="password" name="password" id="password" value="<?php echo("{$_SESSION["password"]}"); ?>"><br>
                        <label for="repassword">تکرار رمز </label>
                        <input type="password" name="repassword" id="repassword" value="<?php echo("{$_SESSION["password"]}"); ?>">
                    </div>
                    <input type="reset" value="بازنشانی تنظیمات">
                    <div class="footer">
                        <input type="button" onclick="Home()" value="خانه">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-md-4 submit">
                    <input type="submit" value="ذخیره تغیرات">
                    <input type="button" onclick="logout()" value="خارج شدن">
                </div>
                <div class="col-7"></div>
            </div>
        </form>
    </div>

    <script src="../js/profile.js"></script>
</body>
</html>