 var photo='"photokala"';
 var kala = "<div><img src='/img/laptap test.png' class='photokala'><p class='boldkala'> اسم محصول </p><p class='boldkala'>قیمت:10,000,000 </p></div>";
 var kala1 = "<div class='del'><img src='/img/laptap test.png' class="+photo+"><p class='boldkala'> اسم محصول </p><p class='boldkala'>قیمت:10,000,000 </p></div>";
 var kalaAsl = "<div class='titrkala'><p class='bold'>اسم برند</p><p class='alak'>ه</p></div><div class='kala'>"+kala+kala+kala+kala1+kala1+"</div>";
 var sectiun ="<div class='kala-asl'>"+kalaAsl+kalaAsl+kalaAsl+kalaAsl+kalaAsl+"</div>";
 var secfld = document.getElementById("sec");
 secfld.innerHTML = sectiun;