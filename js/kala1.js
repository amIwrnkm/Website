 var photo='"photokala"';
 var kala = "<div><img src='/img/laptap test.png' class="+photo+"><p class='bold'> اسم محصول </p><p class='bold'>قیمت:10000000 </p></div>";
 var kalaAsl = "<div class='titrkala'><p class='bold'>اسم برند</p><p class='alak'>ه</p></div><div class='kala'>"+kala+kala+kala+kala+kala+"</div>";
 var sectiun ="<div class='kala-asl'>"+kalaAsl+kalaAsl+kalaAsl+kalaAsl+kalaAsl+"</div>";
 var secfld = document.getElementById("sec");
 secfld.innerHTML = sectiun;