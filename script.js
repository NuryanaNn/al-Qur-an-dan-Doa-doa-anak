let burgerMenu = document.querySelector('.burger-menu');
let mobileNav = document.querySelector('.mobile-nav');

burgerMenu.addEventListener('click', function(){
    mobileNav.classList.toggle('active');
})

window.addEventListener('scroll', function(){
    const header = document.querySelector('nav');
    header.classList.toggle("sticky", window.scrollY > 0)
});