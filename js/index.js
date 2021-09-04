const openMenu  = document.querySelector('.open-btn');
const closeMenu = document.querySelector('.close-btn');
const menu = document.querySelector('.nav-list');

openMenu.addEventListener("click", () =>{
    menu.classList.add("show");
});
closeMenu.addEventListener("click", () =>{
    menu.classList.remove("show");
});
//Fixar o nav
const navBar = document.querySelector('.nav');
const navHeight = navBar.getBoundingClientRect().height;
window.addEventListener('scroll', ()=>{
    const scrollHeight = window.pageYOffset;
    if(scrollHeight > navHeight){
        navBar.classList.add('fix-nav');
    }else{
        navBar.classList.remove('fix-nav');
    }
})