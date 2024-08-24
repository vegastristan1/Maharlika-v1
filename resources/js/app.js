import "./bootstrap";
import "./fontawesome";

import "../sass/app.scss";

import "../css/app.css";

import "../css/navigation-menu.css";
import "../css/banner.css";
import "../css/core.css";
import "../css/footer.css";
import "../css/transition-effect.css";
import "../css/mediaquery.css";

function checkElementsInView() {
    const viewportHeight = window.innerHeight;
    const scrollPosition = window.scrollY || window.pageYOffset;

    const triggers = [
        { selector: '.hidden-1', animationClass: 'animation-left-to-right', offsets: [200, 400, 600] },
        { selector: '.hidden-2', animationClass: 'animation-right-to-left', offsets: [200, 400, 600] }
    ];

    triggers.forEach(({ selector, animationClass, offsets }) => {
        const elements = document.querySelectorAll(selector);

        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top + scrollPosition;

            offsets.forEach(offset => {
                if (scrollPosition + viewportHeight >= elementTop + (viewportHeight / 2 - offset)) {
                    // Add animation class and remove 'hidden'
                    element.classList.add(animationClass);
                    element.classList.remove(selector.substring(1)); // Remove the class name without dot
                    console.log(`Animation added and hidden removed from:`, element);
                }
            });
        });
    });
}

// Run the check on scroll
window.addEventListener('scroll', checkElementsInView);

// Also check on page load in case elements are already in view
document.addEventListener('DOMContentLoaded', checkElementsInView);
