<?php
session_start();

$_SESSION['puntos_acumulados'] = 0;

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];

    header("Location: pagina_usuario.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
</head>
<body>
    <h1>Bienvenido a la Página de Inicio de Sesión</h1>
    <form method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
