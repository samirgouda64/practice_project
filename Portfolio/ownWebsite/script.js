document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".toggle-btn");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const details = this.nextElementSibling;
            if (details.style.display === "block") {
                details.style.display = "none";
                this.textContent = "More Details";
            } else {
                details.style.display = "block";
                this.textContent = "Less Details";
            }
        });
    });
});



// Toggle Menu

document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const menu = document.querySelector(".menu");

    hamburger.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});
