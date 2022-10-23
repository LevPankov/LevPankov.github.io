const modal = document.querySelector('.match-modal');
const modalImage = modal.querySelector('img');

const listItems = document.querySelectorAll('.match-gallery__item');

let imageIndex = 0;

listItems.forEach((item) => {
    item.addEventListener('click', function (evt) {
        modalImage.src = this.querySelector('img').src;
        modal.classList.add('match-modal--open');
        document.body.style.overflow = "hidden";
        imageIndex = this.id - 1;
    });
});

const close = document.querySelector('.match-modal__close');

close.onclick = () => {
    modal.classList.remove('match-modal--open');
    document.body.style.overflow = "auto";
}

const prev = modal.querySelector('.match-modal__prev');
const next = modal.querySelector('.match-modal__next');

prev.onclick = (evt) => {
    if (imageIndex === 0) {
        imageIndex = listItems.length - 1;
    } else {
        imageIndex--;
    }

    modalImage.src = listItems[imageIndex].querySelector('img').src;
}

next.onclick = (evt) => {
    if (imageIndex === listItems.length - 1) {
        imageIndex = 0;
    } else {
        imageIndex++;
    }

    modalImage.src = listItems[imageIndex].querySelector('img').src;
}