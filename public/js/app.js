window.onload = function () {
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
let header = document.querySelector('.header-section-2');

if (document.documentElement.style.maxWidth < "768px") {
   header.remove();
}

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
   if (loadMoreBtn !== null) {
   let currentItem = 6;
   loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')]; 
   for (var i = currentItem; i <= currentItem + 3; i++){
      if(i >= boxes.length){
         loadMoreBtn.style.display = 'none';
      }
      boxes[i].style.display = 'inline-block';
   };
   };
};
};