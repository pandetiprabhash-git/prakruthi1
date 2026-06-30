document.querySelectorAll(".view-more-btn").forEach(button => {

    button.addEventListener("click", function () {

        const card = this.closest(".service-card");

        card.classList.toggle("active");

        if (card.classList.contains("active")) {
            this.textContent = "View Less";
        } else {
            this.textContent = "View More";
        }

    });

});