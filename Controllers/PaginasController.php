<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {

    public static function index( Router $router){

        $propiedades = Propiedad::get(3);
        $inicio = true;

        $router->render('paginas/index',[
            'propiedades'=>$propiedades,
            'inicio'=> $inicio
        ]);
    }

    public static function nosotros( Router $router ){
         $router->render('paginas/nosotros');
    }

    public static function propiedades(Router $router ){

        $propiedades = Propiedad::all();
        $router->render('paginas/propiedades', [
            'propiedades'=>$propiedades
        ]);
    }

    public static function propiedad(Router $router ){

        $id = validarRedireccionar('/propiedades');

        //buscar la propiedad por id
        $porpiedad = Propiedad::find($id);

        $router->render('paginas/propiedad',[
            'propiedad'=>$porpiedad
        ]);
    }

    public static function blog(Router $router ){
        $router->render('paginas/blog',[
            
        ]);
    }

    public static function entrada( Router $router){
        $router->render('paginas/entrada',[
            
        ]);
    }

    public static function contacto( Router $router){

        $mensaje = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $repuestas = $_POST['contacto'];



            //Crear una instancia de PHPmeiler
            $mail =  new PHPMailer();

            //configurar STMP (protocolo para el envio de email)
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '64149992ccfc78';
            $mail->Password = 'dc93cb7e982736';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;
        
            //Configurar el contenido del email
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
            $mail->Subject = 'Tienes un nuevo mensaje';

            //Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet='UTF-8';

            //Definir el contenido
            $contenido = '<html>';
            $contenido .='<p>Tienes un nuevo mensaje</p>';
            $contenido .='<p>Nombre: '. $repuestas['nombre'] . ' </p>';
            
            //Enviar de forma condicional algunos campos de email o telefono
            if($repuestas['contacto']==='telefono') {
                $contenido .='<p>Elijio ser contactado por Telefono: </p>';
                $contenido .='<p>Telefono: '. $repuestas['telefono'] . ' </p>';
                $contenido .='<p>Fecha Contacto: '. $repuestas['fecha'] . ' </p>';
                $contenido .='<p>Hora: '. $repuestas['hora'] . ' </p>';


            }else {
                //Es email, entonces agregamos el campo de email
                $contenido .='<p>Elijio ser contactado por Email: </p>';
                $contenido .='<p>Email: '. $repuestas['email'] . ' </p>';
            }

            $contenido .='<p>Mensaje: '. $repuestas['mensaje'] . ' </p>';
            $contenido .='<p>Vende o Compra: '. $repuestas['tipo'] . ' </p>';
            $contenido .='<p>Precio o Presupuesto: $'. $repuestas['precio'] . ' </p>';
            $contenido .='<p>Prefire ser contactado por: '. $repuestas['contacto'] . ' </p>';
            $contenido .='</html>';

            $mail->Body = $contenido;
            $mail->AltBody = "Esto es texto alternatico sin html";

            //Enviar el email
            if($mail->send()) {
                $mensaje = "Mensaje enviado Correctamente";
            }else {
                $mensaje = "El Mensaje no fue enviado";
            }
        }

        $router->render('paginas/contacto',[
            'mensaje' => $mensaje
        ]);
    }

}