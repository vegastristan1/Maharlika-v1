import "./bootstrap";
import "./fontawesome";

import "../sass/app.scss";

import "../css/app.css";
import "../css/navigation-menu.css";
import "../css/banner.css";
import "../css/mission-vision.css";
import "../css/footer.css";
import "../css/transition-effect.css";

function checkElementsInView() {
    const elementsToAnimate1 = document.querySelectorAll('.hidden-1');
    const elementsToAnimate2 = document.querySelectorAll('.hidden-2');
    const viewportHeight = window.innerHeight;
    const scrollPosition = window.scrollY || window.pageYOffset;
    
    // Calculate the trigger point (halfway of the viewport plus 100px)
    const triggerPointMission = viewportHeight / 2 - 200;
    const triggerPointVision = viewportHeight / 2 - 400;
    const triggerPointValue = viewportHeight / 2 - 600;

    elementsToAnimate1.forEach(element => {
        const elementTop = element.getBoundingClientRect().top + scrollPosition;

        // Log positions for debugging
        // console.log(`Element top position: ${elementTop}px`);
        // console.log(`Trigger point position: ${scrollPosition + triggerPoint}px`);

        // Check if the element is within the trigger point
        if (scrollPosition + viewportHeight >= elementTop + triggerPointMission) {
            // Add animation class and remove 'hidden'
            element.classList.add('animation-left-to-right');
            element.classList.remove('hidden-1');
            console.log(`Animation added and hidden removed from:`, element);
        }
    });

    elementsToAnimate2.forEach(element => {
        const elementTop = element.getBoundingClientRect().top + scrollPosition;

        // Log positions for debugging
        // console.log(`Element top position: ${elementTop}px`);
        // console.log(`Trigger point position: ${scrollPosition + triggerPoint}px`);

        // Check if the element is within the trigger point
        if (scrollPosition + viewportHeight >= elementTop + triggerPointMission) {
            // Add animation class and remove 'hidden'
            element.classList.add('animation-right-to-left');
            element.classList.remove('hidden-2');
            console.log(`Animation added and hidden removed from:`, element);
        }
    });

    elementsToAnimate1.forEach(element => {
        const elementTop = element.getBoundingClientRect().top + scrollPosition;

        // Log positions for debugging
        // console.log(`Element top position: ${elementTop}px`);
        // console.log(`Trigger point position: ${scrollPosition + triggerPoint}px`);

        // Check if the element is within the trigger point
        if (scrollPosition + viewportHeight >= elementTop + triggerPointVision) {
            // Add animation class and remove 'hidden'
            element.classList.add('animation-left-to-right');
            element.classList.remove('hidden-1');
            console.log(`Animation added and hidden removed from:`, element);
        }
    });

    elementsToAnimate2.forEach(element => {
        const elementTop = element.getBoundingClientRect().top + scrollPosition;

        // Log positions for debugging
        // console.log(`Element top position: ${elementTop}px`);
        // console.log(`Trigger point position: ${scrollPosition + triggerPoint}px`);

        // Check if the element is within the trigger point
        if (scrollPosition + viewportHeight >= elementTop + triggerPointVision) {
            // Add animation class and remove 'hidden'
            element.classList.add('animation-right-to-left');
            element.classList.remove('hidden-2');
            console.log(`Animation added and hidden removed from:`, element);
        }
    });

    elementsToAnimate1.forEach(element => {
        const elementTop = element.getBoundingClientRect().top + scrollPosition;

        // Log positions for debugging
        // console.log(`Element top position: ${elementTop}px`);
        // console.log(`Trigger point position: ${scrollPosition + triggerPoint}px`);

        // Check if the element is within the trigger point
        if (scrollPosition + viewportHeight >= elementTop + triggerPointValue) {
            // Add animation class and remove 'hidden'
            element.classList.add('animation-left-to-right');
            element.classList.remove('hidden-1');
            console.log(`Animation added and hidden removed from:`, element);
        }
    });

    elementsToAnimate2.forEach(element => {
        const elementTop = element.getBoundingClientRect().top + scrollPosition;

        // Log positions for debugging
        // console.log(`Element top position: ${elementTop}px`);
        // console.log(`Trigger point position: ${scrollPosition + triggerPoint}px`);

        // Check if the element is within the trigger point
        if (scrollPosition + viewportHeight >= elementTop + triggerPointValue) {
            // Add animation class and remove 'hidden'
            element.classList.add('animation-right-to-left');
            element.classList.remove('hidden-2');
            console.log(`Animation added and hidden removed from:`, element);
        }
    });
}

// Run the check on scroll
window.addEventListener('scroll', checkElementsInView);

// Also check on page load in case elements are already in view
document.addEventListener('DOMContentLoaded', checkElementsInView);
