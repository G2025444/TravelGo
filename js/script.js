// =================================
// MENU DE NAVEGACION
// =================================

const btnMenu = document.querySelector("#btnMenu");

const menu = document.querySelector(".nav-links");

if (btnMenu && menu) {

    btnMenu.addEventListener("click", () => {

        menu.classList.toggle("abierto");

        btnMenu.classList.toggle("activo");

    });

}

// =================================
// FORMULARIO DE CONTACTO
// =================================

const contactForm = document.getElementById("contactForm");

if (contactForm) {

    contactForm.addEventListener("submit", function(event) {

        event.preventDefault();

        const nombre = document.getElementById("nombre").value;
        const mensaje = document.getElementById("formMessage");

        mensaje.textContent =
            "¡Gracias, " + nombre +
            "! Hemos recibido tu consulta. Pronto nos comunicaremos contigo.";

        contactForm.reset();

    });

}

