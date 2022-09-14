'use strict';

AOS.init();

// Hamburger animatio

let mobile_menu = document.querySelector('.mobile-menu');
let mobile_menuChildNode = mobile_menu.querySelector('.menu');

document.querySelector('.burger').addEventListener('click', function(){
    document.querySelector('.burger span').classList.toggle('active');

    if(document.querySelector('.burger span').classList.contains("active")) {
        mobile_menuChildNode.classList.toggle('active');
	} else {
        mobile_menuChildNode.classList.toggle('active');
    }
})