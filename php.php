<?php
    echo "Yael Iglesias";

    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Junio', 'Julio', 'Agosto'];

    ?>

    <DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Meses del año</title>
        </head>
        <body>
        <h1>Meses del año</h1>
        <ul>

            <?php

            foreach ($meses as $mes){
                    echo '<li>'.$mes.'</li>';
            }
            ?>
        </ul>
        </body>

        </html>

