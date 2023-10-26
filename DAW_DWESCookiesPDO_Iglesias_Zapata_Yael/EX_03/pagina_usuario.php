<?php
session_start();

if (!isset($_SESSION['username'])) {
   
    header("Location: index.php");
    exit();
}

$_SESSION['puntos_acumulados'] += 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página del Usuario</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
    <p>Puntos acumulados: <?php echo $_SESSION['puntos_acumulados']; ?></p>
    <a href="index.php">Cerrar Sesión</a>
</body>
</html>
