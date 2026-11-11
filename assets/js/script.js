// Project Search

const searchInput = document.getElementById("projectSearch");

if (searchInput) {

    searchInput.addEventListener("input", function () {

        const searchValue = this.value.toLowerCase();

        const projects = document.querySelectorAll(".project-item");

        projects.forEach(function (project) {

            const content = project.textContent.toLowerCase();

            if (content.includes(searchValue)) {
                project.style.display = "";
            } else {
                project.style.display = "none";
            }

        });

    });

}


// Contact Form Validation

const contactForm = document.getElementById("contactForm");

if (contactForm) {

    contactForm.addEventListener("submit", function (event) {

        const name = contactForm.querySelector('[name="name"]').value.trim();

        const email = contactForm.querySelector('[name="email"]').value.trim();

        const subject = contactForm.querySelector('[name="subject"]').value.trim();

        const message = contactForm.querySelector('[name="message"]').value.trim();

        if (!name || !email || !subject || !message) {

            event.preventDefault();

            alert("Please fill in all fields.");

            return;

        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {

            event.preventDefault();

            alert("Please enter a valid email address.");

            return;

        }

    });

}