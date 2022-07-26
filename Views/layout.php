<?php


if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;
if (!isset($inicio)) {
    $inicio = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>

<body>

    <header class="header  <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido__header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>
                <div class="mobil__menu">
                    <img src="/build/img/barras.svg" alt="icono menu rensposive">
                </div>
                <div class="derecha">

                    <nav class="navegacion" data-cy="navegacion-header">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Propiedades</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <img class="Darkmode__btn" src="/build/img/dark-mode.svg" alt="">
                        <?php if ($auth) : ?>
                            <a href="/admin">Admin</a>
                            <a href="/logout">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div><!-- Cierre de la barra -->
            <?php
            if ($inicio) {
                echo "<h1 data-cy='heading-sitio'>Venta de Casas y Departamentos Exclusivos de Lujo</h1>";
            }
            ?>

        </div>
    </header>

    <?php echo $contenido; ?>


    <footer class="footer seccion">
        <div class="contenedor contenido__footer">
            <nav class="navegacion" data-cy="navegacion-footer">
                <a href="/nosotros">Nosotros</a>
                <a href="/propiedades">Propiedades</a>
                <a href="/blog">Blog</a>
                <a href="/contacto">Contacto</a>
                
            </nav>
        </div>



        <p class="copyright" data-cy="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy; <br> Leonel Polanco</p>

    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>

</html>