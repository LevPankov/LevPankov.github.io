const slider = document.querySelector('.slider');
const sliderWrap = document.querySelector('.slider__wrap');
const sliderItems = slider.querySelectorAll('.slider__item');
const btnPrev = slider.querySelector('.slider__prev');
const btnNext = slider.querySelector('.slider__next');

let activeSlide = 0;

const setSliderItemsWidth = () => {
    const width = slider.clientWidth;

    sliderItems.forEach((item) => {
        item.style.width = width + 'px';
    });
}

const updateSlide = (bias) => {
    activeSlide += bias;

    if (activeSlide === -1) {
        activeSlide = sliderItems.length - 1;
    } else if (activeSlide === sliderItems.length) {
        activeSlide = 0;
    }

    console.log(activeSlide);

    sliderWrap.style.transform = `translateX(${(activeSlide) * -slider.clientWidth}px)`;

    slider.animate([{opacity: .5}, {opacity: 1}], {
        duration: 300,
        iterations: 1,
        easing: 'linear',
    })
}

setSliderItemsWidth();

window.addEventListener('resize', () => {
    setSliderItemsWidth();
    updateSlide(0);
});

btnPrev.onclick = () => updateSlide(-1);
btnNext.onclick = () => updateSlide(1);