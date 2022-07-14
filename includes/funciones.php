<?php 

define ('TEMPLATES_URL', __DIR__ . '/template');
define ('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETAS_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');


function incluirTemplate( string $nombre, bool $inicio = false) {
    include TEMPLATES_URL ."/${nombre}.php";
}

function esatadoAutenticado() {
    session_start();

    if(!$_SESSION['login']) {
        header('Location: /bienesraices/Index.php');
    }
}

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit; 
}


//Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

//Validar tipo de contenido
function validarTipoContenido($tipo) {
    $tipos = ['vendedor', 'propiedad'];

    return in_array($tipo, $tipos );
}

//Muestra los mensajes 
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch($codigo) { //Evaluamos lo que viene de afuera en este caso "$codiogo"
        case 1:
            $mensaje ='Creado Correctamente';
            break;
        case 2:
            $mensaje ='Actualizado Correctamente';
            break;
        case 3:
            $mensaje ='Eliminado Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }

    return $mensaje;
}

function validarRedireccionar(string $url) {

        //Validar la URL por ID valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("Location: ${url}");
    }
    return $id;
}