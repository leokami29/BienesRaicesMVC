<?php  


    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
</head>

<body>

    <header class="header  <?php echo $inicio ? 'inicio' : ''?>">
        <div class="contenedor contenido__header">
            <div class="barra">
                <a href="/bienesraices/Index.php">
                    <img src="/bienesraices/build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>
                <div class="mobil__menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono menu rensposive">
                </div>
                <div class="derecha">
                    <img class="Darkmode__btn" src="/bienesraices/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="Nosotros.php">Nosotros</a>
                        <a href="Anuncios.php">Anucnios</a>
                        <a href="Blog.php">Blog</a>
                        <a href="Contacto.php">Contactos</a>
                        <?php if($auth): ?>
                            <a href="/bienesraices/admin/index.php">Admin</a>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div><!-- Cierre de la barra -->
            <?php 
                if($inicio) {
                    echo "<H1>Venta de Casas y Departamentos Exclusivos de Lujo</H1>";
                }
            ?>

        </div>
    </header>