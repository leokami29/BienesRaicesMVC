<main class="contenedor seccion contenido-centrado">
    <H1>Registrar Vendedor(a)</H1>

    <a href="/admin" class=" boton boton__verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form action="" class="formulario " method="POST"  enctype="multipart/form-data">

    <?php include 'formulario.php' ?>

        <input type="submit" value="Guardad Cambios" class="boton boton__verde">
    </form>
</main>