const toggle = document.querySelector('.menu-toggle');
const topbar = document.querySelector('.top-bar');
const menu = document.querySelector('.menu');
const overlay = document.querySelector('#overlay');


toggle.addEventListener('click', () => {

    toggle.classList.toggle('active');
    menu.classList.toggle('active');
    overlay.classList.toggle('active');

});