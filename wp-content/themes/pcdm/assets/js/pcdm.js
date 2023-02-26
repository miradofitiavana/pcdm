/**
 * Nav toggler
 */
const headerArea = document.querySelector('.header-area');
const navbarArea = document.querySelector('.navbar-area');
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.header-menu');
const navLinks = document.querySelectorAll('.header-menu a');
allEventListners();

function allEventListners() {
    navToggler.addEventListener('click', togglerClick);
    navLinks.forEach(elem => elem.addEventListener('click', navLinkClick));
}

function togglerClick() {
    navToggler.classList.toggle('toggler-open');
    navMenu.classList.toggle('open');
    document.body.classList.toggle('overflow-hidden');
}

function navLinkClick() {
    if (navMenu.classList.contains('open')) {
        navToggler.click();
    }
}

/**
 *
 */
window.onscroll = function () {
    doStickyMenu();
};
window.onload = function () {
    doStickyMenu();
};
let sticky = headerArea.offsetTop;

function doStickyMenu() {
    console.log(sticky);
    if (window.pageYOffset > sticky) {
        headerArea.classList.add('sticky-nav');
    } else {
        headerArea.classList.remove('sticky-nav');
    }
}

/**
 * Accordion Responsive
 */
let elements = document.querySelectorAll('ul.checklist-select li');
elements.forEach(element => {
    element.addEventListener('click', function (e) {
        let selectID = e.target.getAttribute('id');
        elements.forEach(el => {
            el.classList.remove('bg-brand-400');
            el.classList.add('bg-brand-200', 'hover:bg-brand-400');
        });
        document.querySelectorAll('ul.checklist-select li > i').forEach(el => {
            el.classList.add('opacity-0');
        });
        document.querySelector('#' + selectID + ' > i').classList.remove('opacity-0');
        document.getElementById(selectID).classList.remove('bg-brand-200');
        document.getElementById(selectID).classList.add('bg-brand-400');
        document.querySelectorAll('div.box').forEach(el => {
            el.classList.add('lg:hidden');
            el.classList.remove('lg:block');
        });
        document.querySelector('.' + selectID + '-box').classList.remove('lg:hidden');
        document.querySelector('.' + selectID + '-box').classList.add('lg:block');
    });
});
elements[0].click();