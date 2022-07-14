<?php

namespace Controllers;
use MVC\Router;
use Model\Vendedor;
 

class VendedorController {

    public static function crear(Router $router) {
        
        $errores = Vendedor::getErorres();
        $vendedor = new Vendedor;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Crear una nueva instancia
            $vendedor = new Vendedor($_POST['vendedor']);
        
            //Validar  que no hay campos vacios 
            $errores = $vendedor->validar();
        
            //no hay errores
            if(empty($errores)) {
                $vendedor->guardar();
            }
        }

        $router->render('vendedores/crear',[
            'errores'=>$errores,
            'vendedor' => $vendedor
        ]);
    }

    public static function actualizar(Router $router) {
        //Arreglo con mensajes de errores
        $errores = Vendedor::getErorres();
        $id = validarRedireccionar('/admin');

        //Obtner los datos del vendedor
        $vendedor = Vendedor::find($id);


        $router->render('vendedores/actualizar',[
            'errores'=>$errores,
            'vendedor' => $vendedor
        ]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Asignar los valores
            $args = $_POST['vendedor'];

            // sincronizar objeto en memoria con lo que el usuario exribio
            $vendedor->sincronizar($args);

            //Validacion
            $errores = $vendedor->validar();

            if(empty($errores)) {
                $vendedor->guardar();
            }
        }
    }

    public static function eliminar() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            //Validar Id
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id) {

                //Valida el tipo a eliminar
                $tipo = $_POST['tipo'];

                if(validarTipoContenido($tipo)) {
                    $vendedor = Vendedor::find($id);
                    $vendedor->eliminar();
                }
            }
        }
    }
}