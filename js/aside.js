
function openMenu(){
    let menu = document.querySelector(".menu");
    menu.classList.remove('d-none');
    menu.classList.add('d-block');
}
function closeMenu(){
    let menu = document.querySelector(".menu");
    menu.classList.add('d-none');
}