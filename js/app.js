const mobileMenu = document.querySelector('.page-header__nav-menu');
const toggleBtn = document.querySelector('.page-header__mobile-toggle');

toggleBtn.onclick = () => {
    mobileMenu.classList.toggle('page-header__nav-menu--active');
}

const subMenu = document.querySelector('.page-header__sub-menu');

subMenu.onclick = () => {
    subMenu.classList.toggle('page-header__sub-menu--active');
}

const modalForm = document.querySelector('.form-modal');
const modalBtn = document.querySelector('.page-header__btn');
const closeBtn = document.querySelector('.form-modal__close');

modalBtn.onclick = () => {
    document.body.style.overflow = "hidden";
    modalForm.classList.add('form-modal--open');
}

closeBtn.onclick = () => {
    document.body.style.overflow = "auto";
    modalForm.classList.remove('form-modal--open');
}