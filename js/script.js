
// =================================
// TRAVELGO - FORMULARIO DE CONTACTO
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
