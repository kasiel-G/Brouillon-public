let menuButton = document.getElementById('menu-icon');
let closeButton = document.getElementById('close-icon');
let checkbutton = document.getElementById('checkbutton');
let menu = document.getElementsByClassName('menu');
let body = document.querySelector('body');

console.log(menuButton, closeButton, checkbutton);
   menuButton.addEventListener('click', () =>{
    menuButton.style.display = 'none';
        closeButton.style.display = 'block';
        console.log(menu);
        menu[0].classList.toggle('active');
        body.classList.toggle('overlay');
     //    footer.classList.toggle('overlay');
   })
   closeButton.addEventListener('click', () =>{
        closeButton.style.display = 'none';
        menuButton.style.display = 'block';
        menu[0].classList.toggle('active');
        body.classList.toggle('overlay');

   })
