const navSlide = () => {
    const burger = document.querySelector('.hamburger');
    const navlink = document.querySelector('.navbar__links');
    const nav = document.querySelector('nav');

    burger.addEventListener('click', () => {
        nav.classList.toggle('hamburger--active');
    });

    navlink.addEventListener('click', () => {
      nav.classList.toggle('hamburger--active');
    });
}

navSlide();

var navbar = document.querySelector('nav')

window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 100) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}