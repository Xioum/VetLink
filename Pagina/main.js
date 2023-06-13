const burger = document.querySelector('.burger');
const mobile_menu=document.querySelector('.mobile-nav');


burger.addEventListener('click', function() {
  burger.classList.toggle('is-active');
  mobile_menu.classList.toggle('is-active');
});