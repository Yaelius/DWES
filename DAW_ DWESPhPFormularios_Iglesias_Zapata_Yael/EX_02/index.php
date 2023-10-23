<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_02</title>
</head>
<body>
<h2>Calculo Matematico</h2>

<form action="." method="post">
    <label for="texto">Operación (5 / 3):</label>
    <input type="text" id="texto" name="texto" value="5 / 3"><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacion = $_POST['texto'];

    if (is_numeric(eval('return ' . $operacion . ';'))) {
        eval('$resultado = ' . $operacion . ';');

        
        echo "El resultado de la operación es: " . $resultado;
    }
}
?>
</body>
</html>
