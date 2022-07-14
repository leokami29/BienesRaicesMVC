<main class="contenedor seccion">
    <H1>Mas Sobre Nosotros</H1>
    <div class="iconos__nosotros">

    <?php 
            include 'iconos.php';
        ?>

    </div>
</main>

<section class="seccion contenedor">
    
    <h2>Casas y Dptos en Ventas</h2>

        <?php 
            include 'listado.php';
        ?>

    <div class="alinear__derecha">
        <a href="/propiedades" class="boton__verde">Ver Todas</a>
    </div>
</section>

<section class="imagen__contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>¡Llena el formulario de contacto y un asesor se pondrá en contacto contigo en un momento!</p>
    <a href="/contacto" class="boton__amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion__inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada__blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>

            <div class="texto__entrada">
                <a href="/entrada">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion__meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada__blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>

            <div class="texto__entrada">
                <a href="/entrada">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion__meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>

                    <p>
                        Maximiza el espacio en tu hogar con esta, guía, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote cite="">
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>
            <p>- Leonel Polanco</p>
        </div>
    </section>
</div>