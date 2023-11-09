const slider = document.querySelector('.slide');
const sliderimages = document.querySelectorAll('.slide img');

//buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nxtBtn');

//counter
let counter = 1;
const size = sliderimages[0].clientWidth;

slider.style.transform = 'translateX(' + (-size * counter) + 'px)';

//button edit
nextBtn.addEventListener('click', ()=>{
    if(counter >= sliderimages.length -1) return;
    slider.style.transition = "transform 0.4s ease-in-out";
    counter++;
    slider.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

prevBtn.addEventListener('click', ()=> {
    if(counter <= 0) return;
    slider.style.transition = "transform 0.4s ease-in-out";
    counter--;
    slider.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

slider.addEventListener('transitionend', ()=>{
    if(sliderimages[counter].id === 'lastclone'){
       slider.style.transition = 'none';
       counter = sliderimages.length - 2; 
       slider.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(sliderimages[counter].id === 'firstclone'){
       slider.style.transition = 'none';
       counter = sliderimages.length - counter;
       sliderimages.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
})