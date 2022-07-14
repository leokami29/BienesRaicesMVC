<main class="contenedor seccion contenido-centrado">
    <H1>Iniciar Sesion</H1>
    <?php foreach($errores as $error): ?>

        <div class="alerta error">
        <?php echo $error; ?>
        </div>

        <?php endforeach;?>
    <form class="formulario" method="POST" action="/login">
        <fieldset>

            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email" >

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Tu contraseña" id="password" >

        </fieldset>
        <input type="submit" class="boton boton__verde" value="Iniciar Sesion">
    </form>
</main>