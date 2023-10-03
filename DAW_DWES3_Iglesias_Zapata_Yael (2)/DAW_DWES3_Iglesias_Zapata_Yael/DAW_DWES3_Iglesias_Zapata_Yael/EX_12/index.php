<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_12</title>
</head>
<body>

<?php
    function numprim($numeros){
        return sqrt($numeros) == 1;
    }

    $numero1 = 1;
    $numero2 = 10;

    $siono = numprim($numero1) ? 'si' : 'no';
    $siono2 = numprim($numero2) ? 'si' : 'no';

    echo "<p>$siono es un numero primo? $siono</p>";
    echo "<p>$siono2 es un numero primo? $siono2</p>";

?>

</body>
</html>