/*=========================================
        CONTACT PAGE JAVASCRIPT
=========================================*/

document.addEventListener("DOMContentLoaded", () => {

    /*=====================================
            CONTACT FORM
    =====================================*/

    const form = document.querySelector(".contact-form-card form");

    if (form) {

        form.addEventListener("submit", function (e) {

            e.preventDefault();

            const name = form.querySelector('input[type="text"]');
            const email = form.querySelector('input[type="email"]');
            const phone = form.querySelector('input[type="tel"]');
            const message = form.querySelector("textarea");
            const button = form.querySelector("button");

            if (
                name.value.trim() === "" ||
                email.value.trim() === "" ||
                phone.value.trim() === "" ||
                message.value.trim() === ""
            ) {

                alert("Please fill in all fields.");

                return;

            }

            const oldText = button.innerHTML;

            button.disabled = true;

            button.innerHTML =
                '<i class="fas fa-spinner fa-spin"></i> Sending...';

            setTimeout(() => {

                button.innerHTML =
                    '<i class="fas fa-check"></i> Message Sent';

                button.style.background = "#198754";

                form.reset();

                setTimeout(() => {

                    button.disabled = false;

                    button.innerHTML = oldText;

                    button.style.background = "";

                }, 2500);

            }, 1800);

        });

    }

    /*=====================================
            INPUT FOCUS EFFECT
    =====================================*/

    const inputs = document.querySelectorAll("input, textarea");

    inputs.forEach(input => {

        input.addEventListener("focus", () => {

            input.parentElement.classList.add("active");

        });

        input.addEventListener("blur", () => {

            input.parentElement.classList.remove("active");

        });

    });

    /*=====================================
            SCROLL ANIMATION
    =====================================*/

    const revealItems = document.querySelectorAll(

        ".contact-form-card, .contact-info-card, .map-card"

    );

    function reveal() {

        revealItems.forEach(item => {

            const top = item.getBoundingClientRect().top;

            const windowHeight = window.innerHeight;

            if (top < windowHeight - 100) {

                item.style.opacity = "1";

                item.style.transform = "translateY(0)";

            }

        });

    }

    reveal();

    window.addEventListener("scroll", reveal);

});