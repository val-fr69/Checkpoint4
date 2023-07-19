/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

// include bootstrap JS
require('bootstrap');

let previousActiveLink = document.querySelector('.nav-link-shared.active');

function setActiveLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link-shared');

    navLinks.forEach(function (link) {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

    previousActiveLink = document.querySelector('.nav-link-shared.active');
}

setActiveLink();

window.addEventListener('popstate', setActiveLink);

const navLinks = document.querySelectorAll('.nav-link-shared');
navLinks.forEach(function (link) {
    link.addEventListener('mouseover', function () {
        if (!link.classList.contains('active')) {
            // Supprime la classe "active" de l'élément actif
            if (previousActiveLink) {
                previousActiveLink.classList.remove('active');
            }
        }
    });

    link.addEventListener('mouseout', function () {
        if (!link.classList.contains('active') && previousActiveLink) {
            previousActiveLink.classList.add('active');
        }
    });
});
