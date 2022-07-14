
<main class="contenedor seccion contenido-centrado">

<H1>Actualizar Propiedad</H1>
<?php foreach ($errores as $error) : ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
<?php endforeach; ?>

<a href="/admin" class=" boton boton__verde">Volver</a>

<form class="formulario" action="" method="post" enctype="multipart/form-data">

<?php include __DIR__ . '/formulario.php'; ?>
<input type="submit" value="Actualizar Propiedad" class="boton boton__verde">

</form>

</main>