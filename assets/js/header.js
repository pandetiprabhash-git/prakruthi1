document.addEventListener("DOMContentLoaded", () => {

    // ===============================
    // Mobile Menu Toggle
    // ===============================
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuToggle && mobileMenu) {

        menuToggle.addEventListener("click", () => {

            mobileMenu.classList.toggle("active");

            // Change icon
            menuToggle.innerHTML = mobileMenu.classList.contains("active")
                ? "&times;"
                : "☰";

        });

    }

    // ===============================
    // Active Navigation
    // ===============================
    const currentPage = window.location.pathname.split("/").pop() || "index.php";

    const links = document.querySelectorAll(".menu-link");

    links.forEach(link => {

        // Remove existing active class
        link.classList.remove("active");

        const href = link.getAttribute("href");

        if (href === currentPage) {
            link.classList.add("active");
        }

    });

    // ===============================
    // Close Mobile Menu After Click
    // ===============================
    const mobileLinks = document.querySelectorAll("#mobile-menu .menu-link");

    mobileLinks.forEach(link => {

        link.addEventListener("click", () => {

            mobileMenu.classList.remove("active");

            if (menuToggle) {
                menuToggle.innerHTML = "☰";
            }

        });

    });

});