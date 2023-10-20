//const header = document.querySelector("header");
//window.addEventListener("scroll", function(){
  //  header.classList.toggle("sticky", window.scrollY > 80)
//})

//menu open and close function
let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

//menu open and close after press function
window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
}
