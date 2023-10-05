<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_02</title>
</head>
<body>

<?php

    require 'Empleado.php';

    $empleado1 = new Empleado('Pepe', 1500);
    $empleado2 = new Empleado('Jacinto', 2500);

    if ($empleado1->sueldo > 2000){
        echo  "$empleado1->nombre Debes pagar impuestos <br>";
    } else{
        echo  "$empleado1->nombre No debes pagar impuestos <br>";
    }
    if ($empleado2->sueldo > 2000){
        echo  "$empleado2->nombre Debes pagar impuestos";
    } else{
        echo  "$empleado2->nombre No debes pagar impuestos";
    }
?>
    
</body>
</html>