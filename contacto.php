<?php include  "header.php"; ?>

    <!-- CONTENIDO PRINCIPAL -->
    <main>

        <!-- BANNER -->
        <section class="page-banner">

            <div class="container">

                <p class="section-tag">ESTAMOS PARA AYUDARTE</p>

                <h1>Hablemos de tu próximo viaje</h1>

                <p>
                    Escríbenos y comienza a planificar tu aventura.
                </p>

            </div>

        </section>


        <!-- SECCIÓN DE CONTACTO -->
        <section class="contact-section container">

            <!-- INFORMACIÓN DE CONTACTO -->
            <div class="contact-info">

                <p class="section-tag">CONTÁCTANOS</p>

                <h2>Tu aventura comienza con nosotros</h2>

                <p>
                    Nuestro equipo está preparado para ayudarte
                    a encontrar el destino ideal.
                </p>


                <div class="contact-detail">

                    <h3>Correo electrónico</h3>

                    <p>info@travelgo.com</p>

                </div>


                <div class="contact-detail">

                    <h3>Teléfono</h3>

                    <p>+506 2222-2222</p>

                </div>


                <div class="contact-detail">

                    <h3>Ubicación</h3>

                    <p>Alajuela, Costa Rica</p>

                </div>

            </div>


            <!-- FORMULARIO -->
            <form class="contact-form" id="contactForm">

                <h2>Envíanos un mensaje</h2>


                <label for="nombre">Nombre completo</label>

                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Tu nombre"
                    required
                >


                <label for="correo">Correo electrónico</label>

                <input
                    type="email"
                    id="correo"
                    name="correo"
                    placeholder="tu@email.com"
                    required
                >


                <label for="destino">Destino de interés</label>

                <select id="destino" name="destino" required>

                    <option value="">Selecciona un destino</option>

                    <option value="Maldivas">Maldivas</option>

                    <option value="Costa Rica">Costa Rica</option>

                    <option value="Bali">Bali</option>

                    <option value="Europa">Europa</option>

                    <option value="Otro">Otro</option>

                </select>


                <label for="mensaje">Mensaje</label>

                <textarea
                    id="mensaje"
                    name="mensaje"
                    rows="5"
                    placeholder="Cuéntanos qué viaje tienes en mente..."
                    required
                ></textarea>


                <button type="submit" class="btn-primary">
                    Enviar mensaje
                </button>

                <p id="formMessage" aria-live="polite"></p>

            </form>

        </section>

    </main>

    <!-- PIE DE PÁGINA -->

 <?php include "footer.php"; ?>