const burger = document.querySelector('.header__burger');
const headerMenu = document.querySelector('.header__menu');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    headerMenu.classList.toggle('active');

    if (headerMenu.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = 'auto';
    }

});

function initResizer() {
    const header = document.querySelector('.header');

    headerMenu.style.top = `${header.offsetHeight - 1}px`;
    headerMenu.style.maxHeight = `calc(100dvh - ${header.offsetHeight - 1}px)`;

    document.querySelectorAll('.padding-top-header').forEach((element) => {
        element.style.paddingTop = `${header.offsetHeight}px`;
    })

    if (document.querySelector('.hero .container')) {
        document.querySelector('.hero .container').style.height = `calc(100vh - ${header.offsetHeight}px)`;
    }
}

window.addEventListener('resize', initResizer);
window.addEventListener('load', initResizer);

//questions

const questions = document.querySelectorAll('.questions__item');

questions.forEach(question => {

    const body = question.querySelector('.questions__body');
    const scrollHeightBody = body.scrollHeight + 10;
    body.style.height = `0px`;

    question.querySelector('.questions__head').addEventListener('click', () => {
        question.classList.toggle('active');

        if (question.classList.contains('active')) {
            body.style.height = `${scrollHeightBody}px`;
        } else {
            body.style.height = `0px`;
        }
    });

});

//Word counter

if (document.querySelector('#word-counter-area')) {
    document.querySelector('#word-counter-area').addEventListener('input', (e) => {

        const value = e.target.value;

        const wordCounter = document.querySelector('.word-counter');

        wordCounter.innerText = `${value.length}/${wordCounter.dataset.limit}`;

        if (value.length > wordCounter.dataset.limit) {
            wordCounter.classList.add('error');
        } else {
            wordCounter.classList.remove('error');
        }

    });
}

function contactAccordion() {
    const items = document.querySelectorAll('.contact-represented__item');

    items.forEach(item => {
        const itemBody = item.querySelector('ul');
        const itemBodyHeight = itemBody.offsetHeight;

        itemBody.style.maxHeight = `${0}px`;

        item.addEventListener('click', () => {
            item.classList.toggle('active');

            if (item.classList.contains('active')) {
                itemBody.style.maxHeight = `${itemBodyHeight}px`;
            } else {
                itemBody.style.maxHeight = `${0}px`;
            }
        });
    });
}

if (window.innerWidth <= 576) {
    contactAccordion()
}

window.addEventListener('resize', () => {
    if (window.innerWidth <= 576) {
        contactAccordion()
    }
})

//ANIME

if (document.querySelector('.counters__metrics')) {
    document.querySelectorAll('.counters__metrics h3 div').forEach((element) => {

        const dataMaxNumber = element.dataset.max;

        anime({
            targets: element,
            innerHTML: [0, dataMaxNumber],
            easing: 'linear',
            round: 1
        });

    });
}

if (document.querySelector('.round')) {
    document.querySelectorAll('.round').forEach((round) => {
        var circle = round.querySelector('circle');

        var roundRadius = circle.getAttribute('r');

        var roundPercent = round.dataset.percent;

        var roundCircum = 2 * roundRadius * Math.PI;

        var roundDraw = roundPercent * roundCircum / 100;

        round.style.strokeDasharray = roundDraw + ' 999';
    });
}

if (document.querySelector('.about-us-propose__content')) {
    const content = document.querySelector('.about-us-propose__content');

    content.querySelectorAll('ul li').forEach((li) => {
        const svg = '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="32" height="32" fill="#FFEC00"/><path d="M24 10L13 21L8 16" stroke="black" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/></svg>';

        li.innerHTML = `${svg} ${li.innerHTML}`;
    });

}