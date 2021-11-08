const ham = document.querySelector('.ham-menu');
const menuBottom = document.querySelector('.menu-bot');
const header = document.querySelector('header');
const sent = document.querySelector('.bg-cGreen-100');
const sentFail = document.querySelector('.bg-cRed-100');
const main = document.querySelector('main');


const mediaQuery = window.matchMedia("(min-width: 1024px)");

if(window.pageYOffset <= 100) header.classList.remove('header-shadow');
else header.classList.add('header-shadow');

windowResizeCheck();
window.addEventListener('resize',_=>{
    windowResizeCheck();
});
window.addEventListener('scroll',_=>{
    if(window.pageYOffset <= 500) header.classList.remove('header-shadow');
    else header.classList.add('header-shadow');

});

main.addEventListener('click',_=>{
    if(!mediaQuery.matches) menuBottom.classList.remove('menu-open')
});

ham.addEventListener('click',e=>{
    if(e.target.classList.contains('ham-menu')){
        menuBottom.classList.toggle('menu-open');
    }
});


function windowResizeCheck(){
    if(mediaQuery.matches) 
    {
        menuBottom.classList.add('menu-open');
        menuBottom.classList.add('large-nav');
    }else {
        menuBottom.classList.remove('menu-open');   
        menuBottom.classList.remove('large-nav');   
    }
}

