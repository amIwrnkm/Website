<?php
include("../include/header.php");

if($_SESSION["state_login"])
{


?>

<div style="direction: rtl;" class="container">
        <div class="buy row">
            <div class="col-12 col-md-4">
                <a href="#"><img class="img" src="<?php echo("{$_SESSION["pro_image"]}"); ?>"></a>
            </div>
            <div style="text-align: right;margin-top: 30px;" class="col-12 col-md-8">
                <div><p class="name"><?php echo("{$_SESSION["pro_name"]}"); ?></p></div>
                <div style="margin-top: 60px;">
                    <p class="price"><?php echo("{$_SESSION["pro_price"]}"); ?> تومان</p><br>
                    <div style="text-align: left;">
                    <input class="buy-input" onclick="del()" type="button" id="del" name="del" value="حذف">
                    </div>
                </div>
            </div>
        </div>
        <div class="buy row">
            <div class="col-5 col-md-2">
                <p class="price-all"><?php echo("{$_SESSION["pro_price"]}"); ?> تومان</p>
            </div>
            <div class="sumbit col-7 col-md-8">
                <input class="buy-input" type="button" onclick="finish()" id="finish" name="finish" value="ادامه فرایند خرید">
            </div>
            <div class="col-2">
                <input class="buy-input" onclick="delAll()" type="button" name="del-all" id="del-all" value="حذف همه">
            </div>
        </div>
    </div>
 <script>
const num = document.querySelector(".number");
const remove = document.querySelector(".buy");
var i = 1;
        function plus(){
            num.textContent++;
            i++;
        }
        function minus(){
            if(num.textContent != 1)
            {
                i--;
                num.textContent = i;
            }
        }
        function delAll(){
            remove.removeChild();
        }
        function finish(){
            alert("به زودی...");
        }
        function del(){
            remove.removeChild();
        }
 </script>
<?php
}
else
{
    ?>
    <script>
        alert("ابتدا در سایت ثبت نام کنید");
        location.replace("sign.php");
    </script>
    <?php
}
include("../include/footer.php");
?>