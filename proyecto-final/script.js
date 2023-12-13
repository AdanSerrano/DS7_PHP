const header = document.querySelector('header');

function fixedNavbar() {
    header.classList.toggle('scroll', window.pageYOffset > 0);
}

fixedNavbar();
window.addEventListener('scroll', fixedNavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click', () => {
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})

userBtn.addEventListener('click', () => {
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');
})

/*.
-testimonial slider--
*/