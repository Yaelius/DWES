<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_01</title>
</head>
<body>
<h2>Formulario con Textbox</h2>

<form action="calcular_longitud.php" method="post">
    <label for="texto">Texto:</label>
    <input type="text" id="texto" name="texto" value="1234 hola que tal blablabla"><br><br>

    <input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];
    echo "El texto ingresado es: " . $texto;


    $longitud = strlen($texto);

    echo "<br>La longitud del texto es: $longitud caracteres.";
}
?>

</body>
</html>
