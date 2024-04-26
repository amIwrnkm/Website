var myInput = document.querySelector("#chang");
const cpu = document.querySelector(".cpu");
const gpu = document.querySelector(".gpu");
function home(){
 location.replace("index.php");
}
function CG(){
if(gpu.classList.contains('d-none')) {
    myInput.value = "اضافه کردن کارت گرافیک";
    gpu.classList.remove('d-none');
    cpu.classList.add('d-none');
} else {
    myInput.value = "اضافه کردن پردازنده";
    cpu.classList.remove('d-none');
    gpu.classList.add('d-none');
}

}