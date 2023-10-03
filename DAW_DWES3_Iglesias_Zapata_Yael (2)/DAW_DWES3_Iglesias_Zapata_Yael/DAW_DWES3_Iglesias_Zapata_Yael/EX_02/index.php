<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_02</title>
</head>
<body>
    <h1>Compañeros de clase</h1>
<ul>
    <?php
    $nombres = array('Joan', 'Ramon', 'Ariel', 'Pau', 'Pablo', 'David', 'Joel', 'Yael', 'Lidia', 'Pep', 'Kilian', 'Oliver');

    $totalCompaneros = count($nombres);

    foreach ($nombres as $nombre) {
        echo '<li>' . $nombre . '</li>';
    }
    echo 'Total de compañeros: ' . $totalCompaneros;
    ?>
</ul>
</body>
</html>
