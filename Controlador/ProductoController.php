<?php
    class ProductoController {
        //private $Servicio;
        
        public function __construct()
        {
            // Aquí creamos la construccion al objeto del Servicio
        }

        public function listarProducto() {
            // Usar el atributo Servicio y trarse los datos de BBDD para mostrarlo en la Vista
        }

        public function ejecuta() {
            $productos = $this->listarProducto();

            // Cargar la vista y guarda los productos
            require_once("Vista/Main.php");
        }
    }
?>