const tabs = document.querySelectorAll('.match-info__btn');

tabs.forEach((item) => {
    item.onclick = () => {
        rmStyles();

        const tab = document.querySelector('#' + item.getAttribute('data-id'));
        tab.style.display = "block";

        item.classList.add('match-info__btn--active');
    }
});

function rmStyles() {
    tabs.forEach((item) => {
        const tab = document.querySelector('#' + item.getAttribute('data-id'));
        item.classList.remove('match-info__btn--active');
        tab.style.display = "none";
    });
}