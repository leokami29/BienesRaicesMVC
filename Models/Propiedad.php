<?php

namespace Model;



class Propiedad extends ActiveRecord{
    protected static $tabla = 'propiedades';

    protected static $columnasDB = ['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','vendedorId'];

    
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;


    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedorId'] ?? '';
    }

    public function validar() {

        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if (!$this->precio) {
            self::$errores[] = "El Precio es Obligatorio";
        }
        
        if (!$this->imagen) {
            self::$errores[] = "La imagen de la propiedad es obligatoria";
        }

        if (!$this->descripcion) {
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if (!$this->habitaciones) {
            self::$errores[] = "El numero de habitaciones es obligatorios";
        }

        if (!$this->wc) {
            self::$errores[] = "El numero de baños es obligatorios";
        }

        if (!$this->estacionamiento) {
            self::$errores[] = "El numero de estacionamientos es obligatorios";
        }

        if (!$this->vendedorId) {
            self::$errores[] = "Elije un vendedor";
        }

        
        return self::$errores;
    }
}



