<main class="contenedor seccion">

    <H1>Contacto</H1>
    <?php if ($mensaje) {  ?>
        <p class='alerta exito'><?php echo $mensaje; ?></p>
    <?php  } ?>

    <br>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpg">
        <img src="build/img/destacada3.jpg" alt="imagen contacto" loading="lazy">
    </picture>

    <h2>Llene el formulario de Contacto</h2>

    <form class="formulario" action="/contacto" method="POST">

        <fieldset>

            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" required>


            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>

        </fieldset>

        <fieldset>

            <legend>Informacion sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>

            <select name="contacto[tipo]" id="opciones" required>

                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>

            </select>

            <label for="Presupuesto">Precio o Presupuesto</label>
            <input type="number" placeholder="Tu Precio o Presupuesto" id="Presupuesto" name="contacto[precio]" required>

        </fieldset>

        <fieldset>

            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma__contacto">

                <label for="contactar__telefono">Telefono</label>
                <input type="radio" value="telefono" id="contactar__telefono" name="contacto[contacto]" required>

                <label for="contactar__email">E-mail</label>
                <input type="radio" value="email" id="contactar__email" name="contacto[contacto]" required>

            </div>

            <div id="contacto">
                <br>
            </div>

        </fieldset>
        <input type="submit" value="Enviar" class="boton__verde">
    </form>

</main>