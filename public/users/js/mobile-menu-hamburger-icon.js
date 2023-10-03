// THIS JAVASCRIPT FILE IS FOR HAMBURGER ICON IN MOBILE MENU

const menuList = document.getElementById('menu-list');
        
// menuList.style.maxHeight = "0px";

function togglemenu() {
    if (menuList.classList.contains('hidden')) {
        menuList.classList.remove('hidden');
    }
    else {
        menuList.classList.add('hidden');
    }
}