<main class="contenedor seccion">

    <h1 data-cy="heading-contacto">Contacto</h1>
    <?php if ($mensaje) {  ?>
        <p data-cy="elerta-formulario" class='alerta exito'><?php echo $mensaje; ?></p>
    <?php  } ?>
        
    <br>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpg">
        <img src="build/img/destacada3.jpg" alt="imagen contacto" loading="lazy">
    </picture>

    <h2 data-cy="formulario-contacto">Llene el Formulario de Contacto</h2>

    <form data-cy="form-formulario" class="formulario" action="/contacto" method="POST">

        <fieldset>

            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input data-cy="input-nombre" type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" required>


            <label for="mensaje">Mensaje</label>
            <textarea data-cy="input-mensaje" id="mensaje" name="contacto[mensaje]" required></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select data-cy="input-opciones" name="contacto[tipo]" id="opciones" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="Presupuesto">Precio o Presupuesto</label>
            <input data-cy="input-Presupuesto" type="number" placeholder="Tu Precio o Presupuesto" id="Presupuesto" name="contacto[precio]" required>

        </fieldset>

        <fieldset>

            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma__contacto">

                <label for="contactar__telefono">Telefono</label>
                <input data-cy="forma-contacto" type="radio" value="telefono" id="contactar__telefono" name="contacto[contacto]" required>

                <label for="contactar__email">E-mail</label>
                <input data-cy="forma-contacto" type="radio" value="email" id="contactar__email" name="contacto[contacto]" required>

            </div>

            <div id="contacto">
                <br>
            </div>

        </fieldset>
        <input type="submit" value="Enviar" class="boton__verde">
    </form>

</main>