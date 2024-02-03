function check(){
    var username = '';
    username = document.getElementById("username").value;
    if (username == '')
        alert('وارد کردن نام کاربری الزامی است');
    else{
        var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید");
        if(r == true)
        {
            document.register.submit();
        }
    }
}