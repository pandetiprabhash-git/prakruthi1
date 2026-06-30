/*
==========================================================
File        : stats.js
Description : Animated Counter
Project     : Prakruthi Hostel
==========================================================
*/

document.addEventListener("DOMContentLoaded", () => {

    const counters = document.querySelectorAll(".stat__number[data-counter]");

    if (!counters.length) return;

    const animateCounter = (counter) => {

        const target = parseFloat(counter.dataset.counter);
        const suffix = counter.dataset.suffix || "";

        const duration = 2000;
        const startTime = performance.now();

        const update = (currentTime) => {

            const progress = Math.min((currentTime - startTime) / duration, 1);

            const value = target * progress;

            if (Number.isInteger(target)) {
                counter.textContent = Math.floor(value) + suffix;
            } else {
                counter.textContent = value.toFixed(1) + suffix;
            }

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                if (Number.isInteger(target)) {
                    counter.textContent = target + suffix;
                } else {
                    counter.textContent = target.toFixed(1) + suffix;
                }
            }

        };

        requestAnimationFrame(update);

    };

    const observer = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                animateCounter(entry.target);

                observer.unobserve(entry.target);

            }

        });

    }, {
        threshold: 0.5
    });

    counters.forEach(counter => observer.observe(counter));

});