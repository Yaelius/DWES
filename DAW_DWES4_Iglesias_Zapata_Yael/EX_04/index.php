<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_04</title>
</head>
<body>
<?php
    require 'Producto.php';

    class Main {
        public function run() {
            
            $producto = new Producto('Camiseta', 20);

            $producto->setPrecio(25);

            $producto->setPrecio(30);
        }
    }
    $main = new Main();
    $main->run();
    ?>



</body>
</html>