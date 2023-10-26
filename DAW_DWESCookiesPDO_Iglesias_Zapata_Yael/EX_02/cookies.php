<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["language"])) {
        // Obtén los valores enviados desde el formulario
        $username = $_POST["username"];
        $language = $_POST["language"];

        // Establece las cookies con los valores del formulario
        setcookie("username", $username, time() + 3600 * 24 * 30); // Cookie válida por 30 días
        setcookie("language", $language, time() + 3600 * 24 * 30); // Cookie válida por 30 días

        // Redirige de nuevo al formulario con un mensaje de éxito
        header("Location: index.php?message=Configuración guardada con éxito");
        exit();
    } else {
        echo "Se requieren todos los campos del formulario.";
    }
}
?>
