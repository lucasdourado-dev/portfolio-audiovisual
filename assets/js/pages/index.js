const startBtn = document.querySelector('#start-button');
const menu = document.querySelector('.menu');

startBtn.addEventListener('click', () => {

    menu.classList.toggle('active');

});