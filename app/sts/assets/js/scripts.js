/*!
 * Start Bootstrap - Agency v7.0.8 (https://startbootstrap.com/theme/agency)
 * Copyright 2013-2021 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
 */
//
// Scripts
// 
const header = document.querySelector('header');
document.addEventListener("scroll", function() {
    var posicaoy = window.pageYOffset;
    if (posicaoy > 150) {
        header.classList.add('fixed-top');
    } else {
        header.classList.remove('fixed-top');

    }
});

const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args) {
        const context = this;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

window.addEventListener('DOMContentLoaded', event => {

    // Função de scroll para surgir e desaparecer os elementos conforme rolagem do navegador
    const target = document.querySelectorAll('[data-anime]');
    const animationClass = 'animate';

    function animeScroll() {
        const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
        target.forEach(function(element) {
            if ((windowTop) >= element.offsetTop) {
                element.classList.add(animationClass);
            } // else {
            //     element.classList.remove(animationClass);
            //     }
        })
    }
    animeScroll();

    if (target.length) {
        window.addEventListener('scroll', debounce(function() {
            animeScroll();
        }, 0));
    }
});

// Função para surgir o Heading do topo da página home
const capa = document.querySelectorAll('[data-home-anime]');
const animationHome = 'animation';

function animeCapa() {
    capa.forEach(function(element) {
        element.classList.add(animationHome);
    });
}
animeCapa();