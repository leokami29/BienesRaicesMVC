<main class="contenedor seccion contenido-centrado">
   
    <H1>Administrador de biens Raices</H1>

    <?php 
        if($resultado) {
                $mensaje = mostrarNotificacion( intval($resultado) );
            iF($mensaje) { ?>
                <p class="alerta exito"> <?php echo s($mensaje) ?> </p>
            <?php  } 
         } 
    ?>
        

  
    <a href="/propiedades/crear" class=" boton boton__verde">Nueva Propiedad</a>
    <a href="/vendedores/crear" class=" boton boton__amarillo">Nuevo Vendedor</a>
        
    <h2>Propiedades</h2>

    <table class="propiedades ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
        <?php foreach($propiedades as $propiedad): ?>
            <tr>
                <td><?php echo $propiedad->id; ?></td>
                <td><?php echo $propiedad->titulo; ?></td>
                <td><img src="../imagenes/<?php echo $propiedad->imagen; ?>" class="imagen__tabla"></td>
                <td>$<?php echo $propiedad->precio ?></td>
                <td>
                    <a href="propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="boton__amarillo__block">Actualizar</a>
                    <form method="POST" class="w-100" action="/propiedades/eliminar">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id ?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton__rojo__block" value="Eliminar">
                    </form> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Vendedores</h2>
     
     <table class="propiedades ">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Nombre</th>
                 <th>Telefono</th>
                 <th>Acciones</th>
             </tr>
         </thead>
 
         <tbody> <!-- Mostrar los resultados -->
         <?php foreach($vendedores as $vendedor): ?>
             <tr>
                 <td><?php echo $vendedor->id; ?></td>
                 <td><?php echo $vendedor->nombre. " " . $vendedor->apellido ; ?></td>
                 <td><?php echo $vendedor->telefono ?></td>
                 <td>
                     <a href="/vendedores/actualizar?id=<?php echo $vendedor->id; ?>" class="boton__amarillo__block">Actualizar</a>
 
                     <form method="POST" class="w-100" action="/vendedores/eliminar">
                         <input type="hidden" name="id" value="<?php echo $vendedor->id ?>">
                         <input type="hidden" name="tipo" value="vendedor">
                         <input type="submit" class="boton__rojo__block" value="Eliminar">
                     </form> 
                 </td>
             </tr>
             <?php endforeach; ?>
         </tbody>
     </table>
</main>