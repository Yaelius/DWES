<?php
require 'Loggable.php';

class Producto {
    use Loggable;

    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($nuevoPrecio) {
        $this->log("\nEl precio del producto '{$this->nombre}' se ha modificado {$this->precio} a $nuevoPrecio\n");
        $this->precio = $nuevoPrecio;
    }
}
?>
