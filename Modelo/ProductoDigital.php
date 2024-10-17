<?php
    include_once 'Producto.php';

    class ProductoDigital extends Producto {
        public function calcularPrecioFinal()
        {
            return $this->precio;
        }
    }
?>