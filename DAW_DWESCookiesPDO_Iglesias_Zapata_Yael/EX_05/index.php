<?php
session_start();

if (isset($_SESSION["daw2"])) {
    header("Location: bienvenida.php");
    exit();
}

$host = "db.fmesasc.com";
$nombre_db = "daw2";
$usuario = "daw2";
$contrasena = "Gimbernat";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$nombre_db", $usuario, $contrasena);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

function validarRegistro($nombre, $correo, $contrasena, $fecha_nacimiento) {
    if (empty($nombre) || empty($correo) || empty($contrasena) || empty($fecha_nacimiento)) {
        return "Todos los campos son obligatorios.";
    }
    return "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registro"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $error = validarRegistro($nombre, $correo, $contrasena, $fecha_nacimiento);

    if (empty($error)) {

        $es_administrador = 0;
        $imagen = null;

        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, correo, contrasena, fecha_nacimiento, es_administrador, imagen) VALUES (:nombre, :correo, :contrasena, :fecha_nacimiento, :es_administrador, :imagen)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
        $stmt->bindParam(':es_administrador', $es_administrador);
        $stmt->bindParam(':imagen', $imagen);


        if ($stmt->execute()) {
           
            header("Location: inicio_sesion.php");
            exit();
        } else {
            $error = "Error al registrar usuario.";
        }
    }
}


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
<h2>Registro de Usuario</h2>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="correo">Correo:</label>
    <input type="email" name="correo" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required><br>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" required><br>

    <button type="submit" name="registro">Registrarse</button>
</body>
</html>

