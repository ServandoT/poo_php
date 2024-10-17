<?php 
    abstract class Producto {
        protected $nombre;
        protected $precio;
        protected $categoria = [];

        public function __construct($nombre, $precio)
        {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getPrecio() {
            return $this->precio;
        }

        // Método abstracto que tienen que implementar las clases que heredan esta clase
        abstract public function calcularPrecioFinal();
    }
?>