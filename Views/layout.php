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
                    <img class="Darkmode__btn" src="/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="/nosotros">NOSOTROS</a>
                        <a href="/propiedades">ANUNCIO</a>
                        <a href="/blog">BLOG</a>
                        <a href="/contacto">CONTACTOS</a>
                        <?php if ($auth) : ?>
                            <a href="/admin">Admin</a>
                            <a href="/logout">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div><!-- Cierre de la barra -->
            <?php
            if ($inicio) {
                echo "<H1>Venta de Casas y Departamentos Exclusivos de Lujo</H1>";
            }
            ?>

        </div>
    </header>

    <?php echo $contenido; ?>


    <footer class="footer seccion">
        <div class="contenedor contenido__footer">
            <nav class="navegacion">
                <a href="/nosotros">NOSOTROS</a>
                <a href="/propiedades">ANUNCIO</a>
                <a href="/blog">BLOG</a>
                <a href="/contacto">CONTACTOS</a>
            </nav>
        </div>



        <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy; <br> Leonel Polanco</p>

    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>

</html>