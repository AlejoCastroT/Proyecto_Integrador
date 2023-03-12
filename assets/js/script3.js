window.onscroll = function(){
    scroll = document.documentElement.scrollTop;

    header = document.getElementById("header");

    if(scroll > 20){
        header.classList.add('menu_mod');
    }else if(scroll < 20){
        header.classList.remove('menu_mod');
    }
}