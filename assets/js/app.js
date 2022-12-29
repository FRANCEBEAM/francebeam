
const openMenu = document.querySelector('.navbar-toggler');
openMenu.addEventListener('click', () =>{

   //Menu Items
   navOpen = document.querySelector('.nav-li')
   navOpen.classList.toggle("open")
   
   //Burger Menu Animation
   burgerMenu = document.querySelector('.navbar-toggler')
   burgerMenu.classList.toggle("active")
   console.log(1)
});

