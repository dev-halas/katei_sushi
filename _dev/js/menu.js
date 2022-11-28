const mobile = document.querySelector('.mobile');
const links = document.querySelector('.menuLinks');

mobile.addEventListener('click', () => {
  mobile.classList.toggle('mobile--opened')
  links.classList.toggle('menuLinks--opened')
})