function check(){
    document.getElementById("masaig").innerHTML="";
    document.getElementById("Pass1js").focus();
    var pas1 = document.getElementById("Pass1js").value;
    document.getElementById("Pass2js").focus();
    var pas2 = document.getElementById("Pass2js").value;
    if(pas1 != pas2)
    {
        document.getElementById("masaig").innerHTML="Eror";
        document.getElementById("Pass1js").value="";
        document.getElementById("Pass2js").value="";
    }
    else
    {
        document.getElementById("Pass1js").value="";
        document.getElementById("Pass2js").value="";
    }
}