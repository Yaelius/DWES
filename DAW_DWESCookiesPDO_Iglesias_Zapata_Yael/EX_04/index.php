<?php
$servername = "db.fmesas.com";
$username = "daw2";
$password = "Gimbernat";
$dbname = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa<br>";


    $conn = null;
} catch (PDOException $e) {
    die("La conexión falló: " . $e->getMessage());
}


$conexion = new PDO("mysql:host=db.fmesasc.com;dbname=daw2", 'daw2','Gimbernat');


$resultados = $conexion->query("SELECT * FROM usuarios");

foreach ($resultados as $fila) {
    echo $fila['id'] . " - " . $fila['nombre'] . '<br>';
}

$sql_create_table = "CREATE TABLE IF NOT EXISTS yiglesiasz1_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    es_administrador BOOLEAN NOT NULL DEFAULT 0,
    imagen VARCHAR(255) DEFAULT NULL
)";

try {
    $conexion->exec($sql_create_table);
    echo "Tabla de usuarios creada exitosamente.";
} catch (PDOException $e) {
    echo "Error al crear la tabla de usuarios: " . $e->getMessage();
}
?>
