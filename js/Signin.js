var username = "1"; var passfld = false;
var password; var password2;
var botfld = false; var eror; var right;
function start(){
    document.getElementById("username").focus();
    username = document.getElementById("username").value;
    document.getElementById("password").focus();
    password = document.getElementById("password").value;
    document.getElementById("password1").focus();
    password2 = document.getElementById("password1").value;
    eror = document.getElementById("eror");
    right = document.getElementById("true");
}    
function bot()
{
    botfld = true;
    if(password == password2)
    passfld = true;
}
function check()
{
    if ((passfld == false) || (botfld == false))
    {eror.style.display = "block";}
    else if((passfld == true) && (botfld == true))
    {right.style.display = "block";}
}
