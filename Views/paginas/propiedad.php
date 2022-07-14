<main class="contenedor seccion contenido-centrado">
    <H1><?php echo $propiedad->titulo; ?></H1>
    <img src="imagenes/<?php echo $propiedad->imagen; ?>" alt="imagen de la propiedad" loading="lazy">


    <div class="resumen__propiedad">
        <p class="precio">$<?php echo $propiedad->precio; ?></p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                <p><?php echo $propiedad->wc; ?></p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_estacionamiento.svg" alt="estacionamiento" loading="lazy">
                <p><?php echo $propiedad->estacionamiento; ?></p>
            </li>
            <li>
                <img class="icono" src="build/img/icono_dormitorio.svg" alt="habitaciones" loading="lazy">
                <p><?php echo $propiedad->habitaciones; ?></p>
            </li>
        </ul>

        <p><?php echo $propiedad->descripcion; ?></p>
        
    </div>
    <div class="alinear__derecha">
        <a href="/propiedades" class="boton__verde">Volver</a>
    </div>

</main>