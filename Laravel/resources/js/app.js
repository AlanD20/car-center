const leftNav = document.querySelector('.left-nav');
const bodyContainer = document.querySelector('.body-container');
const navState = document.querySelector('.nav-state');
const listItems = document.querySelectorAll('.list-item');
const navState_close = '<i class="fas fa-arrow-alt-to-right"></i>';
const navState_open = '<i class="fas fa-arrow-alt-from-right"></i>';
const mediaQuery = window.matchMedia("(min-width: 600px)");
const btnFile = document.querySelector('.btn-file');
const textFile = document.querySelector('.text-file');
const file = document.querySelector('.file');

btnFile?.addEventListener('click',_=>{
    file.click();
});
file?.addEventListener('change',e=>{
    if(file.value){
        textFile.textContent = ((file.value).split('\\')).pop();
    }else{
        textFile.textContent = "No Image Chosen";
    }
});

navState?.addEventListener('click',_=>toggleNavigation());

listItems?.forEach(item=>{
    
    item.addEventListener('click',e=>{
        if(e.target.nextElementSibling?.classList.contains('list_extend_open')){
            openNavigation();
            return;
        }
        if(e.target.nextElementSibling?.classList.contains("list_extend")){
            openNavigation();
            e.target.parentElement.classList.toggle('list-item_open');
            e.target.nextElementSibling.classList.toggle('list_extend_open');
        }
        
    });
});


window.addEventListener('resize',_=>closeNavigation());

function toggleNavigation(){
    leftNav.classList.toggle('left-nav_open');
    bodyContainer.classList.toggle('body_nav_open');
    clearOpenedNavList();
    switchNavStateIcon();
}
function closeNavigation(){
    leftNav.classList.remove('left-nav_open');
    bodyContainer.classList.remove('body_nav_open');
    clearOpenedNavList();
    switchNavStateIcon();
}
function openNavigation(){
    leftNav.classList.add('left-nav_open');
    bodyContainer.classList.add('body_nav_open');
    clearOpenedNavList();
    switchNavStateIcon();
}
function clearOpenedNavList(){
    const list1 = document.querySelectorAll('.list_extend_open');
    const list2 = document.querySelectorAll('.list-item_open');
    [...list1, ...list2].forEach(item=>{
        item.classList.remove('list_extend_open');
        item.classList.remove('list-item_open');
    });
}
function switchNavStateIcon(){
    if(leftNav.classList.contains('left-nav_open'))
    navState.innerHTML = navState_open;
    else 
    navState.innerHTML = navState_close;
}