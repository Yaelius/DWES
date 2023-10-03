<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_11</title>
</head>
<body>

<?php
    function mayus($cadena){
        return strcmp ($cadena, strtoupper($cadena)) == 0;
    }

    $cadena1 = "HoLa Mundo";
    $cadena2 = "ADIOS MUNDO CRUEL";

    $siono = mayus($cadena1) ? 'si' : 'no';
    $siono2 = mayus($cadena2) ? 'si' : 'no';

    echo "<p>$cadena1 esta en mayusculas: $siono</p>";
    echo "<p>$cadena2 esta en mayusculas: $siono2</p>";


?>

</body>
</html>