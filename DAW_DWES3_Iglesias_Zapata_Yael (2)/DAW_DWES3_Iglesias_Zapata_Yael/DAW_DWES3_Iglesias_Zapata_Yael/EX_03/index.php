<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX_03</title>
</head>

<body>
    <h1>Paises</h1>
    <ul>
        <?php
        $paises = array(
            'USA' => array('nombre' => 'Estados Unidos', 'codigo_numerico' => '840'),
            'CAN' => array('nombre' => 'Canadá', 'codigo_numerico' => '124'),
            'GBR' => array('nombre' => 'Reino Unido', 'codigo_numerico' => '826'),
            'FRA' => array('nombre' => 'Francia', 'codigo_numerico' => '250'),
            'GER' => array('nombre' => 'Alemania', 'codigo_numerico' => '276'),
            'JPN' => array('nombre' => 'Japón', 'codigo_numerico' => '392'),
            'BRA' => array('nombre' => 'Brasil', 'codigo_numerico' => '076'),
            'AUS' => array('nombre' => 'Australia', 'codigo_numerico' => '036'),
            'CHN' => array('nombre' => 'China', 'codigo_numerico' => '156'),
            'IND' => array('nombre' => 'India', 'codigo_numerico' => '356')
        );

        foreach ($paises as $codigo => $info) {
            echo "<li>País: {$info['nombre']}, Código: {$info['codigo_numerico']} (Código ISO-3166 alfa-3: $codigo)</li>";
        }
        ?>
    </ul>

</body>

</html>