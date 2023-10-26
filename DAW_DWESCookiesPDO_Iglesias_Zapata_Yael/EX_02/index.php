<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Configuración</title>
</head>
<body>
    <h1>Configuración de usuarios</h1>
    <form action="cookies.php" method="POST">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="language">Lengua por defecto:</label>
        <select name="language" id="language">
            <option value="es">Español</option>
            <option value="en">Inglés</option>
        </select>
        <br>
        <input type="submit" value="Guardar Configuración">
    </form>
  
</body>
</html>
