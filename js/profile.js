function Pass(){
    let pass = document.querySelector('.password');
    let passChange = document.querySelector('#pass-change')
    pass.classList.remove('d-none');
    passChange.classList.add('d-none');
}
function Home(){
    location.replace("../php/index.php");
}
function logout(){
    location.replace("../php/logout.php")
}